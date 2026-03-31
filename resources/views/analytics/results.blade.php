<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Hasil Analisis | Kornea Mental</title>
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
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(46, 0, 82, 0.03) 0px, transparent 50%);
        }
        .data-gradient { background: linear-gradient(135deg, #2e0052 0%, #4b0082 100%); }
    </style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">
<!-- Sidebar Navigation (Simplified for context) -->
<aside class="w-16 lg:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20 transition-all">
<div class="px-2 lg:px-6 mb-8 flex justify-center lg:justify-start">
<a href="{{ route('home') }}" class="flex items-center gap-3">
<img alt="Logo" class="h-8 w-8 rounded shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<div class="hidden lg:block">
<h1 class="font-headline font-bold text-sm text-primary leading-none">Kornea Mental</h1>
</div>
</a>
</div>
<nav class="flex-1 w-full px-2 space-y-1">
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="hidden lg:inline text-sm">Dasbor</span>
</a>
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold relative" href="{{ route('analytics.results') }}">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="hidden lg:inline text-sm">Hasil Analisis</span>
<div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
</a>
</nav>
</aside>
<!-- Main Content Area -->
<main class="flex-1 h-full flex flex-col overflow-hidden relative">
<!-- Top App Bar -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-30">
<div class="flex items-center gap-4">
<div>
<h2 class="font-headline font-bold text-xl text-primary leading-tight">Detail Sesi #KM-4921</h2>
<p class="text-[10px] font-medium text-outline uppercase tracking-wider">Ahmad B. | 24 Okt 2023, 14:30 WIB</p>
</div>
<span class="ml-4 hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase border border-outline-variant text-on-surface-variant">
<span class="material-symbols-outlined text-[12px]">lock</span> Data Privat Valid
                </span>
</div>
<div class="flex items-center gap-3">
<button class="p-2.5 text-on-surface-variant hover:bg-surface-container rounded-lg border border-outline-variant/30 font-medium text-sm flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-[18px]">download</span> <span class="hidden md:inline">Ekspor Laporan (PDF)</span>
</button>
<button class="data-gradient text-on-primary px-4 py-2.5 rounded-lg font-bold text-sm shadow-md flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">share</span> <span class="hidden sm:inline">Bagikan</span>
</button>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-4 md:p-8 space-y-6">
<div class="max-w-screen-2xl mx-auto space-y-6">
<!-- Top Stats Row -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="bg-surface-container-lowest rounded-xl p-5 border border-outline-variant/15 shadow-sm">
<div class="text-[10px] font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">timer</span> Durasi Aktif</div>
<div class="font-headline text-3xl font-extrabold text-primary">45<span class="text-sm font-medium text-on-surface-variant">m</span> 12<span class="text-sm font-medium text-on-surface-variant">s</span></div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-5 border border-outline-variant/15 shadow-sm relative overflow-hidden">
<div class="text-[10px] font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">psychology</span> Skor Fokus Rata-rata</div>
<div class="font-headline text-3xl font-extrabold text-green-600">82%</div>
<div class="absolute right-0 bottom-0 top-0 w-1/3 bg-gradient-to-l from-green-50 to-transparent"></div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-5 border border-outline-variant/15 shadow-sm">
<div class="text-[10px] font-bold text-outline uppercase tracking-wider mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">visibility</span> Laju Kedipan</div>
<div class="font-headline text-3xl font-extrabold text-surface-tint">14<span class="text-sm font-medium text-on-surface-variant">/mnt</span></div>
<p class="text-[9px] text-green-600 font-bold mt-1">Normal (Baseline: 15-20)</p>
</div>
<div class="bg-surface-container-lowest rounded-xl p-5 border border-error-container/50 bg-error/5 shadow-sm">
<div class="text-[10px] font-bold text-error uppercase tracking-wider mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">trending_up</span> Puncak Kelelahan</div>
<div class="font-headline text-3xl font-extrabold text-error">2<span class="text-sm font-medium text-error/70"> kali</span></div>
<p class="text-[9px] text-error mt-1 italic font-medium">Terdeteksi pada menit ke-22 &amp; 41</p>
</div>
</div>
<!-- Heatmap & Gaze Path Visualization Area -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
<!-- Main Visualizer -->
<div class="xl:col-span-2 glass-card rounded-2xl p-6 flex flex-col">
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="font-headline text-lg font-bold text-primary">Distribusi Perhatian (Heatmap)</h3>
<p class="text-xs text-on-surface-variant">Area pada antarmuka target yang paling banyak menerima fiksasi visual.</p>
</div>
<div class="flex bg-surface-container-low rounded-lg p-1 border border-outline-variant/20">
<button class="px-3 py-1.5 text-xs font-bold text-on-surface rounded-md shadow-sm bg-white border border-outline-variant/10">Heatmap</button>
<button class="px-3 py-1.5 text-xs font-medium text-on-surface-variant hover:text-primary rounded-md">Saccade Path</button>
<button class="px-3 py-1.5 text-xs font-medium text-on-surface-variant hover:text-primary rounded-md">Area of Interest</button>
</div>
</div>
<!-- Abstract Web/UI Mockup with Heatmap Overlay -->
<div class="flex-1 w-full bg-slate-900 rounded-xl relative overflow-hidden min-h-[400px] border border-slate-800 shadow-inner">
<!-- Fake UI Wireframe underneath -->
<div class="absolute inset-x-0 top-0 h-10 bg-slate-800 flex items-center px-4 gap-2">
<div class="w-3 h-3 rounded-full bg-slate-600"></div><div class="w-3 h-3 rounded-full bg-slate-600"></div><div class="w-3 h-3 rounded-full bg-slate-600"></div>
<div class="w-1/3 h-4 bg-slate-700 rounded-md mx-6"></div>
</div>
<div class="absolute inset-4 top-14 flex gap-4">
<div class="w-1/4 bg-slate-800 rounded-lg hidden md:block"></div>
<div class="flex-1 flex flex-col gap-4">
<div class="h-32 bg-slate-800 rounded-lg"></div>
<div class="flex-1 bg-slate-800 rounded-lg"></div>
</div>
</div>
<!-- Heatmap Blobs (Simulated) -->
<div class="absolute top-[30%] left-[40%] w-48 h-48 rounded-full bg-error/70 mix-blend-screen blur-[40px]"></div>
<div class="absolute top-[35%] left-[45%] w-24 h-24 rounded-full bg-yellow-400/90 mix-blend-screen blur-[20px]"></div>
<div class="absolute top-[40%] left-[50%] w-12 h-12 rounded-full bg-white mix-blend-screen blur-[8px]"></div>
<div class="absolute top-[60%] left-[20%] w-32 h-32 rounded-full bg-blue-500/50 mix-blend-screen blur-[30px] md:block hidden"></div>
<div class="absolute top-[15%] left-[80%] w-40 h-20 rounded-full bg-green-500/40 mix-blend-screen blur-[25px]"></div>
<!-- Saccade path lines (faint) -->
<svg class="absolute inset-0 w-full h-full pointer-events-none opacity-30" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M 40 30 Q 50 20 60 40 T 80 15 T 45 60 T 20 50" fill="none" stroke="white" stroke-width="0.5" stroke-dasharray="1 1"/>
<circle cx="40" cy="30" r="1" fill="white"/>
<circle cx="60" cy="40" r="1.5" fill="white"/>
<circle cx="80" cy="15" r="0.8" fill="white"/>
<circle cx="45" cy="60" r="2" fill="white"/>
</svg>
<!-- Custom Legend Overlay -->
<div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur-md border border-white/10 rounded-lg p-3">
<div class="text-[9px] font-bold text-white/70 uppercase tracking-widest mb-2">Intensitas Fiksasi</div>
<div class="w-32 h-2 rounded-full bg-gradient-to-r from-blue-500 via-yellow-400 to-error"></div>
<div class="flex justify-between text-[8px] text-white/50 mt-1"><span>Rendah</span><span>Tinggi</span></div>
</div>
</div>
</div>
<!-- Cognitive Timeline & Insights -->
<div class="space-y-6">
<!-- Timeline Graph Mock -->
<div class="bg-surface-container-lowest rounded-2xl p-6 border border-outline-variant/15 shadow-sm">
<h4 class="font-headline font-bold text-sm text-primary mb-4">Grafik Garis Waktu Real-time</h4>
<div class="h-32 flex items-end gap-1 relative overflow-hidden">
<!-- Decorative grid -->
<div class="absolute inset-0 bg-[linear-gradient(rgba(0,0,0,0.03)_1px,transparent_1px)] bg-[size:100%_25px]"></div>
<!-- Simulated Bars for Engagement -->
<div class="w-full flex items-end justify-between h-full pt-4 z-10 opcaity-90">
<div class="w-1/12 bg-primary/40 h-[60%] rounded-t-sm"></div>
<div class="w-1/12 bg-primary/60 h-[80%] rounded-t-sm"></div>
<div class="w-1/12 bg-primary/80 h-[90%] rounded-t-sm"></div>
<div class="w-1/12 bg-surface-tint h-[95%] rounded-t-sm"></div>
<div class="w-1/12 bg-error/60 h-[40%] rounded-t-sm relative"><div class="absolute -top-6 -left-4 bg-error text-white text-[8px] px-1.5 py-0.5 rounded shadow whitespace-nowrap">Distraksi</div></div>
<div class="w-1/12 bg-primary/30 h-[50%] rounded-t-sm"></div>
<div class="w-1/12 bg-primary/50 h-[70%] rounded-t-sm"></div>
<div class="w-1/12 bg-primary/90 h-[100%] rounded-t-sm"></div>
</div>
</div>
<div class="flex justify-between text-[9px] text-outline font-bold mt-2 font-mono">
<span>00:00</span><span>15:00</span><span>30:00</span><span>45:00</span>
</div>
</div>
<!-- AI Generated Insights -->
<div class="bg-gradient-to-br from-surface-container-lowest to-primary-fixed/20 rounded-2xl p-6 border border-primary/10 shadow-sm relative overflow-hidden">
<div class="absolute -right-4 -top-4 text-primary opacity-5 material-symbols-outlined text-[120px] pointer-events-none" style="font-variation-settings: 'FILL' 1;">auto_awesome</div>
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-surface-tint text-base" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
<h4 class="font-headline font-bold text-sm text-primary">Interpretasi AI</h4>
</div>
<ul class="space-y-4 text-xs">
<li class="flex items-start gap-3">
<div class="w-1.5 h-1.5 rounded-full bg-error mt-1.5"></div>
<p class="text-on-surface-variant leading-relaxed">Peningkatan pola <strong>saccadic regression</strong> yang signifikan pada menit 22 (menunjukkan kesulitan membaca/memproses informasi pada dokumen teknis).</p>
</li>
<li class="flex items-start gap-3">
<div class="w-1.5 h-1.5 rounded-full bg-green-500 mt-1.5"></div>
<p class="text-on-surface-variant leading-relaxed">Fiksasi pada area diagram kontrol <strong>3x lebih lama</strong> dari pada teks penjelasan, merekomendasikan penggunaan visual yang lebih baik.</p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>

