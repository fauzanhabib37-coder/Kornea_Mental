<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Hasil Analitik | Kornea Mental</title>
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
    .tab-panel { display: none; }
    .tab-panel.active { display: block; }
    .tab-btn.active {
        background: white;
        color: #2e0052;
        font-weight: 700;
        box-shadow: 0 1px 4px rgba(0,0,0,0.08);
        border: 1px solid rgba(206,195,211,0.2);
    }
    .subfeat-card {
        transition: all 0.3s ease;
        scroll-margin-top: 80px;
    }
    .subfeat-card:target, .subfeat-card.highlight {
        outline: 2px solid #7b41b3;
        outline-offset: 3px;
    }
    /* Blink rate animation */
    @keyframes blink-anim { 0%,100%{opacity:1} 50%{opacity:0.2} }
    .blink-dot { animation: blink-anim 1.2s ease-in-out infinite; }
    /* Saccade path animation */
    @keyframes draw { to { stroke-dashoffset: 0; } }
    .saccade-path { stroke-dasharray: 2500; stroke-dashoffset: 2500; animation: draw 3.5s ease-in-out forwards; }
    @keyframes pulse-fixation { 0%,100%{r:3; opacity:1} 50%{r:5; opacity:0.5} }
    .fixation-pt { animation: pulse-fixation 1.5s ease-in-out infinite; }
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
                <p class="text-[9px] text-outline uppercase tracking-widest font-bold">Portal Individu</p>
            </div>
        </a>
    </div>
    <nav class="flex-1 w-full px-2 space-y-1 overflow-y-auto">
        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-2 px-3">Portal Individu</div>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('individu.dashboard') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">dashboard</span>
            <span class="hidden lg:inline text-sm">Dasbor personal</span>
        </a>
        <a id="nav-analitik" class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold group transition-all relative overflow-hidden" href="{{ route('individu.analytics') }}">
            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">bar_chart_4_bars</span>
            <span class="hidden lg:inline text-sm">Hasil Analitik</span>
            <div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
        </a>

        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-6 px-3">Sub-fitur Analitik</div>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="#subfeat-stres" onclick="scrollToSection('subfeat-stres')">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">analytics</span>
            <span class="hidden lg:inline text-sm">Analisis Kognitif Detail</span>
        </a>
    </nav>
    <!-- Bottom: user/logout -->
    <div class="w-full px-3 mt-auto pt-4 border-t border-outline-variant/20">
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('individu.profile') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">settings</span>
            <span class="hidden lg:inline text-sm">Profil & pengaturan</span>
        </a>
        <div class="mt-2 p-2 hidden lg:flex items-center gap-3 rounded-xl bg-surface-container-low border border-outline-variant/10">
            <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-xs">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
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
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-30">
    <div class="flex items-center gap-4">
        <div>
            <h2 class="font-headline font-bold text-xl text-primary leading-tight" id="page-title">Hasil Analitik</h2>
            <p class="text-[10px] font-medium text-outline uppercase tracking-wider" id="page-subtitle">Sesi #KM-4921 | Ahmad B. | 24 Okt 2023</p>
        </div>
        <span class="ml-2 hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase border border-outline-variant text-on-surface-variant">
            <span class="material-symbols-outlined text-[12px]">lock</span> Data Privat Valid
        </span>
    </div>
    <div class="flex items-center gap-3">
        <button class="p-2.5 text-on-surface-variant hover:bg-surface-container rounded-lg border border-outline-variant/30 font-medium text-sm flex items-center gap-2 transition-colors">
            <span class="material-symbols-outlined text-[18px]">download</span> <span class="hidden md:inline">Ekspor PDF</span>
        </button>
        <button class="data-gradient text-on-primary px-4 py-2.5 rounded-lg font-bold text-sm shadow-md flex items-center gap-2">
            <span class="material-symbols-outlined text-[18px]">share</span> <span class="hidden sm:inline">Bagikan</span>
        </button>
    </div>
</header>

<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-6 md:p-8 space-y-6" id="main-scroll">
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
        <p class="text-[9px] text-error mt-1 italic font-medium">Terdeteksi menit ke-22 &amp; 41</p>
    </div>
</div>

