<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Analitik Institusi (Sekolah) | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2e0052",
                        "on-surface-variant": "#4c4451",
                        "surface-container-high": "#e7e8ee",
                        "primary-container": "#4b0082",
                        "on-surface": "#191c20",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#f0dbff",
                        "surface-container-low": "#f2f3f9",
                        "secondary-fixed-dim": "#d4bbff",
                        "surface": "#f8f9ff",
                        "outline-variant": "#cec3d3",
                        "surface-tint": "#7b41b3",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#ebdcff",
                        "secondary": "#6f48b2",
                        "error-container": "#ffdad6",
                        "background": "#f8f9ff",
                        "surface-container-lowest": "#ffffff"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%);
        }
        .student-row:hover {
            box-shadow: 0 4px 12px rgba(46,0,82,0.05);
            z-index: 10;
        }
    </style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-16 lg:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20">
<div class="px-2 lg:px-6 mb-8 flex items-center justify-center lg:justify-start gap-3">
<a href="{{ route('home') }}" class="flex items-center gap-3">
<img alt="Kornea Mental" class="h-8 w-8 rounded-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<div class="hidden lg:block">
<h1 class="font-headline font-bold text-sm text-primary leading-tight">Kornea Sekolah</h1>
<p class="text-[9px] text-outline uppercase tracking-widest font-bold">Admin Guru</p>
</div>
</a>
</div>
<nav class="flex-1 w-full px-2 space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]">grid_view</span>
<span class="hidden lg:inline text-sm font-medium">Dasbor Utama</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-tint/10 text-surface-tint border-l-4 border-surface-tint transition-colors" href="{{ route('analytics.school') }}">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">groups</span>
<span class="hidden lg:inline text-sm font-bold">Pantau Kelas</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors" href="{{ route('analytics.university') }}">
<span class="material-symbols-outlined text-[20px]">bar_chart</span>
<span class="hidden lg:inline text-sm font-medium">Statistik Universitas</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors" href="{{ route('analytics.results') }}">
<span class="material-symbols-outlined text-[20px]">assignment</span>
<span class="hidden lg:inline text-sm font-medium">Laporan Siswa</span>
</a>
</nav>
<!-- User profile snippet -->
<div class="mt-auto px-4 pb-4 hidden lg:block border-t border-outline-variant/20 pt-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-xs">BP</div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold text-on-surface truncate">Bp. Prasetyo</p>
<p class="text-[10px] text-on-surface-variant truncate">Wali Kelas 11-IPA 1</p>
</div>
<form method="POST" action="{{ route('logout') }}" class="ml-auto flex items-center">
    @csrf
    <button type="submit" class="material-symbols-outlined text-outline hover:text-error text-sm cursor-pointer flex" title="Keluar">logout</button>
</form>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 h-full flex flex-col overflow-hidden relative">
<!-- Top App Bar -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest border-b border-outline-variant/10 sticky top-0 z-10">
<div class="flex items-center gap-4">
<h2 class="font-headline font-bold text-lg text-primary">Monitoring Fokus Kelas</h2>
<span class="bg-surface-container-low border border-outline-variant/20 text-on-surface-variant text-[10px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> Sesi G-Meet Aktif
            </span>
</div>
<div class="flex items-center gap-4">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
<input class="pl-9 pr-4 py-1.5 bg-surface-container border-none rounded-md text-sm w-64 focus:ring-2 focus:ring-primary/20 placeholder:text-outline" placeholder="Cari nama siswa..." type="text"/>
</div>
<button class="bg-surface-tint text-on-primary text-xs font-bold px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition-all">Akhiri Sesi Monitoring</button>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-4 md:p-8 bg-surface">
<div class="max-w-screen-2xl mx-auto">
<!-- Info Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
<div>
<h3 class="font-headline font-extrabold text-2xl text-primary">Kelas 11 IPA 1 - Fisika Lanjutan</h3>
<p class="text-sm font-medium text-on-surface-variant mt-1 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px]">schedule</span> 08:30 - 10:00 (Sisa 45 mnt)
                </p>
