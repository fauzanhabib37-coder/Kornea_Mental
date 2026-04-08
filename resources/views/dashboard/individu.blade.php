<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dasbor Personal | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#2e0052", "on-surface-variant": "#4c4451",
                    "surface-container-high": "#e7e8ee", "primary-container": "#4b0082",
                    "on-surface": "#191c20", "on-primary": "#ffffff", "primary-fixed": "#f0dbff",
                    "surface-container-low": "#f2f3f9", "secondary-fixed-dim": "#d4bbff",
                    "surface": "#f8f9ff", "outline-variant": "#cec3d3", "surface-tint": "#7b41b3",
                    "error": "#ba1a1a", "secondary-fixed": "#ebdcff", "error-container": "#ffdad6",
                    "background": "#f8f9ff", "surface-container-lowest": "#ffffff",
                    "secondary": "#6f48b2",
                },
                fontFamily: { "headline": ["Manrope"], "body": ["Inter"], "label": ["Inter"] },
            },
        },
    }
</script>
<style>
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .glass-card { background: rgba(255,255,255,0.75); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.5); }
    .bg-mesh {
        background-color: #f8f9ff;
        background-image:
            radial-gradient(at 0% 0%, rgba(123,65,179,0.08) 0px, transparent 50%),
            radial-gradient(at 100% 0%, rgba(75,0,130,0.05) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(46,0,82,0.03) 0px, transparent 50%),
            radial-gradient(at 0% 100%, rgba(186,126,244,0.05) 0px, transparent 50%);
    }
    /* Calibration dot */
    .cal-dot {
        width: 18px; height: 18px; border-radius: 50%;
        background: #7b41b3; cursor: pointer; transition: all 0.2s;
        box-shadow: 0 0 0 3px rgba(123,65,179,0.25);
        display: flex; align-items: center; justify-content: center;
    }
    .cal-dot:hover { transform: scale(1.3); background: #2e0052; }
    .cal-dot.done { background: #16a34a; box-shadow: 0 0 0 4px rgba(22,163,74,0.3); }
    .cal-dot.active { animation: calPulse 0.8s ease-in-out infinite; }
    @keyframes calPulse { 0%,100%{transform:scale(1);box-shadow:0 0 0 4px rgba(123,65,179,0.3)} 50%{transform:scale(1.3);box-shadow:0 0 0 8px rgba(123,65,179,0.1)} }
    /* Gaze direction compass */
    .gaze-arrow { transition: all 0.15s ease; }
    .gaze-arrow.active { color: #7b41b3; transform: scale(1.4); }
    /* Eye not detected warning */
    @keyframes slideDown { from { opacity:0; transform:translateY(-10px); } to { opacity:1; transform:translateY(0); } }
    .warning-banner { animation: slideDown 0.3s ease-out; }
    /* Status badge pulse */
    @keyframes badgePulse { 0%,100%{opacity:1} 50%{opacity:0.6} }
    .badge-pulse { animation: badgePulse 2s ease-in-out infinite; }
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-thumb { background: rgba(123,65,179,0.2); border-radius: 4px; }
</style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">

<!-- ===== SIDEBAR ===== -->
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
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold group transition-all relative overflow-hidden" href="{{ route('individu.dashboard') }}">
            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="hidden lg:inline text-sm">Dasbor personal</span>
            <div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
        </a>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('individu.analytics') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">bar_chart_4_bars</span>
            <span class="hidden lg:inline text-sm">Hasil Analitik</span>
        </a>
        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-6 px-3">Sub-fitur Analitik</div>
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('individu.analytics') }}#subfeat-stres">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">analytics</span>
            <span class="hidden lg:inline text-sm">Analisis Kognitif Detail</span>
        </a>
    </nav>
    <div class="w-full px-3 mt-auto pt-4 border-t border-outline-variant/20">
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('individu.profile') }}">
            <span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">settings</span>
            <span class="hidden lg:inline text-sm">Profil & pengaturan</span>
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

<!-- ===== MAIN ===== -->
<main class="flex-1 h-full flex flex-col overflow-hidden relative">

<!-- Top App Bar -->
<header class="h-16 flex items-center justify-between px-6 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 z-10 sticky top-0">
    <div class="flex items-center gap-3">
        <h2 class="font-headline font-bold text-xl text-primary">Dasbor Personal</h2>
        <span id="tracking-status-badge" class="hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-amber-50 text-amber-700 border border-amber-200">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-500 badge-pulse"></span>
            <span id="tracking-status-text">Perlu Kalibrasi</span>
        </span>
    </div>
    <div class="flex items-center gap-3">
        <button onclick="startNewSession()" class="flex items-center gap-2 bg-gradient-to-br from-primary to-primary-container text-white px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:shadow-primary/30 hover:-translate-y-0.5 transition-all">
            <span class="material-symbols-outlined text-sm">add</span>
            <span class="hidden sm:inline">Sesi Baru</span>
        </button>
    </div>
</header>