<!-- === MAIN VISUALIZATION WITH TABS === -->
<div class="glass-card rounded-2xl p-6 flex flex-col">
    <!-- Tab Bar -->
    <div class="flex justify-between items-center mb-6 flex-wrap gap-3">
        <div>
            <h3 class="font-headline text-lg font-bold text-primary" id="viz-title">Distribusi Perhatian (Heatmap)</h3>
            <p class="text-xs text-on-surface-variant" id="viz-subtitle">Area pada antarmuka target yang paling banyak menerima fiksasi visual.</p>
        </div>
        <div class="flex bg-surface-container-low rounded-lg p-1 border border-outline-variant/20" id="tab-bar">
            <button id="btn-heatmap" class="tab-btn active px-3 py-1.5 text-xs rounded-md transition-all" onclick="switchTab('heatmap')">🔥 Heatmap</button>
            <button id="btn-saccade" class="tab-btn px-3 py-1.5 text-xs font-medium text-on-surface-variant hover:text-primary rounded-md transition-all" onclick="switchTab('saccade')">〰️ Jalur Tatapan</button>
            <button id="btn-aoi" class="tab-btn px-3 py-1.5 text-xs font-medium text-on-surface-variant hover:text-primary rounded-md transition-all" onclick="switchTab('aoi')">📍 Area of Interest</button>
        </div>
    </div>

    <!-- Tab: Heatmap -->
    <div id="panel-heatmap" class="tab-panel active">
        <div class="w-full bg-slate-900 rounded-xl relative overflow-hidden min-h-[360px] border border-slate-800 shadow-inner">
            <!-- Browser Wireframe -->
            <div class="absolute inset-x-0 top-0 h-10 bg-slate-800 flex items-center px-4 gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500/60"></div><div class="w-3 h-3 rounded-full bg-yellow-500/60"></div><div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                <div class="w-1/3 h-4 bg-slate-700 rounded-md mx-6"></div>
            </div>
            <div class="absolute inset-4 top-14 flex gap-4">
                <div class="w-1/4 bg-slate-800 rounded-lg hidden md:block"></div>
                <div class="flex-1 flex flex-col gap-4">
                    <div class="h-28 bg-slate-800 rounded-lg"></div>
                    <div class="flex-1 bg-slate-800 rounded-lg"></div>
                </div>
            </div>
            <!-- Heat blobs -->
            <div class="absolute top-[30%] left-[40%] w-48 h-48 rounded-full bg-red-500/70 mix-blend-screen blur-[40px]"></div>
            <div class="absolute top-[35%] left-[45%] w-24 h-24 rounded-full bg-yellow-400/90 mix-blend-screen blur-[20px]"></div>
            <div class="absolute top-[40%] left-[50%] w-12 h-12 rounded-full bg-white mix-blend-screen blur-[8px]"></div>
            <div class="absolute top-[60%] left-[20%] w-32 h-32 rounded-full bg-blue-500/50 mix-blend-screen blur-[30px] hidden md:block"></div>
            <div class="absolute top-[15%] left-[80%] w-36 h-20 rounded-full bg-green-500/40 mix-blend-screen blur-[25px]"></div>
            <!-- Legend -->
            <div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur-md border border-white/10 rounded-lg p-3">
                <div class="text-[9px] font-bold text-white/70 uppercase tracking-widest mb-2">Intensitas Fiksasi</div>
                <div class="w-32 h-2 rounded-full bg-gradient-to-r from-blue-500 via-yellow-400 to-red-500"></div>
                <div class="flex justify-between text-[8px] text-white/50 mt-1"><span>Rendah</span><span>Tinggi</span></div>
            </div>
        </div>
    </div>

    <!-- Tab: Saccade/Jalur Tatapan -->
    <div id="panel-saccade" class="tab-panel">
        <div class="w-full bg-slate-900 rounded-xl relative overflow-hidden min-h-[360px] border border-slate-800 shadow-inner">
            <div class="absolute inset-x-0 top-0 h-10 bg-slate-800 flex items-center px-4 gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500/60"></div><div class="w-3 h-3 rounded-full bg-yellow-500/60"></div><div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                <div class="w-1/3 h-4 bg-slate-700 rounded-md mx-6"></div>
            </div>
            <div class="absolute inset-4 top-14 flex gap-4">
                <div class="w-1/4 bg-slate-800/60 rounded-lg hidden md:block"></div>
                <div class="flex-1 flex flex-col gap-4">
                    <div class="h-28 bg-slate-800/60 rounded-lg"></div>
                    <div class="flex-1 bg-slate-800/60 rounded-lg"></div>
                </div>
            </div>
            <!-- Saccade SVG path animation -->
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 800 400" preserveAspectRatio="none">
                <!-- Saccade path (animated drawing) -->
                <path class="saccade-path" d="M 100 120 L 280 90 L 450 160 L 600 80 L 700 200 L 500 280 L 300 300 L 150 250 L 100 120" fill="none" stroke="#a78bfa" stroke-width="2" stroke-linecap="round"/>
                <!-- Fixation circles -->
                <circle cx="100" cy="120" r="8" fill="#7b41b3" opacity="0.7"><animate attributeName="r" values="8;14;8" dur="2s" repeatCount="indefinite"/></circle>
                <circle cx="280" cy="90" r="12" fill="#7b41b3" opacity="0.7"><animate attributeName="r" values="12;18;12" dur="2.2s" repeatCount="indefinite"/></circle>
                <circle cx="450" cy="160" r="18" fill="#ba1a1a" opacity="0.8"><animate attributeName="r" values="18;26;18" dur="1.8s" repeatCount="indefinite"/></circle>
                <circle cx="600" cy="80" r="6" fill="#7b41b3" opacity="0.6"><animate attributeName="r" values="6;10;6" dur="2.5s" repeatCount="indefinite"/></circle>
                <circle cx="700" cy="200" r="10" fill="#7b41b3" opacity="0.7"><animate attributeName="r" values="10;15;10" dur="2s" repeatCount="indefinite"/></circle>
                <circle cx="500" cy="280" r="14" fill="#ba1a1a" opacity="0.8"><animate attributeName="r" values="14;22;14" dur="1.9s" repeatCount="indefinite"/></circle>
                <circle cx="300" cy="300" r="8" fill="#7b41b3" opacity="0.6"><animate attributeName="r" values="8;13;8" dur="2.1s" repeatCount="indefinite"/></circle>
                <!-- Labels -->
                <text x="105" y="108" fill="#c4b5fd" font-size="10" font-family="monospace">1. Start</text>
                <text x="455" y="150" fill="#fca5a5" font-size="10" font-family="monospace">3. ⚠ Distraksi</text>
                <text x="505" y="268" fill="#fca5a5" font-size="10" font-family="monospace">6. ⚠ Regresi</text>
            </svg>
            <!-- Legend -->
            <div class="absolute bottom-4 left-4 bg-black/60 backdrop-blur-md border border-white/10 rounded-lg p-3">
                <div class="flex items-center gap-2 mb-1"><div class="w-3 h-3 rounded-full bg-purple-400"></div><span class="text-[9px] text-white/70">Fiksasi normal</span></div>
                <div class="flex items-center gap-2 mb-1"><div class="w-3 h-3 rounded-full bg-red-400"></div><span class="text-[9px] text-white/70">Titik distraksi/regresi</span></div>
                <div class="flex items-center gap-2"><div class="w-5 h-0.5 bg-purple-400 rounded"></div><span class="text-[9px] text-white/70">Jalur tatapan (saccade)</span></div>
            </div>
            <div class="absolute top-14 right-4 bg-black/50 backdrop-blur-md border border-white/10 rounded-lg p-2 text-[9px] text-white/60 font-mono">
                Total fiksasi: <span class="text-purple-300 font-bold">7</span> titik<br>
                Regresi: <span class="text-red-300 font-bold">2</span> kejadian
            </div>
        </div>
    </div>

    <!-- Tab: Area of Interest -->
    <div id="panel-aoi" class="tab-panel">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- AOI visual map -->
            <div class="w-full bg-slate-900 rounded-xl relative overflow-hidden min-h-[360px] border border-slate-800 shadow-inner">
                <div class="absolute inset-x-0 top-0 h-10 bg-slate-800 flex items-center px-4 gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500/60"></div><div class="w-3 h-3 rounded-full bg-yellow-500/60"></div><div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                    <div class="w-1/3 h-4 bg-slate-700 rounded-md mx-6"></div>
                </div>
                <!-- AOI zones overlaid on wireframe -->
                <div class="absolute inset-4 top-14 flex gap-3">
                    <div class="w-1/4 hidden md:flex flex-col gap-2">
                        <div class="flex-1 bg-purple-500/20 border-2 border-purple-400/50 rounded-lg flex items-center justify-center">
                            <span class="text-[9px] text-purple-300 font-bold uppercase rotate-90 whitespace-nowrap">AOI-A (Nav)</span>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col gap-3">
                        <div class="h-28 bg-red-500/20 border-2 border-red-400/50 rounded-lg flex items-center justify-center">
                            <span class="text-[10px] text-red-300 font-bold">AOI-B (Header) — 48% waktu</span>
                        </div>
                        <div class="flex-1 bg-green-500/10 border-2 border-green-400/30 rounded-lg flex items-center justify-center">
                            <span class="text-[10px] text-green-300 font-bold">AOI-C (Konten Utama) — 35% waktu</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AOI stats -->
            <div class="space-y-3">
                <div class="bg-surface-container-lowest rounded-xl border border-outline-variant/15 p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2"><div class="w-3 h-3 rounded bg-red-400"></div><span class="text-sm font-bold text-on-surface">AOI-B: Header / Navigasi Atas</span></div>
                        <span class="text-xs font-bold text-red-500">48%</span>
                    </div>
                    <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden"><div class="h-full bg-gradient-to-r from-red-400 to-red-500 rounded-full" style="width:48%"></div></div>
                    <p class="text-[10px] text-on-surface-variant mt-2">Fiksasi: 22 menit | Avg durasi: 320ms</p>
                </div>
                <div class="bg-surface-container-lowest rounded-xl border border-outline-variant/15 p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2"><div class="w-3 h-3 rounded bg-green-400"></div><span class="text-sm font-bold text-on-surface">AOI-C: Konten Utama</span></div>
                        <span class="text-xs font-bold text-green-600">35%</span>
                    </div>
                    <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden"><div class="h-full bg-gradient-to-r from-green-400 to-green-500 rounded-full" style="width:35%"></div></div>
                    <p class="text-[10px] text-on-surface-variant mt-2">Fiksasi: 16 menit | Avg durasi: 250ms</p>
                </div>
                <div class="bg-surface-container-lowest rounded-xl border border-outline-variant/15 p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-2"><div class="w-3 h-3 rounded bg-purple-400"></div><span class="text-sm font-bold text-on-surface">AOI-A: Sidebar Kiri</span></div>
                        <span class="text-xs font-bold text-surface-tint">17%</span>
                    </div>
                    <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden"><div class="h-full bg-gradient-to-r from-purple-400 to-purple-500 rounded-full" style="width:17%"></div></div>
                    <p class="text-[10px] text-on-surface-variant mt-2">Fiksasi: 8 menit | Avg durasi: 180ms</p>
                </div>
                <div class="bg-primary/5 border border-primary/10 rounded-xl p-4 text-xs text-on-surface-variant">
                    <span class="font-bold text-primary">Kesimpulan AOI:</span> Mayoritas perhatian tertuju pada header/nav atas. Konten utama masih kurang mendapat perhatian optimal — rekomendasi: perkuat hierarki visual konten.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- === SUB-FITUR ANALITIK (Functional Sections) === -->
