<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate Admin User
        User::create([
            'name' => 'Praktisi Medis',
            'email' => 'praktisi@korneamental.ai',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'institution_name' => 'Kornea Mental HQ'
        ]);

        // Generate Dashboard Sessions
        \App\Models\ResearchSession::create([
            'session_code' => '#KM-4921',
            'client_initials' => 'AB',
            'client_name' => 'Ahmad B.',
            'duration' => '45m 12s',
            'avg_focus_score' => 82,
            'status' => 'Selesai',
            'is_alert' => false
        ]);
        \App\Models\ResearchSession::create([
            'session_code' => '#KM-4920',
            'client_initials' => 'CN',
            'client_name' => 'Citra N.',
            'duration' => '1h 20m',
            'avg_focus_score' => 45,
            'status' => 'Diulas',
            'is_alert' => true
        ]);
        \App\Models\ResearchSession::create([
            'session_code' => '#KM-4919',
            'client_initials' => '04',
            'client_name' => 'Anonim 04',
            'duration' => '12m 05s',
            'avg_focus_score' => 68,
            'status' => 'Selesai',
            'is_alert' => false
        ]);

        // Generate School Students Data
        \App\Models\Student::create([
            'name' => 'Dina Rahmawati',
            'nis' => 'NIS: 190204',
            'initials' => 'DR',
            'focus_score' => 64,
            'blink_rate' => '24/mnt (Tinggi)',
            'saccade_status' => 'Normal',
            'status_label' => 'Fokus Menurun',
            'status_color' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
            'has_alert' => true
        ]);
        \App\Models\Student::create([
            'name' => 'Budi Santoso',
            'nis' => 'NIS: 190201',
            'initials' => 'BS',
            'focus_score' => 42,
            'blink_rate' => '12/mnt (Rendah)',
            'saccade_status' => 'Lambat',
            'status_label' => 'Kelelahan Visual',
            'status_color' => 'bg-error-container/50 text-error border-error/20',
            'has_alert' => true
        ]);
        \App\Models\Student::create([
            'name' => 'Citra Kirana',
            'nis' => 'NIS: 190203',
            'initials' => 'CK',
            'focus_score' => 88,
            'blink_rate' => '18/mnt (Normal)',
            'saccade_status' => 'Cepat',
            'status_label' => 'Optimal',
            'status_color' => 'bg-green-50 text-green-700 border-green-200',
            'has_alert' => false
        ]);

        // Generate University Faculty Data
        \App\Models\Faculty::create(['name' => 'Fakultas Teknik', 'student_count' => 845, 'avg_focus' => 72.4, 'fatigue_index' => 45.2, 'status' => 'Stabil', 'requires_attention' => false]);
        \App\Models\Faculty::create(['name' => 'Fakultas Ilmu Komputer', 'student_count' => 1024, 'avg_focus' => 68.1, 'fatigue_index' => 62.8, 'status' => 'Kelelahan Tinggi', 'requires_attention' => true]);
        \App\Models\Faculty::create(['name' => 'Fakultas Kedokteran', 'student_count' => 620, 'avg_focus' => 85.5, 'fatigue_index' => 38.4, 'status' => 'Optimal', 'requires_attention' => false]);
        \App\Models\Faculty::create(['name' => 'Fakultas Ekonomi & Bisnis', 'student_count' => 1250, 'avg_focus' => 76.2, 'fatigue_index' => 41.5, 'status' => 'Stabil', 'requires_attention' => false]);
        \App\Models\Faculty::create(['name' => 'Fakultas Desain Seni', 'student_count' => 430, 'avg_focus' => 58.9, 'fatigue_index' => 71.3, 'status' => 'Perhatian Khusus', 'requires_attention' => true]);
    }
}