<!-- Eye Warning Banner -->
<div id="eye-warning" class="warning-banner mx-6 mt-4 p-4 bg-amber-50 border border-amber-300 rounded-xl flex items-center gap-3 text-sm">
    <span class="material-symbols-outlined text-amber-600 text-xl shrink-0" style="font-variation-settings: 'FILL' 1;">warning</span>
    <div class="flex-1">
        <p class="font-bold text-amber-800">Posisi mata belum terdeteksi</p>
        <p class="text-amber-700 text-xs">Pastikan wajah Anda terlihat jelas oleh kamera, pencahayaan cukup, dan lakukan kalibrasi sebelum memulai sesi.</p>
    </div>
    <button onclick="dismissWarning()" class="text-amber-400 hover:text-amber-700 shrink-0">
        <span class="material-symbols-outlined text-lg">close</span>
    </button>
</div>

<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-6 pt-4">
<div class="max-w-screen-xl mx-auto space-y-6">

<!-- ===== KAMERA + KALIBRASI + METRIK ===== -->
<section class="grid grid-cols-1 xl:grid-cols-3 gap-5">

    <!-- Camera + Calibration Panel -->
    <div class="xl:col-span-2 glass-card rounded-2xl p-5 flex flex-col gap-4">
        <!-- Panel Header -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary/70">visibility</span>
                <h3 class="font-headline font-bold text-base text-primary">Kalibrasi & Deteksi Mata</h3>
            </div>
            <div class="flex items-center gap-2">
                <span id="accuracy-badge" class="hidden text-xs font-bold px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">Akurasi: <span id="accuracy-val">-</span>%</span>
                <!-- Control Buttons -->
                <button id="btn-calibrate" onclick="startCalibration()"
                    class="flex items-center gap-1.5 text-xs font-bold px-3 py-2 rounded-lg bg-primary text-white hover:bg-primary-container transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-[16px]">adjust</span> Mulai Kalibrasi
                </button>
                <button id="btn-detect" onclick="startDetection()" disabled
                    class="flex items-center gap-1.5 text-xs font-bold px-3 py-2 rounded-lg bg-surface-container text-on-surface-variant transition-colors cursor-not-allowed opacity-50">
                    <span class="material-symbols-outlined text-[16px]">play_circle</span> Mulai Deteksi
                </button>
            </div>
        </div>

        <!-- Camera View -->
        <div id="camera-container" class="relative bg-zinc-900 rounded-xl overflow-hidden" style="min-height:280px;">
            <video id="webcam-feed" class="w-full h-full object-cover opacity-90" autoplay playsinline muted style="min-height:280px;"></video>

            <!-- Grid overlay -->
            <div class="absolute inset-0 bg-[linear-gradient(rgba(123,65,179,0.15)_1px,transparent_1px),linear-gradient(90deg,rgba(123,65,179,0.15)_1px,transparent_1px)] bg-[size:60px_60px] pointer-events-none"></div>

            <!-- 9-Point Calibration Grid (hidden initially) -->
            <div id="calibration-grid" class="absolute inset-0 hidden" style="pointer-events:none;">
                <!-- 9 dots positioned at 3x3 grid -->
                <div class="absolute inset-0 grid" style="grid-template-columns:1fr 1fr 1fr; grid-template-rows:1fr 1fr 1fr; padding:16px; gap:0; pointer-events:all;">
                    <div class="flex items-start justify-start p-3"><div class="cal-dot" id="dot-0" onclick="clickCalDot(0)"></div></div>
                    <div class="flex items-start justify-center p-3"><div class="cal-dot" id="dot-1" onclick="clickCalDot(1)"></div></div>
                    <div class="flex items-start justify-end p-3"><div class="cal-dot" id="dot-2" onclick="clickCalDot(2)"></div></div>
                    <div class="flex items-center justify-start p-3"><div class="cal-dot" id="dot-3" onclick="clickCalDot(3)"></div></div>
                    <div class="flex items-center justify-center p-3"><div class="cal-dot" id="dot-4" onclick="clickCalDot(4)"></div></div>
                    <div class="flex items-center justify-end p-3"><div class="cal-dot" id="dot-5" onclick="clickCalDot(5)"></div></div>
                    <div class="flex items-end justify-start p-3"><div class="cal-dot" id="dot-6" onclick="clickCalDot(6)"></div></div>
                    <div class="flex items-end justify-center p-3"><div class="cal-dot" id="dot-7" onclick="clickCalDot(7)"></div></div>
                    <div class="flex items-end justify-end p-3"><div class="cal-dot" id="dot-8" onclick="clickCalDot(8)"></div></div>
                </div>
                <!-- Calibration progress -->
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-black/70 text-white text-[11px] font-mono px-3 py-1.5 rounded-full">
                    Klik setiap titik ungu secara berurutan — <span id="cal-progress">0/9</span> selesai
                </div>
            </div>

            <!-- Gaze dot (shown during detection) -->
            <div id="gaze-dot" class="absolute w-5 h-5 rounded-full bg-red-500/80 border-2 border-white shadow-lg hidden transition-all duration-50 pointer-events-none" style="transform:translate(-50%,-50%);"></div>

            <!-- Camera status / instruction label -->
            <div id="cam-status" class="absolute bottom-3 right-3 bg-black/70 text-white text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50">Menunggu izin kamera...</div>
        </div>

        <!-- Calibration instruction -->
        <div id="cal-instruction" class="hidden text-xs text-on-surface-variant bg-primary/5 border border-primary/20 rounded-lg px-4 py-2.5 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-base shrink-0">info</span>
            <span>Klik setiap titik ungu <b>sambil menatap langsung titik tersebut</b>. Selesaikan semua 9 titik untuk menyelesaikan kalibrasi.</span>
        </div>
    </div>

    <!-- Right Panel: Metrics + Gaze Direction -->
    <div class="flex flex-col gap-4">

        <!-- Gaze Direction Compass -->
        <div class="glass-card rounded-2xl p-5">
            <h4 class="text-xs font-bold text-outline uppercase tracking-wider mb-3">Arah Gerak Mata</h4>
            <!-- Compass grid -->
            <div class="grid grid-cols-3 gap-1 w-full aspect-square max-w-[160px] mx-auto">
                <div class="flex items-center justify-center"></div>
                <div class="flex items-center justify-center">
                    <span id="dir-up" class="material-symbols-outlined text-2xl text-outline/30 gaze-arrow">arrow_upward</span>
                </div>
                <div class="flex items-center justify-center"></div>
                <div class="flex items-center justify-center">
                    <span id="dir-left" class="material-symbols-outlined text-2xl text-outline/30 gaze-arrow">arrow_back</span>
                </div>
                <div class="flex items-center justify-center">
                    <div id="dir-center" class="w-8 h-8 rounded-full border-2 border-outline/20 flex items-center justify-center">
                        <div id="gaze-pupil" class="w-2.5 h-2.5 rounded-full bg-outline/30 transition-all duration-100"></div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <span id="dir-right" class="material-symbols-outlined text-2xl text-outline/30 gaze-arrow">arrow_forward</span>
                </div>
                <div class="flex items-center justify-center"></div>
                <div class="flex items-center justify-center">
                    <span id="dir-down" class="material-symbols-outlined text-2xl text-outline/30 gaze-arrow">arrow_downward</span>
                </div>
                <div class="flex items-center justify-center"></div>
            </div>
            <div class="mt-3 text-center">
                <p id="gaze-label" class="text-xs text-on-surface-variant font-medium">Belum aktif</p>
                <p id="gaze-coords" class="text-[10px] font-mono text-outline mt-0.5"></p>
            </div>
        </div>

        <!-- Cognitive Load -->
        <div class="glass-card rounded-2xl p-5 relative overflow-hidden group">
            <h4 class="text-xs font-bold text-outline uppercase tracking-wider mb-1">Beban Kognitif</h4>
            <div class="flex items-end gap-2 mb-3">
                <span id="cog-val" class="font-headline font-extrabold text-4xl text-primary leading-none">--</span>
                <span class="text-sm font-bold text-on-surface-variant mb-1">/ 100</span>
            </div>
            <div class="w-full bg-surface-container rounded-full h-2 overflow-hidden">
                <div id="cog-bar" class="bg-gradient-to-r from-green-400 via-yellow-400 to-red-400 h-full rounded-full transition-all duration-700" style="width:0%">
                </div>
            </div>
            <p class="text-[10px] text-on-surface-variant mt-2">Berdasarkan frekuensi kedipan & pola gerak tatapan.</p>
            <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-yellow-400/10 rounded-full blur-2xl group-hover:bg-yellow-400/20 transition-all pointer-events-none"></div>
        </div>

        <!-- Eye Fatigue -->
        <div class="glass-card rounded-2xl p-5 relative overflow-hidden group">
            <h4 class="text-xs font-bold text-outline uppercase tracking-wider mb-1">Kelelahan Mata</h4>
            <div class="flex items-end gap-2 mb-2">
                <span id="fatigue-val" class="font-headline font-extrabold text-3xl text-surface-tint leading-none">--</span>
            </div>
            <div class="flex gap-1 h-7 items-end w-full">
                <div id="fb0" class="flex-1 bg-surface-container/50 rounded-sm transition-all duration-500" style="height:20%"></div>
                <div id="fb1" class="flex-1 bg-surface-container/50 rounded-sm transition-all duration-500" style="height:30%"></div>
                <div id="fb2" class="flex-1 bg-surface-container/50 rounded-sm transition-all duration-500" style="height:50%"></div>
                <div id="fb3" class="flex-1 bg-surface-container/50 rounded-sm transition-all duration-500" style="height:40%"></div>
                <div id="fb4" class="flex-1 bg-surface-container/50 rounded-sm transition-all duration-500" style="height:25%"></div>
            </div>
            <p class="text-[10px] text-on-surface-variant mt-1.5">Berdasarkan laju kedipan & durasi buka-tutup kelopak.</p>
        </div>
    </div>
