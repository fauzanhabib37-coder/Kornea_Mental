<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dasbor Institusi | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
tailwind.config = {
    darkMode:"class",
    theme:{extend:{colors:{
        "primary":"#2e0052","on-surface-variant":"#4c4451","surface-container-high":"#e7e8ee",
        "primary-container":"#4b0082","on-surface":"#191c20","on-primary":"#ffffff",
        "primary-fixed":"#f0dbff","surface-container-low":"#f2f3f9","surface":"#f8f9ff",
        "outline-variant":"#cec3d3","surface-tint":"#7b41b3","error":"#ba1a1a",
        "error-container":"#ffdad6","background":"#f8f9ff","surface-container-lowest":"#ffffff",
    },fontFamily:{"headline":["Manrope"],"body":["Inter"]}}},
}
</script>
<style>
.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;}
.bg-mesh{background-color:#f8f9ff;background-image:radial-gradient(at 0% 0%,rgba(123,65,179,.08) 0px,transparent 50%),radial-gradient(at 100% 0%,rgba(75,0,130,.05) 0px,transparent 50%),radial-gradient(at 100% 100%,rgba(46,0,82,.03) 0px,transparent 50%);}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-thumb{background:rgba(123,65,179,.2);border-radius:4px}
@keyframes countUp{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
.stat-card{animation:countUp .5s ease-out both;}
</style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png">
</head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">

@include('institusi._sidebar', ['active' => 'dashboard'])

<main class="flex-1 h-full flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-10">
    <div class="flex items-center gap-3">
        <h2 class="font-headline font-bold text-xl text-primary">Dasbor Institusi</h2>
        <span class="hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-green-50 text-green-700 border border-green-200">
            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> Sistem Aktif
        </span>
    </div>
    <div class="flex items-center gap-3">
        <a href="{{ route('institusi.deteksi') }}" class="flex items-center gap-2 bg-gradient-to-br from-primary to-primary-container text-white px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:shadow-primary/30 hover:-translate-y-0.5 transition-all">
            <span class="material-symbols-outlined text-sm">add</span>
            <span class="hidden sm:inline">Deteksi Siswa</span>
        </a>
    </div>
</header>

<div class="flex-1 overflow-y-auto p-6 md:p-8">
<div class="max-w-screen-xl mx-auto space-y-6">

<!-- KPI Cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="stat-card bg-surface-container-lowest rounded-2xl p-5 border border-outline-variant/15 shadow-sm" style="animation-delay:.05s">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-bold text-outline uppercase tracking-wider">Total Siswa</p>
            <span class="w-9 h-9 rounded-xl bg-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-[20px]">group</span>
            </span>
        </div>
        <p class="font-headline font-black text-4xl text-primary">{{ $total_students }}</p>
        <p class="text-xs text-on-surface-variant mt-1">Siswa terdaftar & dipantau</p>
    </div>
    <div class="stat-card bg-surface-container-lowest rounded-2xl p-5 border border-outline-variant/15 shadow-sm" style="animation-delay:.1s">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-bold text-outline uppercase tracking-wider">Rata-rata Fokus</p>
            <span class="w-9 h-9 rounded-xl bg-surface-tint/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-surface-tint text-[20px]">center_focus_strong</span>
            </span>
        </div>
        <p class="font-headline font-black text-4xl text-surface-tint">{{ $avg_focus }}<span class="text-lg font-bold">%</span></p>
        <p class="text-xs text-on-surface-variant mt-1">Rata-rata skor fokus kelas</p>
    </div>
    <div class="stat-card bg-surface-container-lowest rounded-2xl p-5 border border-outline-variant/15 shadow-sm" style="animation-delay:.15s">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-bold text-outline uppercase tracking-wider">Butuh Perhatian</p>
            <span class="w-9 h-9 rounded-xl bg-error/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-error text-[20px]">warning</span>
            </span>
        </div>
        <p class="font-headline font-black text-4xl text-error">{{ $alert_count }}</p>
        <p class="text-xs text-on-surface-variant mt-1">Siswa berisiko tinggi</p>
    </div>
    <div class="stat-card bg-surface-container-lowest rounded-2xl p-5 border border-outline-variant/15 shadow-sm" style="animation-delay:.2s">
        <div class="flex items-center justify-between mb-3">
            <p class="text-xs font-bold text-outline uppercase tracking-wider">Sesi Selesai</p>
            <span class="w-9 h-9 rounded-xl bg-green-500/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-green-600 text-[20px]">check_circle</span>
            </span>
        </div>
        <p class="font-headline font-black text-4xl text-green-600">{{ $students->where('status_label', '!=', 'Belum Terdeteksi')->count() }}</p>
        <p class="text-xs text-on-surface-variant mt-1">Siswa dalam kondisi optimal</p>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
    <!-- Focus Score Chart -->
    <div class="lg:col-span-2 bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-6">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h3 class="font-headline font-bold text-base text-primary">Distribusi Skor Fokus</h3>
                <p class="text-xs text-on-surface-variant">Per-siswa yang telah dideteksi</p>
            </div>
            <span class="text-xs bg-surface-container-low px-3 py-1 rounded-full font-bold text-on-surface-variant border border-outline-variant/20">Semua Siswa</span>
        </div>
        <div class="relative h-48">
            <canvas id="focusChart"></canvas>
        </div>
    </div>
    <!-- Alert Breakdown -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-6">
        <h3 class="font-headline font-bold text-base text-primary mb-4">Status Siswa</h3>
        <div class="relative h-40">
            <canvas id="statusChart"></canvas>
        </div>
        <div class="mt-4 space-y-2">
            @php
                $optimal = $students->where('focus_score', '>=', 75)->count();
                $warning = $students->where('focus_score', '>=', 55)->where('focus_score', '<', 75)->count();
                $critical = $students->where('focus_score', '<', 55)->count();
            @endphp
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-green-500"></span><span>Optimal</span></div>
                <span class="font-bold">{{ $optimal }} siswa</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-yellow-500"></span><span>Fokus Menurun</span></div>
                <span class="font-bold">{{ $warning }} siswa</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-red-500"></span><span>Kelelahan Visual</span></div>
                <span class="font-bold">{{ $critical }} siswa</span>
            </div>
        </div>
    </div>
</div>

<!-- Student Summary Table -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/10">
        <div>
            <h3 class="font-headline font-bold text-base text-primary">Ringkasan Semua Siswa</h3>
            <p class="text-xs text-on-surface-variant">Klik nama siswa untuk melihat detail monitoring</p>
        </div>
        <a href="{{ route('institusi.monitoring') }}" class="text-xs font-bold text-surface-tint hover:underline underline-offset-4 flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">open_in_new</span> Lihat Detail
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="bg-surface-container-low/50 border-b border-outline-variant/10 text-[10px] font-bold text-outline uppercase tracking-wider">
                    <th class="px-6 py-3">Siswa</th>
                    <th class="px-6 py-3">NIS</th>
                    <th class="px-6 py-3">Skor Fokus</th>
                    <th class="px-6 py-3">Blink Rate</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/10">
                @foreach($students as $student)
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center font-bold text-xs text-primary shrink-0">{{ $student->initials }}</div>
                            <span class="font-semibold text-on-surface">{{ $student->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">{{ $student->nis }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-16 bg-surface-container h-1.5 rounded-full overflow-hidden">
                                <div class="{{ $student->focus_score >= 75 ? 'bg-green-500' : ($student->focus_score >= 55 ? 'bg-yellow-400' : 'bg-error') }} h-full rounded-full" style="width:{{ $student->focus_score }}%"></div>
                            </div>
                            <span class="text-xs font-bold {{ $student->focus_score < 55 ? 'text-error' : '' }}">{{ $student->focus_score }}%</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs text-on-surface-variant">{{ $student->blink_rate }}</td>
                    <td class="px-6 py-4">
                        <span class="text-[10px] font-bold px-2.5 py-1 rounded-md border {{ $student->status_color }}">{{ $student->status_label }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('institusi.monitoring') }}?student={{ $student->id }}" class="flex items-center gap-1 text-xs font-bold text-surface-tint hover:text-primary transition-colors">
                            <span class="material-symbols-outlined text-[14px]">analytics</span> Analitik
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</div><!-- end max-w -->
</div><!-- end scroll -->
</main>

<script>
// Focus chart — only students who have been detected (focus_score > 0)
const allStudents = @json($students);
const detectedStudents = allStudents.filter(s => s.status_label !== 'Belum Terdeteksi');
const studentNames = detectedStudents.map(s => s.name);
const scores = detectedStudents.map(s => s.focus_score);
const colors = scores.map(s => s >= 75 ? '#22c55e' : s >= 55 ? '#eab308' : '#ba1a1a');

new Chart(document.getElementById('focusChart'), {
    type: 'bar',
    data: {
        labels: studentNames,
        datasets: [{
            label: 'Skor Fokus (%)',
            data: scores,
            backgroundColor: colors.map(c => c + '33'),
            borderColor: colors,
            borderWidth: 2,
            borderRadius: 6,
        }]
    },
    options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}},
        scales:{ y:{min:0,max:100,grid:{color:'rgba(0,0,0,0.04)'},ticks:{font:{size:11}}}, x:{ticks:{font:{size:11}}}} }
});

// Status donut
const optimal  = {{ $students->where('focus_score', '>=', 75)->count() }};
const warning  = {{ $students->where('focus_score', '>=', 55)->where('focus_score', '<', 75)->count() }};
const critical = {{ $students->where('focus_score', '<', 55)->count() }};
new Chart(document.getElementById('statusChart'), {
    type: 'doughnut',
    data: {
        labels: ['Optimal','Fokus Menurun','Kelelahan Visual'],
        datasets: [{ data:[optimal,warning,critical], backgroundColor:['#22c55e','#eab308','#ba1a1a'], borderWidth:0, hoverOffset:4 }]
    },
    options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}} }
});
</script>
</body></html>