</div>
<div class="flex gap-3">
<div class="bg-surface-container-lowest p-3 rounded-xl border border-outline-variant/15 flex flex-col items-center min-w-[100px]">
<span class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Total Hadir</span>
<span class="font-headline font-extrabold text-xl text-primary">32<span class="text-sm text-outline">/34</span></span>
</div>
<div class="bg-surface-container-lowest p-3 rounded-xl border border-outline-variant/15 flex flex-col items-center min-w-[100px]">
<span class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Rata² Fokus</span>
<span class="font-headline font-extrabold text-xl text-green-600">78%</span>
</div>
</div>
</div>
<!-- Alert Banners -->
<div class="mb-6 bg-error-container/40 border border-error/20 rounded-xl p-4 flex items-start gap-4 shadow-sm">
<span class="material-symbols-outlined text-error mt-0.5" style="font-variation-settings: 'FILL' 1;">warning</span>
<div class="flex-1">
<h4 class="font-bold text-sm text-error">Peringatan Penurunan Fokus Signifikan</h4>
<p class="text-xs text-on-surface-variant font-medium mt-1">Sistem mendeteksi 5 siswa menunjukkan tanda kelelahan visual tingkat tinggi (Blink Rate &gt; 25/mnt) dalam 10 menit terakhir materi Grafik Termodinamika.</p>
</div>
<button class="text-[10px] font-bold uppercase tracking-wider bg-white border border-error/20 text-error px-3 py-1.5 rounded hover:bg-error-container transition-colors">Lihat Siswa</button>
</div>
<!-- Students List (Grid/Table view) -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm overflow-hidden">
<div class="p-4 border-b border-outline-variant/10 bg-surface-container-low/50 flex justify-between items-center">
<h4 class="font-headline font-bold text-sm text-primary">Daftar Siswa Real-time</h4>
<div class="flex gap-2">
<button class="text-xs font-bold text-surface-tint flex items-center gap-1 hover:bg-surface-container px-2 py-1 rounded transition-colors"><span class="material-symbols-outlined text-[16px]">filter_list</span> Filter</button>
<button class="text-xs font-bold text-outline flex items-center gap-1 hover:bg-surface-container px-2 py-1 rounded transition-colors"><span class="material-symbols-outlined text-[16px]">sort</span> Urutkan: Tingkat Fokus</button>
</div>
</div>
<!-- List Content -->
<div class="divide-y divide-outline-variant/10">
@foreach($students as $student)
<div class="p-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 {{ $student->has_alert ? 'bg-error/5 student-row' : 'student-row bg-white' }} transition-all relative">
@if($student->has_alert)
<div class="absolute left-0 top-0 bottom-0 w-1 bg-error"></div>
@endif
<div class="flex items-center gap-4 w-full md:w-1/3">
<div class="relative">
<div class="w-10 h-10 rounded-full bg-slate-200 border-2 {{ $student->has_alert ? 'border-error' : 'border-slate-300' }} overflow-hidden flex items-center justify-center font-bold text-primary text-xs">
    {{ $student->initials }}
</div>
<span class="absolute -bottom-1 -right-1 w-3.5 h-3.5 {{ $student->has_alert ? 'bg-error' : 'bg-green-500' }} rounded-full border-2 border-white"></span>
</div>
<div>
<h5 class="font-bold text-sm text-on-surface leading-none mb-1">{{ $student->name }}</h5>
<p class="text-[10px] text-outline font-mono">{{ $student->nis }}</p>
</div>
</div>
<!-- Progress Bars -->
<div class="w-full md:w-1/3 space-y-3">
<div>
<div class="flex justify-between text-[10px] mb-1 font-bold">
<span class="text-on-surface-variant">Skor Perhatian</span><span class="{{ $student->has_alert ? 'text-error' : 'text-green-600' }}">{{ $student->focus_score }}%</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full rounded-full {{ $student->has_alert ? 'bg-error' : 'bg-green-500' }}" style="width: {{ $student->focus_score }}%"></div>
</div>
</div>
</div>
<!-- Metrics -->
<div class="w-full md:w-1/4 flex justify-between px-4">
<div class="text-center">
<p class="text-[10px] text-outline font-bold uppercase tracking-wider mb-0.5">Kedipan</p>
<p class="text-xs font-bold {{ $student->has_alert ? 'text-error' : 'text-on-surface' }}">{{ $student->blink_rate }}</p>
</div>
<div class="text-center">
<p class="text-[10px] text-outline font-bold uppercase tracking-wider mb-0.5">Saccade</p>
<p class="text-xs font-bold {{ $student->has_alert ? 'text-error' : 'text-on-surface' }}">{{ $student->saccade_status }}</p>
</div>
</div>
<!-- Action -->
<div class="w-full md:w-auto flex justify-end">
<button class="{{ $student->status_color }} border border-outline-variant/30 text-xs font-bold px-3 py-1.5 rounded-md shadow-sm w-full md:w-auto">
    {{ $student->status_label }}
</button>
</div>
</div>
@endforeach
</div>
<!-- Pagination mock -->
<div class="p-4 bg-surface-container-low/30 border-t border-outline-variant/10 flex justify-between items-center text-xs font-medium text-outline">
<span>Menampilkan 1-3 dari 32 Siswa</span>
<div class="flex gap-2">
<button class="px-2 py-1 bg-white border border-outline-variant/20 rounded opacity-50 cursor-not-allowed">Prev</button>
<button class="px-2 py-1 bg-white border border-outline-variant/20 rounded shadow-sm text-on-surface">1</button>
<button class="px-2 py-1 bg-white border border-outline-variant/20 rounded hover:bg-surface-container transition-colors">2</button>
<button class="px-2 py-1 bg-white border border-outline-variant/20 rounded hover:bg-surface-container transition-colors">3</button>
<button class="px-2 py-1 bg-white border border-outline-variant/20 rounded hover:bg-surface-container transition-colors shadow-sm text-on-surface">Next</button>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>