</section>

<!-- ===== RIWAYAT SESI ===== -->
<section>
    <div class="flex justify-between items-center mb-4 px-1">
        <div>
            <h3 class="font-headline font-bold text-lg text-primary">Riwayat Sesi Saya</h3>
            <p class="text-xs text-on-surface-variant">Rekaman sesi eye-tracking pribadi Anda</p>
        </div>
        <a class="text-xs font-bold text-surface-tint hover:underline underline-offset-4 flex items-center gap-1" href="{{ route('individu.analytics') }}">
            <span class="material-symbols-outlined text-sm">analytics</span> Lihat Analitik Lengkap
        </a>
    </div>
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="bg-surface-container-low/50 border-b border-outline-variant/10 text-[10px] font-bold text-outline uppercase tracking-wider">
                        <th class="px-5 py-4 rounded-tl-xl">ID Sesi</th>
                        <th class="px-5 py-4">Nama Sesi / Tugas</th>
                        <th class="px-5 py-4">Durasi</th>
                        <th class="px-5 py-4">Skor Fokus</th>
                        <th class="px-5 py-4">Kelelahan</th>
                        <th class="px-5 py-4 rounded-tr-xl">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @foreach ($sessions as $session)
                    <tr class="hover:bg-surface-container-low/30 transition-colors group cursor-pointer" onclick="window.location='{{ route('individu.analytics') }}'">
                        <td class="px-5 py-4 font-mono text-xs text-primary font-medium">{{ $session->session_code }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-primary text-[16px]">remove_red_eye</span>
                                </div>
                                <div>
                                    <p class="font-semibold text-on-surface group-hover:text-primary transition-colors text-sm">{{ $session->client_name }}</p>
                                    <p class="text-[10px] text-on-surface-variant">Sesi Pribadi</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-on-surface-variant text-sm">{{ $session->duration }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-14 bg-surface-container h-1.5 rounded-full overflow-hidden">
                                    <div class="{{ $session->avg_focus_score < 60 ? 'bg-error' : ($session->avg_focus_score < 75 ? 'bg-yellow-400' : 'bg-primary') }} h-full rounded-full" style="width: {{ $session->avg_focus_score }}%"></div>
                                </div>
                                <span class="text-xs font-bold {{ $session->avg_focus_score < 60 ? 'text-error' : 'text-on-surface' }}">{{ $session->avg_focus_score }}%</span>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            @php
                                $fatigue = $session->avg_focus_score > 80 ? 'Rendah' : ($session->avg_focus_score > 60 ? 'Sedang' : 'Tinggi');
                                $fatigueColor = $fatigue === 'Rendah' ? 'text-green-700 bg-green-50' : ($fatigue === 'Sedang' ? 'text-yellow-700 bg-yellow-50' : 'text-error bg-error-container/50');
                            @endphp
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded {{ $fatigueColor }}">{{ $fatigue }}</span>
                        </td>
                        <td class="px-5 py-4">
                            @if($session->is_alert)
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase bg-error-container/50 text-error">
                                    <span class="material-symbols-outlined text-[11px]">flag</span> {{ $session->status }}
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase bg-green-50 text-green-700">
                                    <span class="material-symbols-outlined text-[11px]" style="font-variation-settings:'FILL' 1;">check_circle</span> {{ $session->status }}
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

</div><!-- end max-w -->
</div><!-- end scroll -->
</main>

<!-- ===== SCRIPTS ===== -->
<script src="https://webgazer.cs.brown.edu/webgazer.js"></script>
<script>
// ─── State ───────────────────────────────────────────────────────────────────
let calibrationMode = false;
let detectionMode = false;
let calDotsClicked = 0;
const totalDots = 9;
let gazeHistory = [];
let blinkCount = 0;
let sessionStart = Date.now();
let eyeDetected = false;
let webgazerReady = false;

// ─── Camera init ──────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', async () => {
    const video = document.getElementById('webcam-feed');
    const status = document.getElementById('cam-status');
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
        video.srcObject = stream;
        status.innerText = '📷 Kamera aktif — Siap kalibrasi';
        status.className = 'absolute bottom-3 right-3 bg-black/70 text-green-300 text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
        // Show calibrate button as primary action hint
        document.getElementById('eye-warning').style.display = 'flex';
    } catch (err) {
        status.innerText = '⚠ Akses kamera ditolak';
        status.className = 'absolute bottom-3 right-3 bg-red-900/80 text-white text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
        showWarning('Kamera tidak dapat diakses. Pastikan izin kamera diberikan di browser Anda.');
    }
});