<div class="mt-2">
    <h3 class="font-headline font-bold text-lg text-primary mb-4 flex items-center gap-2">
        <span class="material-symbols-outlined text-primary/70">tune</span> Sub-fitur Analitik Detail
    </h3>
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- SUB-FITUR 1: Analisis Stres — Blink Rate -->
        <div id="subfeat-stres" class="subfeat-card bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-6 scroll-mt-20">
            <div class="flex items-center gap-2 mb-1">
                <div class="w-8 h-8 rounded-lg bg-yellow-50 border border-yellow-200 flex items-center justify-center">
                    <span class="material-symbols-outlined text-yellow-600 text-[18px]" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
                </div>
                <div>
                    <h4 class="font-headline font-bold text-sm text-primary">Analisis Stres — Blink Rate</h4>
                    <p class="text-[10px] text-on-surface-variant">Frekuensi kedipan sebagai indikator tekanan kognitif</p>
                </div>
            </div>
            <div class="mt-4 mb-4 flex items-center justify-center gap-4">
                <div class="text-center">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Blink Rate Anda</p>
                    <div class="font-headline font-black text-4xl text-primary">14<span class="text-base font-medium text-on-surface-variant">/mnt</span></div>
                    <div class="mt-2 flex items-center justify-center gap-2">
                        <div class="blink-dot w-2 h-2 rounded-full bg-green-500"></div>
                        <span class="text-[10px] font-bold text-green-600">Normal</span>
                    </div>
                </div>
                <div class="w-px h-16 bg-outline-variant/30"></div>
                <div class="text-center">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Baseline Normal</p>
                    <div class="font-headline font-black text-4xl text-on-surface-variant">15–20<span class="text-xs font-medium">/mnt</span></div>
                </div>
            </div>
            <!-- Blink timeline bars -->
            <div class="mb-2 text-[10px] font-bold text-outline uppercase tracking-wider">Timeline Kedipan (per 10 menit)</div>
            <div class="flex items-end gap-1 h-16">
                <div class="flex-1 flex flex-col-reverse items-center gap-0.5">
                    <span class="text-[8px] text-outline">0-10m</span>
                    <div class="w-full bg-green-400 rounded-t-sm" style="height: 55%"></div>
                </div>
                <div class="flex-1 flex flex-col-reverse items-center gap-0.5">
                    <span class="text-[8px] text-outline">10-20m</span>
                    <div class="w-full bg-green-400 rounded-t-sm" style="height: 65%"></div>
                </div>
                <div class="flex-1 flex flex-col-reverse items-center gap-0.5">
                    <span class="text-[8px] text-outline">20-30m</span>
                    <div class="w-full bg-yellow-400 rounded-t-sm relative" style="height: 90%">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-500 text-white text-[7px] px-1 py-0.5 rounded whitespace-nowrap">⚠ Meningkat</div>
                    </div>
                </div>
                <div class="flex-1 flex flex-col-reverse items-center gap-0.5">
                    <span class="text-[8px] text-outline">30-40m</span>
                    <div class="w-full bg-green-400 rounded-t-sm" style="height: 60%"></div>
                </div>
                <div class="flex-1 flex flex-col-reverse items-center gap-0.5">
                    <span class="text-[8px] text-outline">40-45m</span>
                    <div class="w-full bg-red-400 rounded-t-sm relative" style="height: 95%">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-red-500 text-white text-[7px] px-1 py-0.5 rounded whitespace-nowrap">⚠ Puncak</div>
                    </div>
                </div>
            </div>
            <div class="mt-4 bg-green-50 border border-green-200 rounded-xl p-3 text-[10px]">
                <span class="font-bold text-green-700">✓ Status Stres: Rendah</span><br>
                <span class="text-green-600">Blink rate Anda berada dalam rentang normal sepanjang sesi, kecuali lonjakan kecil di menit 20-30.</span>
            </div>
        </div>

        <!-- SUB-FITUR 2: Analisis Fokus — Fixation -->
        <div id="subfeat-fokus" class="subfeat-card bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-6 scroll-mt-20">
            <div class="flex items-center gap-2 mb-1">
                <div class="w-8 h-8 rounded-lg bg-primary/10 border border-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[18px]" style="font-variation-settings: 'FILL' 1;">center_focus_strong</span>
                </div>
                <div>
                    <h4 class="font-headline font-bold text-sm text-primary">Analisis Fokus — Fixation</h4>
                    <p class="text-[10px] text-on-surface-variant">Durasi dan distribusi titik fiksasi penglihatan</p>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-center gap-4 mb-4">
                <div class="text-center">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Skor Fokus</p>
                    <div class="font-headline font-black text-4xl text-primary">82<span class="text-base font-medium text-on-surface-variant">%</span></div>
                    <div class="mt-2 flex items-center justify-center gap-1">
                        <span class="text-[10px] font-bold text-green-600">▲ Sangat baik</span>
                    </div>
                </div>
                <div class="w-px h-16 bg-outline-variant/30"></div>
                <div class="space-y-1 text-[10px]">
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Avg fiksasi</span><span class="font-bold">285ms</span></div>
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Total fiksasi</span><span class="font-bold">147 titik</span></div>
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Re-fixation</span><span class="font-bold text-yellow-600">12 kali</span></div>
                </div>
            </div>
            <!-- Fixation scatter mini-viz -->
            <div class="mb-2 text-[10px] font-bold text-outline uppercase tracking-wider">Distribusi Durasi Fiksasi</div>
            <div class="w-full bg-slate-100 rounded-lg overflow-hidden" style="height: 80px">
                <svg viewBox="0 0 300 80" class="w-full h-full">
                    <!-- Grid lines -->
                    <line x1="0" y1="40" x2="300" y2="40" stroke="#e2e8f0" stroke-width="0.5"/>
                    <line x1="0" y1="20" x2="300" y2="20" stroke="#e2e8f0" stroke-width="0.5"/>
                    <line x1="0" y1="60" x2="300" y2="60" stroke="#e2e8f0" stroke-width="0.5"/>
                    <!-- Focus line -->
                    <polyline points="10,60 35,45 60,30 90,25 120,35 150,20 180,30 210,45 240,35 270,50 290,40" fill="none" stroke="#7b41b3" stroke-width="2" stroke-linejoin="round"/>
                    <polyline points="10,60 35,45 60,30 90,25 120,35 150,20 180,30 210,45 240,35 270,50 290,40 290,80 10,80 10,60" fill="rgba(123,65,179,0.1)" stroke="none"/>
                </svg>
            </div>
            <div class="mt-4 bg-primary/5 border border-primary/10 rounded-xl p-3 text-[10px]">
                <span class="font-bold text-primary">✓ Fokus: Optimal</span><br>
                <span class="text-on-surface-variant">Rata-rata durasi fiksasi 285ms menunjukkan pemrosesan konten yang baik. Fokus paling tinggi di menit ke-15-30.</span>
            </div>
        </div>

        <!-- SUB-FITUR 3: Analisis Burnout — Saccade -->
        <div id="subfeat-burnout" class="subfeat-card bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-6 scroll-mt-20">
            <div class="flex items-center gap-2 mb-1">
                <div class="w-8 h-8 rounded-lg bg-error-container/50 border border-error/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-error text-[18px]" style="font-variation-settings: 'FILL' 1;">warning</span>
                </div>
                <div>
                    <h4 class="font-headline font-bold text-sm text-primary">Analisis Burnout — Saccade</h4>
                    <p class="text-[10px] text-on-surface-variant">Pola gerakan mata cepat sebagai tanda kelelahan</p>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-center gap-4 mb-4">
                <div class="text-center">
                    <p class="text-[10px] font-bold text-outline uppercase tracking-wider mb-1">Indeks Burnout</p>
                    <div class="font-headline font-black text-4xl text-yellow-600">36<span class="text-base font-medium text-on-surface-variant">/100</span></div>
                    <div class="mt-2 flex items-center justify-center gap-1">
                        <span class="text-[10px] font-bold text-yellow-600">⚠ Sedang</span>
                    </div>
                </div>
                <div class="w-px h-16 bg-outline-variant/30"></div>
                <div class="space-y-1 text-[10px]">
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Saccade regresi</span><span class="font-bold text-error">2 kali</span></div>
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Saccade normal</span><span class="font-bold">47 kali</span></div>
                    <div class="flex justify-between gap-4"><span class="text-on-surface-variant">Kecepatan avg</span><span class="font-bold">380°/s</span></div>
                </div>
            </div>
            <!-- Burnout gauge -->
            <div class="mb-2 text-[10px] font-bold text-outline uppercase tracking-wider">Tingkat Kelelahan Visual</div>
            <div class="w-full h-3 bg-gradient-to-r from-green-300 via-yellow-300 to-red-400 rounded-full relative mb-1">
                <div class="absolute top-1/2 -translate-y-1/2 w-4 h-4 bg-white border-2 border-yellow-500 rounded-full shadow" style="left: calc(36% - 8px)">
                </div>
            </div>
            <div class="flex justify-between text-[8px] text-outline font-bold">
                <span>Segar</span><span>Sedang</span><span>Kelelahan</span>
            </div>
            <div class="mt-3 space-y-2">
                <div class="flex items-center justify-between text-[10px]">
                    <span class="text-on-surface-variant">Menit 22 — Saccade Regresi #1</span>
                    <span class="bg-error-container/50 text-error px-2 py-0.5 rounded-md font-bold">Terdeteksi</span>
                </div>
                <div class="flex items-center justify-between text-[10px]">
                    <span class="text-on-surface-variant">Menit 41 — Saccade Regresi #2</span>
                    <span class="bg-error-container/50 text-error px-2 py-0.5 rounded-md font-bold">Terdeteksi</span>
                </div>
            </div>
            <div class="mt-4 bg-yellow-50 border border-yellow-200 rounded-xl p-3 text-[10px]">
                <span class="font-bold text-yellow-700">⚠ Burnout: Sedang</span><br>
                <span class="text-yellow-600">2 kejadian regresi saccade terdeteksi. Disarankan istirahat 5-10 menit setiap 40 menit sesi.</span>
            </div>
        </div>

    </div>
