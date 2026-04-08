<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dasbor | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(46, 0, 82, 0.03) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(186, 126, 244, 0.05) 0px, transparent 50%);
        }
        .heatmap-overlay {
            mix-blend-mode: screen;
            opacity: 0.6;
        }
    </style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-20 lg:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20 transition-all flex-shrink-0">
    <div class="px-2 lg:px-6 mb-8 flex justify-center lg:justify-start">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img alt="Logo" class="h-8 w-8 rounded shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
            <div class="hidden lg:block">
                <h1 class="font-headline font-bold text-sm text-primary leading-none">Kornea Mental</h1>
                <p class="text-[9px] text-outline uppercase tracking-widest font-bold">Portal Institusi</p>
            </div>
        </a>
    </div>
    <nav class="flex-1 w-full px-2 space-y-1 overflow-y-auto">
        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-2 px-3">Portal Institusi</div>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold group transition-all relative overflow-hidden" href="{{ route('institusi.dashboard') }}">
            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="hidden lg:inline text-sm">Dasbor institusi</span>
            <div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
        </a>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('institusi.school') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">school</span>
            <span class="hidden lg:inline text-sm">Analitik sekolah</span>
        </a>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('institusi.university') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">account_balance</span>
            <span class="hidden lg:inline text-sm">Analitik universitas</span>
        </a>

        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-6 px-3">Sub-fitur Kelas</div>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="#">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">monitor_heart</span>
            <span class="hidden lg:inline text-sm">Monitor stres siswa</span>
        </a>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="#">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">trending_up</span>
            <span class="hidden lg:inline text-sm">Tren fokus per kelas</span>
        </a>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="#">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">map</span>
            <span class="hidden lg:inline text-sm">Heatmap kolektif kelas</span>
        </a>
    </nav>
    <div class="w-full px-3 mt-auto pt-4 border-t border-outline-variant/20">
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('institusi.settings') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">settings</span>
            <span class="hidden lg:inline text-sm">Pengaturan institusi</span>
        </a>
        <div class="mt-2 p-2 hidden lg:flex items-center gap-3 rounded-xl bg-surface-container-low border border-outline-variant/10">
            <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-xs shrink-0">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
            <div class="flex-1 overflow-hidden">
                <p class="text-xs font-bold text-on-surface truncate">{{ auth()->user()->name }}</p>
                <p class="text-[10px] text-on-surface-variant truncate">{{ auth()->user()->email }}</p>
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
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 z-10 sticky top-0">
<div class="flex items-center gap-4">
<h2 class="font-headline font-bold text-xl text-primary">Tinjauan</h2>
<span class="hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-green-50 text-green-700 border border-green-200">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                Sistem Aktif
            </span>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
<input class="pl-9 pr-4 py-1.5 bg-surface-container-low border-none rounded-full text-sm focus:ring-2 focus:ring-primary/20 w-64 placeholder:text-outline" placeholder="Cari sesi, klien..." type="text"/>
</div>
<button class="relative p-2 text-on-surface-variant hover:bg-surface-container rounded-full transition-colors">
<span class="material-symbols-outlined text-lg">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 bg-error rounded-full border border-white"></span>
</button>
<button class="flex items-center gap-2 bg-gradient-to-br from-primary to-primary-container text-on-primary px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 transition-all">
<span class="material-symbols-outlined text-sm">add</span> Sesi Baru
            </button>
</div>
</header>
<!-- Scrollable Dashboard Content -->
<div class="flex-1 overflow-y-auto p-8 pt-6">
<div class="max-w-screen-2xl mx-auto space-y-6">
<!-- Summary Metrics for Institution Section -->
<section class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-6">
    <div class="glass-card rounded-2xl p-6 border-l-4 border-l-primary flex flex-col justify-center">
        <h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Total Siswa Dipantau</h3>
        <p class="font-headline font-extrabold text-4xl text-primary">{{ count($students ?? []) }}</p>
    </div>
    <div class="glass-card rounded-2xl p-6 border-l-4 border-l-surface-tint flex flex-col justify-center">
        <h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Fakultas / Kelas</h3>
        <p class="font-headline font-extrabold text-4xl text-surface-tint">{{ count($faculties ?? []) }}</p>
    </div>
    <div class="glass-card bg-surface-container-low rounded-2xl p-6 flex flex-col justify-center relative overflow-hidden group">
        <div class="z-10">
            <h3 class="text-sm font-bold text-on-surface-variant uppercase tracking-wider mb-2">Siswa Berisiko Tinggi</h3>
            <p class="font-headline font-extrabold text-4xl text-error">3</p>
            <p class="text-[10px] text-error mt-2 font-bold cursor-pointer hover:underline">Lihat Detail Notifikasi</p>
        </div>
        <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-error/10 rounded-full blur-2xl group-hover:bg-error/20 transition-all"></div>
    </div>
</section>
<!-- Student Table -->
<section>
<div class="flex justify-between items-center mb-4 px-1">
<h3 class="font-headline font-bold text-lg text-primary">Daftar Siswa Terpantau</h3>
<a class="text-xs font-bold text-surface-tint hover:underline underline-offset-4" href="#">Ekspor Semua Laporan</a>
</div>
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left text-sm">
<thead>
<tr class="bg-surface-container-low/50 border-b border-outline-variant/10 text-[10px] font-bold text-outline uppercase tracking-wider">
<th class="px-6 py-4 rounded-tl-xl font-label">NIS</th>
<th class="px-6 py-4 font-label">Nama Siswa</th>
<th class="px-6 py-4 font-label">Blink Rate</th>
<th class="px-6 py-4 font-label">Skor Fokus</th>
<th class="px-6 py-4 rounded-tr-xl font-label">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body">
@foreach ($students ?? [] as $student)
<tr class="hover:bg-surface-container-low/30 transition-colors group cursor-pointer">
<td class="px-6 py-4 font-mono text-xs text-primary font-medium">{{ $student->nis ?? '-' }}</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed/50 flex flex-col items-center justify-center text-secondary font-bold text-xs uppercase">{{ $student->initials ?? 'XX' }}</div>
<span class="font-semibold text-on-surface group-hover:text-primary transition-colors">{{ $student->name ?? 'Anonim' }}</span>
</div>
</td>
<td class="px-6 py-4 text-on-surface-variant">{{ $student->blink_rate ?? '-' }}</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 bg-surface-container h-1.5 rounded-full overflow-hidden">
<div class="{{ ($student->focus_score ?? 100) < 60 ? 'bg-error' : 'bg-primary' }} object-cover h-full rounded-full" style="width: {{ $student->focus_score ?? 0 }}%"></div>
</div>
<span class="text-xs font-bold">{{ $student->focus_score ?? 0 }}%</span>
</div>
</td>
<td class="px-6 py-4">
@if($student->has_alert ?? false)
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase {{ $student->status_color ?? 'bg-error-container/50 text-error' }}">
<span class="material-symbols-outlined text-[12px] opacity-70">flag</span>
    {{ $student->status_label ?? 'Waspada' }}
</span>
@else
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase {{ $student->status_color ?? 'bg-green-50 text-green-700' }}">
    {{ $student->status_label ?? 'Aman' }}
</span>
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</section>
</div>
</div>
</main>
</body></html>