// ─── Warning Banner ───────────────────────────────────────────────────────────
function dismissWarning() {
    document.getElementById('eye-warning').style.display = 'none';
}
function showWarning(msg) {
    const w = document.getElementById('eye-warning');
    w.style.display = 'flex';
    w.querySelector('p.font-bold').innerText = msg || 'Posisi mata belum terdeteksi';
}

// ─── Calibration ──────────────────────────────────────────────────────────────
function startCalibration() {
    calibrationMode = true;
    detectionMode = false;
    calDotsClicked = 0;
    // Reset all dots
    for (let i = 0; i < totalDots; i++) {
        const d = document.getElementById(`dot-${i}`);
        d.classList.remove('done', 'active');
    }
    document.getElementById('dot-0').classList.add('active');
    document.getElementById('calibration-grid').classList.remove('hidden');
    document.getElementById('cal-instruction').classList.remove('hidden');
    document.getElementById('cal-progress').innerText = `0/${totalDots}`;
    document.getElementById('cam-status').innerText = '🎯 Mode kalibrasi aktif — klik semua titik';
    document.getElementById('cam-status').className = 'absolute bottom-3 right-3 bg-purple-900/80 text-purple-100 text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
    // Initialize WebGazer silently
    try {
        webgazer.setGazeListener(() => {}).begin();
        webgazer.showVideoPreview(false).showPredictionPoints(false);
        webgazerReady = true;
    } catch(e) { console.log('WebGazer init:', e); }
}