</div>

<!-- AI Insights -->
<div class="bg-gradient-to-br from-surface-container-lowest to-primary-fixed/20 rounded-2xl p-6 border border-primary/10 shadow-sm relative overflow-hidden">
    <div class="absolute -right-4 -top-4 text-primary opacity-5 material-symbols-outlined text-[120px] pointer-events-none" style="font-variation-settings: 'FILL' 1;">auto_awesome</div>
    <div class="flex items-center gap-2 mb-4">
        <span class="material-symbols-outlined text-surface-tint text-base" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
        <h4 class="font-headline font-bold text-sm text-primary">Interpretasi AI — Ringkasan Sesi</h4>
    </div>
    <ul class="space-y-4 text-xs">
        <li class="flex items-start gap-3">
            <div class="w-1.5 h-1.5 rounded-full bg-error mt-1.5 shrink-0"></div>
            <p class="text-on-surface-variant leading-relaxed">Peningkatan pola <strong>saccadic regression</strong> yang signifikan pada menit 22 menunjukkan kesulitan membaca/memproses informasi pada dokumen teknis.</p>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-1.5 h-1.5 rounded-full bg-green-500 mt-1.5 shrink-0"></div>
            <p class="text-on-surface-variant leading-relaxed">Fiksasi pada area diagram kontrol <strong>3x lebih lama</strong> dari teks penjelasan — rekomendasi: gunakan lebih banyak elemen visual dalam materi.</p>
        </li>
        <li class="flex items-start gap-3">
            <div class="w-1.5 h-1.5 rounded-full bg-yellow-500 mt-1.5 shrink-0"></div>
            <p class="text-on-surface-variant leading-relaxed">Blink rate meningkat di menit 40-45 mengindikasikan kelelahan. Pertimbangkan sesi tidak melebihi <strong>40 menit</strong> tanpa jeda.</p>
        </li>
    </ul>
