<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ResearchSession;
use Illuminate\Support\Str;

class InstitusiController extends Controller
{
    /** SHARED SIDEBAR DATA */
    private function sidebarData(): array
    {
        $students = Student::all();
        $detected = $students->where('status_label', '!=', 'Belum Terdeteksi');
        return [
            'students'       => $students,
            'total_students' => $students->count(),
            'alert_count'    => $detected->where('has_alert', true)->count(),
            'avg_focus'      => $detected->count() ? round($detected->avg('focus_score')) : 0,
        ];
    }

    /** DASBOR — overview keseluruhan */
    public function dashboard()
    {
        $students = Student::all();
        $data = $this->sidebarData();
        return view('institusi.dashboard', array_merge($data, ['students' => $students]));
    }

    /** MONITORING — log sesi & aktivitas per-siswa */
    public function monitoring()
    {
        $students = Student::all();
        $data = $this->sidebarData();
        return view('institusi.monitoring', array_merge($data, ['students' => $students]));
    }

    /** DETEKSI — rekam sesi eye-tracking per-siswa */
    public function deteksi()
    {
        $students = Student::all();
        $data = $this->sidebarData();
        return view('institusi.deteksi', array_merge($data, ['students' => $students]));
    }

    /** PENGATURAN */
    public function settings()
    {
        return view('dashboard.institusi_settings');
    }

    /** START DETECTION SESSION for a student */
    public function startDetection(Request $request)
    {
        $request->validate([
            'student_id'   => 'required|exists:students,id',
            'session_label'=> 'required|string|max:80',
        ]);

        $student = Student::findOrFail($request->student_id);

        $session = ResearchSession::create([
            'session_code'    => 'KM-' . strtoupper(Str::random(5)),
            'client_initials' => $student->initials,
            'client_name'     => $student->name . ' — ' . $request->session_label,
            'duration'        => '0m 0s',
            'avg_focus_score' => 0,
            'status'          => 'Berlangsung',
            'is_alert'        => false,
        ]);

        return response()->json([
            'success'      => true,
            'session_id'   => $session->id,
            'session_code' => $session->session_code,
            'student_name' => $student->name,
        ]);
    }

    /** END DETECTION SESSION and save metrics */
    public function endDetection(Request $request, $id)
    {
        $session = ResearchSession::findOrFail($id);

        $focusScore  = $request->focus_score ?? 70;
        $blinkRate   = $request->blink_rate  ?? '18/mnt (Normal)';

        $session->update([
            'duration'        => $request->duration ?? '0m 0s',
            'avg_focus_score' => $focusScore,
            'status'          => 'Selesai',
            'is_alert'        => $focusScore < 55,
        ]);

        // Update student metrics
        $student = Student::where('initials', $session->client_initials)->first();
        if ($student) {
            $label = $focusScore >= 75 ? 'Optimal' : ($focusScore >= 55 ? 'Fokus Menurun' : 'Kelelahan Visual');
            $color = $focusScore >= 75
                ? 'bg-green-50 text-green-700 border-green-200'
                : ($focusScore >= 55
                    ? 'bg-yellow-50 text-yellow-700 border-yellow-200'
                    : 'bg-red-50 text-error border-error/20');
            $student->update([
                'focus_score'    => $focusScore,
                'blink_rate'     => $blinkRate,
                'status_label'   => $label,
                'status_color'   => $color,
                'has_alert'      => $focusScore < 55,
            ]);
        }

        return response()->json(['success' => true]);
    }

    /** ADD STUDENT manually */
    public function addStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'nis'  => 'required|string|max:30',
        ]);

        $nisFormatted = 'NIS: ' . $request->nis;
        if (Student::where('nis', $nisFormatted)->exists()) {
            return response()->json(['success' => false, 'message' => 'NIS sudah terdaftar'], 422);
        }

        $words    = explode(' ', trim($request->name));
        $initials = strtoupper(
            substr($words[0], 0, 1) .
            (isset($words[1]) ? substr($words[1], 0, 1) : substr($words[0], 1, 1))
        );

        $student = Student::create([
            'name'           => $request->name,
            'nis'            => $nisFormatted,
            'initials'       => $initials,
            'focus_score'    => 0,
            'blink_rate'     => 'Belum dideteksi',
            'saccade_status' => 'Normal',
            'status_label'   => 'Belum Terdeteksi',
            'status_color'   => 'bg-gray-100 text-gray-600 border-gray-200',
            'has_alert'      => false,
        ]);

        return response()->json(['success' => true, 'message' => 'Siswa berhasil ditambahkan', 'student' => $student]);
    }

    /** IMPORT STUDENTS from CSV */
    public function importStudents(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt|max:2048',
        ]);

        $lines   = array_filter(explode("\n", file_get_contents($request->file('csv_file')->getRealPath())));
        $added   = 0;
        $skipped = 0;

        foreach ($lines as $i => $line) {
            $line = trim($line);
            if ($i === 0 && stripos($line, 'nama') !== false) continue; // skip header row
            $cols = str_getcsv($line);
            if (count($cols) < 2 || empty(trim($cols[0]))) continue;

            $name = trim($cols[0]);
            $nis  = 'NIS: ' . trim($cols[1]);

            if (Student::where('nis', $nis)->exists()) { $skipped++; continue; }

            $words    = explode(' ', $name);
            $initials = strtoupper(substr($words[0], 0, 1) . (isset($words[1]) ? substr($words[1], 0, 1) : substr($words[0], 1, 1)));

            try {
                Student::create([
                    'name'           => $name,
                    'nis'            => $nis,
                    'initials'       => $initials,
                    'focus_score'    => 0,
                    'blink_rate'     => 'Belum dideteksi',
                    'saccade_status' => 'Normal',
                    'status_label'   => 'Belum Terdeteksi',
                    'status_color'   => 'bg-gray-100 text-gray-600 border-gray-200',
                    'has_alert'      => false,
                ]);
                $added++;
            } catch (\Exception $e) {
                $skipped++;
            }
        }

        return response()->json([
            'success' => true,
            'added'   => $added,
            'skipped' => $skipped,
            'message' => "$added siswa berhasil diimpor" . ($skipped > 0 ? ", $skipped dilewati (duplikat/error)" : ''),
        ]);
    }

    /** DELETE STUDENT */
    public function deleteStudent($id)
    {
        Student::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Siswa berhasil dihapus']);
    }
}