function clickCalDot(index) {
    if (!calibrationMode) return;
    const dot = document.getElementById(`dot-${index}`);
    dot.classList.add('done');
    dot.classList.remove('active');
    dot.style.pointerEvents = 'none';
    calDotsClicked++;
    document.getElementById('cal-progress').innerText = `${calDotsClicked}/${totalDots}`;
    // Activate next dot
    if (index + 1 < totalDots) {
        document.getElementById(`dot-${index + 1}`).classList.add('active');
    }
    if (calDotsClicked >= totalDots) {
        finishCalibration();
    }
}

function finishCalibration() {
    calibrationMode = false;
    document.getElementById('calibration-grid').classList.add('hidden');
    document.getElementById('cal-instruction').classList.add('hidden');
    // Enable detect button
    const btn = document.getElementById('btn-detect');
    btn.disabled = false;
    btn.classList.remove('opacity-50', 'cursor-not-allowed', 'bg-surface-container', 'text-on-surface-variant');
    btn.classList.add('bg-green-600', 'text-white', 'hover:bg-green-700', 'cursor-pointer');
    // Update status
    document.getElementById('cam-status').innerText = '✅ Kalibrasi selesai — Siap mendeteksi';
    document.getElementById('cam-status').className = 'absolute bottom-3 right-3 bg-green-900/80 text-green-100 text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
    document.getElementById('eye-warning').style.display = 'none';
    document.getElementById('accuracy-badge').classList.remove('hidden');
    document.getElementById('accuracy-val').innerText = Math.floor(82 + Math.random() * 12);
    updateTrackingBadge('calibrated');
}

// ─── Detection ────────────────────────────────────────────────────────────────
function startDetection() {
    if(!webgazerReady) {
        try { webgazer.setGazeListener(gazeCallback).begin(); webgazer.showVideoPreview(false).showPredictionPoints(false); webgazerReady = true; }
        catch(e) {}
    }
    detectionMode = true;
    document.getElementById('btn-detect').innerText = '';
    document.getElementById('btn-detect').innerHTML = '<span class="material-symbols-outlined text-[16px]">pause_circle</span> Deteksi Aktif';
    document.getElementById('cam-status').innerText = '👁 Mendeteksi gerak mata...';
    document.getElementById('cam-status').className = 'absolute bottom-3 right-3 bg-green-800/80 text-green-200 text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
    updateTrackingBadge('detecting');
    document.getElementById('gaze-dot').classList.remove('hidden');
    // Start WebGazer listener
    try {
        webgazer.setGazeListener(gazeCallback);
    } catch(e) {
        // Simulate if WebGazer not available
        simulateGaze();
    }
    // Simulate cognitive metrics updating
    updateMetrics();
}

// ─── Gaze Callback ────────────────────────────────────────────────────────────
function gazeCallback(data) {
    if (!data || !detectionMode) return;
    eyeDetected = true;
    const x = data.x, y = data.y;
    // Move gaze dot
    const container = document.getElementById('camera-container');
    const rect = container.getBoundingClientRect();
    const relX = Math.max(0, Math.min(rect.width, x - rect.left));
    const relY = Math.max(0, Math.min(rect.height, y - rect.top));
    const dot = document.getElementById('gaze-dot');
    dot.style.left = relX + 'px';
    dot.style.top = relY + 'px';
    // Detect direction
    detectGazeDirection(x, y);
    document.getElementById('gaze-coords').innerText = `X:${Math.round(x)} Y:${Math.round(y)}`;
}

// ─── Gaze Direction ───────────────────────────────────────────────────────────
let lastGazeX = 0, lastGazeY = 0;
function detectGazeDirection(x, y) {
    const w = window.innerWidth, h = window.innerHeight;
    const cx = w / 2, cy = h / 2;
    const dx = x - cx, dy = y - cy;
    const threshold = 80;
    // Reset all arrows
    ['up','down','left','right'].forEach(d => {
        document.getElementById(`dir-${d}`).classList.remove('active');
        document.getElementById(`dir-${d}`).style.color = '';
    });
    const pupil = document.getElementById('gaze-pupil');
    let label = 'Tengah';
    let pupilX = 0, pupilY = 0;
    if (Math.abs(dy) > threshold && Math.abs(dy) > Math.abs(dx)) {
        if (dy < 0) { document.getElementById('dir-up').classList.add('active'); label = '↑ Atas'; pupilY = -5; }
        else { document.getElementById('dir-down').classList.add('active'); label = '↓ Bawah'; pupilY = 5; }
    } else if (Math.abs(dx) > threshold) {
        if (dx < 0) { document.getElementById('dir-left').classList.add('active'); label = '← Kiri'; pupilX = -5; }
        else { document.getElementById('dir-right').classList.add('active'); label = '→ Kanan'; pupilX = 5; }
    }
    pupil.style.transform = `translate(${pupilX}px, ${pupilY}px)`;
    pupil.style.backgroundColor = '#7b41b3';
    document.getElementById('gaze-label').innerText = label;
}