</div>

</div>
</div>
</main>

<script>
// === TAB SWITCHING ===
const tabConfig = {
    heatmap: {
        title: 'Distribusi Perhatian (Heatmap)',
        subtitle: 'Area pada antarmuka target yang paling banyak menerima fiksasi visual.',
    },
    saccade: {
        title: 'Jalur Tatapan (Saccade Path)',
        subtitle: 'Peta gerakan bola mata dan titik fiksasi antar elemen layar.',
    },
    aoi: {
        title: 'Area of Interest (AOI)',
        subtitle: 'Distribusi waktu tatapan berdasarkan zona yang telah didefinisikan.',
    }
};

function switchTab(tab) {
    // Hide all panels & deactivate all buttons
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

    // Show selected
    document.getElementById('panel-' + tab).classList.add('active');
    document.getElementById('btn-' + tab).classList.add('active');

    // Update header
    const cfg = tabConfig[tab];
    document.getElementById('viz-title').textContent = cfg.title;
    document.getElementById('viz-subtitle').textContent = cfg.subtitle;
    document.getElementById('page-title').textContent = cfg.title;

    // Update URL without reloading
    const url = new URL(window.location);
    url.searchParams.set('tab', tab);
    history.replaceState({}, '', url);
}

// === SUB-FEATURE SCROLL ===
function scrollToSection(id) {
    const el = document.getElementById(id);
    if (el) {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        el.classList.add('highlight');
        setTimeout(() => el.classList.remove('highlight'), 2000);
    }
    return false;
}

// === ON LOAD: Read ?tab= param ===
document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get('tab');
    if (tab && ['heatmap', 'saccade', 'aoi'].includes(tab)) {
        switchTab(tab);
    }
    // Read #hash for sub-features
    const hash = window.location.hash.replace('#', '');
    if (hash && document.getElementById(hash)) {
        setTimeout(() => scrollToSection(hash), 300);
    }
});
</script>

</body></html>