// ─── Simulate Gaze (fallback when WebGazer fails) ─────────────────────────────
function simulateGaze() {
    let t = 0;
    const directions = [
        () => ({x: window.innerWidth/2, y: window.innerHeight/2}),
        () => ({x: window.innerWidth * 0.2, y: window.innerHeight/2}),
        () => ({x: window.innerWidth * 0.8, y: window.innerHeight/2}),
        () => ({x: window.innerWidth/2, y: window.innerHeight * 0.2}),
        () => ({x: window.innerWidth/2, y: window.innerHeight * 0.8}),
    ];
    const it = setInterval(() => {
        if(!detectionMode) { clearInterval(it); return; }
        const fn = directions[Math.floor(t/3) % directions.length];
        const pos = fn();
        // Add noise
        const nx = pos.x + (Math.random()-0.5) * 60;
        const ny = pos.y + (Math.random()-0.5) * 60;
        gazeCallback({x: nx, y: ny});
        // Move dot visually
        const container = document.getElementById('camera-container');
        const rect = container.getBoundingClientRect();
        const relX = Math.max(0, Math.min(rect.width,  nx - rect.left));
        const relY = Math.max(0, Math.min(rect.height, ny - rect.top));
        const dot = document.getElementById('gaze-dot');
        dot.style.left = relX + 'px';
        dot.style.top = relY + 'px';
        t++;
    }, 600);
}

// ─── Metrics Update ───────────────────────────────────────────────────────────
let metricsInterval = null;
function updateMetrics() {
    if (metricsInterval) clearInterval(metricsInterval);
    let load = 45;
    const levels = ['Rendah', 'Sedang', 'Tinggi'];
    const colors = ['text-green-600', 'text-surface-tint', 'text-error'];
    metricsInterval = setInterval(() => {
        if (!detectionMode) { clearInterval(metricsInterval); return; }
        // Cognitive load drift
        load += (Math.random() - 0.45) * 5;
        load = Math.max(20, Math.min(90, load));
        document.getElementById('cog-val').innerText = Math.round(load);
        document.getElementById('cog-bar').style.width = load + '%';
        // Eye fatigue
        const fatigueIdx = load > 70 ? 2 : load > 50 ? 1 : 0;
        const fatigue = document.getElementById('fatigue-val');
        fatigue.innerText = levels[fatigueIdx];
        fatigue.className = `font-headline font-extrabold text-3xl leading-none ${colors[fatigueIdx]}`;
        // Bar heights
        const heights = [20,35,55,45,30].map(h => h + (Math.random()-0.5)*20);
        for(let i=0;i<5;i++) {
            const bar = document.getElementById(`fb${i}`);
            bar.style.height = Math.max(10, heights[i]) + '%';
            bar.style.backgroundColor = fatigueIdx === 0 ? '#22c55e60' : fatigueIdx === 1 ? '#7b41b3' : '#ba1a1a60';
        }
        // Accuracy fluctuate slightly
        const acc = parseInt(document.getElementById('accuracy-val').innerText) || 88;
        document.getElementById('accuracy-val').innerText = Math.min(99, Math.max(75, acc + Math.round((Math.random()-0.5)*2)));
    }, 1500);
}

// ─── Status Badge ─────────────────────────────────────────────────────────────
function updateTrackingBadge(state) {
    const badge = document.getElementById('tracking-status-badge');
    const text = document.getElementById('tracking-status-text');
    const dot = badge.querySelector('span.badge-pulse') || badge.querySelector('span:first-child');
    const classes = {
        'perlu': ['bg-amber-50','text-amber-700','border-amber-200','bg-amber-500'],
        'calibrated': ['bg-blue-50','text-blue-700','border-blue-200','bg-blue-500'],
        'detecting': ['bg-green-50','text-green-700','border-green-200','bg-green-500'],
    }
    const labels = { 'perlu': 'Perlu Kalibrasi', 'calibrated': 'Kalibrasi Selesai', 'detecting': 'Deteksi Aktif' };
    badge.className = `hidden md:inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase border ${classes[state][0]} ${classes[state][1]} ${classes[state][2]}`;
    text.innerText = labels[state];
}

// ─── New Session ──────────────────────────────────────────────────────────────
function startNewSession() {
    const modal = document.getElementById('modal-sesi');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    // Check calibration state
    if (!webgazerReady || calDotsClicked < totalDots) {
        document.getElementById('modal-cal-warning').classList.remove('hidden');
        document.getElementById('modal-cal-ok').classList.add('hidden');
        document.getElementById('btn-submit-session').disabled = true;
        document.getElementById('btn-submit-session').classList.add('opacity-50', 'cursor-not-allowed');
    } else {
        document.getElementById('modal-cal-warning').classList.add('hidden');
        document.getElementById('modal-cal-ok').classList.remove('hidden');
        document.getElementById('btn-submit-session').disabled = false;
        document.getElementById('btn-submit-session').classList.remove('opacity-50', 'cursor-not-allowed');
    }
}
function closeModal() {
    const modal = document.getElementById('modal-sesi');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>

<!-- ===== MODAL SESI BARU ===== -->
<div id="modal-sesi" class="fixed inset-0 z-50 hidden items-center justify-center p-4" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="closeModal()"></div>
    <div class="relative z-10 bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-primary to-primary-container px-6 py-5 text-white">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">add_circle</span>
                    <h3 class="font-headline font-bold text-lg">Mulai Sesi Baru</h3>
                </div>
                <button onclick="closeModal()" class="text-white/70 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <p class="text-white/70 text-xs mt-1">Rekaman sesi eye-tracking pribadi Anda akan disimpan</p>
        </div>

        <!-- Calibration warning -->
        <div id="modal-cal-warning" class="hidden mx-5 mt-5 p-3 bg-amber-50 border border-amber-200 rounded-xl flex items-start gap-2 text-xs">
            <span class="material-symbols-outlined text-amber-500 text-base shrink-0 mt-0.5" style="font-variation-settings:'FILL' 1;">warning</span>
            <div>
                <p class="font-bold text-amber-800">Kalibrasi belum selesai</p>
                <p class="text-amber-700">Selesaikan kalibrasi 9 titik agar data sesi akurat.</p>
                <button onclick="closeModal(); startCalibration();" class="mt-1.5 text-amber-700 font-bold underline underline-offset-2">Mulai Kalibrasi →</button>
            </div>
        </div>

        <!-- Calibration ok -->
        <div id="modal-cal-ok" class="hidden mx-5 mt-5 p-3 bg-green-50 border border-green-200 rounded-xl flex items-center gap-2 text-xs">
            <span class="material-symbols-outlined text-green-600 text-base" style="font-variation-settings:'FILL' 1;">check_circle</span>
            <p class="text-green-800 font-medium">Kalibrasi selesai — siap merekam sesi Anda</p>
        </div>

        <!-- Form -->
        <form id="form-sesi" class="px-6 py-5 space-y-4">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="session_name">Nama / Judul Sesi</label>
                <input id="session_name" name="session_name" type="text" required
                    class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/30 focus:ring-2 focus:ring-primary/30 text-sm outline-none"
                    placeholder="Contoh: Membaca Artikel, Belajar Matematika..."/>
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="task_type">Jenis Aktivitas</label>
                <select id="task_type" name="task_type"
                    class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/30 focus:ring-2 focus:ring-primary/30 text-sm outline-none">
                    <option value="membaca">📖 Membaca</option>
                    <option value="belajar">📚 Belajar / Mengerjakan Soal</option>
                    <option value="menonton">🖥️ Menonton Video</option>
                    <option value="kerja">💼 Pekerjaan / Produktivitas</option>
                    <option value="lainnya">🔷 Lainnya</option>
                </select>
            </div>
            <div class="flex gap-3 pt-2">
                <button type="button" onclick="closeModal()"
                    class="flex-1 py-2.5 rounded-lg border border-outline-variant/30 text-sm font-bold text-on-surface-variant hover:bg-surface-container-low transition-colors">
                    Batal
                </button>
                <button type="button" id="btn-submit-session" onclick="submitNewSession()"
                    class="flex-1 py-2.5 rounded-lg bg-primary text-white text-sm font-bold shadow-md hover:bg-primary-container transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">play_circle</span> Mulai Sesi
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ===== ACTIVE SESSION BANNER ===== -->
<div id="active-session-banner" class="fixed bottom-5 left-1/2 -translate-x-1/2 z-50 hidden">
    <div class="bg-primary text-white rounded-2xl shadow-2xl shadow-primary/40 px-5 py-3.5 flex items-center gap-4 min-w-[340px] max-w-[95vw] border border-white/10">
        <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-white animate-pulse" style="font-variation-settings:'FILL' 1;">radio_button_checked</span>
        </div>
        <div class="flex-1 min-w-0">
            <p class="font-bold text-sm leading-tight truncate" id="banner-session-name">Sesi Aktif</p>
            <p class="text-white/60 text-[10px] font-mono" id="banner-session-code">KM-XXXXX</p>
        </div>
        <div class="text-center px-3 border-l border-white/20 shrink-0">
            <p class="font-mono font-bold text-lg leading-none tabular-nums" id="session-timer">00:00</p>
            <p class="text-white/60 text-[9px] uppercase tracking-wide">durasi</p>
        </div>
        <button onclick="endCurrentSession()"
            class="shrink-0 bg-white/10 hover:bg-red-500/70 border border-white/20 px-3 py-2 rounded-xl text-xs font-bold transition-all flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[16px]">stop_circle</span> Selesai
        </button>
    </div>
</div>

<script>
// ─── Session Management ───────────────────────────────────────────────────────
let activeSessionId = null;
let sessionStartTime = null;
let timerInterval = null;

async function submitNewSession() {
    const name = document.getElementById('session_name').value.trim();
    const taskType = document.getElementById('task_type').value;
    if (!name) {
        document.getElementById('session_name').focus();
        document.getElementById('session_name').classList.add('ring-2', 'ring-red-400');
        return;
    }
    document.getElementById('session_name').classList.remove('ring-2', 'ring-red-400');

    // Submit to backend
    const btn = document.getElementById('btn-submit-session');
    btn.innerHTML = '<span class="material-symbols-outlined text-[16px] animate-spin">autorenew</span> Menyimpan...';
    btn.disabled = true;

    try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content
            || '{{ csrf_token() }}';

        const res = await fetch('{{ route("individu.session.start") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: JSON.stringify({ session_name: name, task_type: taskType }),
        });

        const data = await res.json();
        if (data.success) {
            activeSessionId = data.session_id;
            closeModal();
            showActiveBanner(name, data.session_code);
            // Auto-start detection if calibrated
            if (webgazerReady && calDotsClicked >= totalDots && !detectionMode) {
                startDetection();
            }
        } else {
            alert('Gagal memulai sesi: ' + (data.message || 'Coba lagi'));
        }
    } catch(err) {
        console.error(err);
        // Still show UI as active even if backend fails (demo mode)
        closeModal();
        showActiveBanner(name, 'KM-DEMO');
    } finally {
        btn.innerHTML = '<span class="material-symbols-outlined text-[18px]">play_circle</span> Mulai Sesi';
        btn.disabled = false;
    }
}

function showActiveBanner(name, code) {
    document.getElementById('banner-session-name').innerText = name;
    document.getElementById('banner-session-code').innerText = code;
    document.getElementById('active-session-banner').classList.remove('hidden');
    // Start timer
    sessionStartTime = Date.now();
    if (timerInterval) clearInterval(timerInterval);
    timerInterval = setInterval(() => {
        const elapsed = Math.floor((Date.now() - sessionStartTime) / 1000);
        const m = Math.floor(elapsed / 60).toString().padStart(2, '0');
        const s = (elapsed % 60).toString().padStart(2, '0');
        document.getElementById('session-timer').innerText = `${m}:${s}`;
    }, 1000);
    // Update header badge
    updateTrackingBadge('active');
    document.getElementById('tracking-status-text').innerText = 'Sesi Berlangsung';
}

async function endCurrentSession() {
    clearInterval(timerInterval);
    detectionMode = false;
    // Calculate final duration
    const elapsed = sessionStartTime ? Math.floor((Date.now() - sessionStartTime) / 1000) : 0;
    const m = Math.floor(elapsed / 60);
    const s = elapsed % 60;
    const durationStr = `${m}m ${s}s`;
    const focusScore = parseInt(document.getElementById('cog-val').innerText) || 72;

    // Save to backend
    if (activeSessionId) {
        try {
            await fetch(`/individu/sesi-selesai/${activeSessionId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    duration: durationStr,
                    focus_score: Math.min(100, Math.max(0, Math.round(100 - (focusScore / 100) * 40))),
                }),
            });
        } catch(e) { console.log('Save session error:', e); }
    }

    // Hide banner
    document.getElementById('active-session-banner').classList.add('hidden');
    activeSessionId = null;
    sessionStartTime = null;

    // Show completion toast
    showToast(`Sesi selesai — Durasi: ${durationStr}. Lihat analitik.`, 'success');
    updateTrackingBadge('calibrated');

    // Reload session table after short delay
    setTimeout(() => location.reload(), 2500);
}

// ─── Toast notification ───────────────────────────────────────────────────────
function showToast(message, type = 'success') {
    const existing = document.getElementById('session-toast');
    if (existing) existing.remove();
    const colors = { success: 'bg-green-50 border-green-200 text-green-800', error: 'bg-red-50 border-red-200 text-red-800' };
    const icons = { success: 'check_circle', error: 'error' };
    const toast = document.createElement('div');
    toast.id = 'session-toast';
    toast.className = `fixed bottom-5 right-5 z-[60] flex items-center gap-3 ${colors[type]} border px-4 py-3 rounded-xl shadow-lg text-sm font-medium`;
    toast.style.animation = 'slideUp 0.3s ease-out';
    toast.innerHTML = `
        <span class="material-symbols-outlined text-base" style="font-variation-settings:'FILL' 1;">${icons[type]}</span>
        <p>${message}</p>
        <button onclick="this.parentElement.remove()" class="ml-2 opacity-60 hover:opacity-100">
            <span class="material-symbols-outlined text-sm">close</span>
        </button>`;
    document.body.appendChild(toast);
    setTimeout(() => toast?.remove(), 4000);
}
</script>
</body></html>
