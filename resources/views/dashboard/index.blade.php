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
<aside class="w-20 lg:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col items-center lg:items-stretch py-6 transition-all duration-300 z-20 shadow-sm relative">
<!-- Logo Area -->
<div class="px-0 lg:px-6 mb-8 flex flex-col items-center lg:items-start w-full">
<div class="flex items-center gap-3 w-full justify-center lg:justify-start">
<img alt="Kornea Mental Logo" class="h-10 w-10 rounded-lg shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<div class="hidden lg:block">
<h1 class="font-headline font-extrabold text-lg text-primary leading-tight">Kornea Mental</h1>
<p class="text-[10px] text-on-surface-variant font-bold uppercase tracking-widest mt-0.5">Ruang Kerja</p>
</div>
</div>
</div>
<!-- Nav Links -->
<nav class="flex-1 w-full px-3 space-y-1 overflow-y-auto custom-scrollbar">
<div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-4 px-3">Menu Utama</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold group transition-all relative overflow-hidden" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">dashboard</span>
<span class="hidden lg:inline text-sm">Dasbor</span>
<div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
</a>
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">visibility</span>
<span class="hidden lg:inline text-sm">Pelacakan Live</span>
</a>
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('analytics.results') }}">
<span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">analytics</span>
<span class="hidden lg:inline text-sm">Hasil Analisis</span>
</a>
<div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 mt-6 px-3">Institusi</div>
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('analytics.school') }}">
<span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">school</span>
<span class="hidden lg:inline text-sm text-center">Analitik Sekolah</span>
</a>
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('analytics.university') }}">
<span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">account_balance</span>
<span class="hidden lg:inline text-sm">Analitik Universitas</span>
</a>
</nav>
<!-- Bottom Nav Area -->
<div class="w-full px-3 mt-auto flex flex-col gap-2 pt-4 border-t border-outline-variant/20">
<a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary font-medium group transition-all" href="{{ route('profile') }}">
<span class="material-symbols-outlined text-[20px] group-hover:scale-110 transition-transform">settings</span>
<span class="hidden lg:inline text-sm">Pengaturan Akun</span>
</a>
<!-- User Profile Mini -->
<div class="mt-2 p-2 hidden lg:flex items-center gap-3 rounded-xl bg-surface-container-low border border-outline-variant/10">
<img alt="User avatar" class="w-8 h-8 rounded-full shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnmJOjVqapt_OoWGVjT1SX2rajUIYun2JTGuGnwU2vXr813Qd-dO8n6EyWQFRRAIQTYLJm17Ts69ssKXUfvlMr4aIlDAPXTYG2izEvmT47Rlgv8YtkpTQTFZtpopLsv6gAfvph2i9smJYjNZ21MGuT8qnS0UhE7ZOj8rjlG7c-lLrAoEC94ziRMVp6OzlPREqNKElXaRHbzXT7bg8vqtAACyihqLnlT_L1JJm7EFQNdJGYoR9h-elyw_AZWS2cpaU-JRY89YBABts"/>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold text-on-surface truncate">Praktisi Medis</p>
<p class="text-[10px] text-on-surface-variant truncate">praktisi@korneamental.ai</p>
</div>
<a href="{{ route('home') }}" class="material-symbols-outlined text-outline hover:text-error text-sm cursor-pointer ml-auto" title="Keluar">logout</a>
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
<!-- Abstract Live Monitoring Section -->
<section class="grid grid-cols-1 xl:grid-cols-3 gap-6">
<!-- Live Eye Tracking Feed Mockup (Large Area) -->
<div class="xl:col-span-2 glass-card rounded-2xl p-6 flex flex-col relative overflow-hidden min-h-[400px]">
<div class="flex justify-between items-center mb-4 z-10 relative">
<h3 class="font-headline font-bold text-lg text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-primary/70">visibility</span>
                            Feed Kalibrasi Langsung
                        </h3>
<div class="flex gap-2">
<span class="bg-surface-container-low text-xs font-bold px-3 py-1 rounded-full text-on-surface-variant border border-outline-variant/20">Akurasi: 99.2%</span>
<button class="text-xs bg-surface-container text-primary font-bold px-3 py-1 rounded-full hover:bg-surface-container-high transition-colors">Perluas Layar</button>
</div>
</div>
<!-- Live Camera Feed -->
<div class="flex-1 bg-black rounded-xl border border-outline-variant/20 relative overflow-hidden flex items-center justify-center group">
<!-- The actual video element -->
<video id="webcam-feed" class="absolute w-full h-full object-cover opacity-80" autoplay playsinline muted></video>

<!-- AI Tracking Overlays (Aesthetic) -->
<div class="absolute w-32 h-32 border-2 border-primary/40 rounded-full flex justify-center items-center pointer-events-none">
<div class="w-16 h-16 border border-secondary/60 rounded-full flex justify-center items-center">
<div class="w-2 h-2 bg-error rounded-full animate-pulse shadow-[0_0_10px_rgba(186,26,26,0.8)]"></div>
</div>
</div>

<!-- Tracking Grid Overlay -->
<div class="absolute inset-0 bg-[linear-gradient(rgba(123,65,179,0.2)_1px,transparent_1px),linear-gradient(90deg,rgba(123,65,179,0.2)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

<!-- Reticle -->
<div class="absolute top-1/2 left-[48%] -translate-x-1/2 -translate-y-1/2 w-48 h-48 border-[1px] border-primary/50 rounded-full border-dashed hidden md:block pointer-events-none"></div>

<div id="cam-status" class="absolute bottom-4 right-4 bg-black/60 text-white text-[10px] font-mono px-2 py-1 rounded z-50">Menunggu Izin Kamera...</div>
</div>
</div>
<!-- Vital Metrics & Controls Sidebar -->
<div class="space-y-6">
<!-- Metric: Cognitive Load -->
<div class="glass-card rounded-2xl p-6 relative overflow-hidden group">
<h4 class="font-label text-xs font-bold text-outline uppercase tracking-wider mb-1">Beban Kognitif Saat Ini</h4>
<div class="flex items-end gap-2 mb-4">
<span class="font-headline font-extrabold text-4xl text-primary leading-none">64</span>
<span class="text-sm font-bold text-on-surface-variant mb-1">/ 100</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2 overflow-hidden flex">
<div class="bg-gradient-to-r from-green-400 via-yellow-400 to-transparent w-[64%] rounded-full relative">
<div class="absolute right-0 top-0 bottom-0 w-4 bg-white/40 blur-sm animate-pulse"></div>
</div>
</div>
<!-- Decorative background pulse -->
<div class="absolute -right-8 -bottom-8 w-32 h-32 bg-yellow-400/10 rounded-full blur-2xl group-hover:bg-yellow-400/20 transition-all"></div>
</div>
<!-- Metric: Eye Fatigue -->
<div class="glass-card rounded-2xl p-6 relative overflow-hidden group">
<h4 class="font-label text-xs font-bold text-outline uppercase tracking-wider mb-1">Indeks Kelelahan Mata</h4>
<div class="flex items-end gap-2 mb-4">
<span class="font-headline font-extrabold text-4xl text-surface-tint leading-none">Medium</span>
</div>
<div class="flex gap-1 h-8 items-end w-full max-w-[150px]">
<div class="w-1/5 bg-primary/20 h-[30%] rounded-sm"></div>
<div class="w-1/5 bg-primary/40 h-[50%] rounded-sm"></div>
<div class="w-1/5 bg-surface-tint h-[80%] rounded-sm relative"><div class="absolute -top-3 left-1/2 -translate-x-1/2 w-2 h-2 rounded-full border-2 border-white bg-surface-tint"></div></div>
<div class="w-1/5 bg-surface-container h-[40%] rounded-sm"></div>
<div class="w-1/5 bg-surface-container h-[20%] rounded-sm"></div>
</div>
<p class="text-[10px] text-on-surface-variant mt-2 font-medium">Berdasarkan tingkat kedipan &amp; dilatasi pupil (30mnt terakhir).</p>
</div>
<!-- Quick Action -->
<div class="bg-surface-container-low rounded-2xl p-5 border border-outline-variant/20 flex items-center justify-between hover:bg-surface-container transition-colors cursor-pointer">
<div>
<h4 class="font-headline font-bold text-sm text-primary">Rekalibrasi Sensor</h4>
<p class="text-[10px] text-on-surface-variant">Durasi: ~15 detik</p>
</div>
<div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[20px]">refresh</span>
</div>
</div>
</div>
</section>
<!-- Recent Sessions Table -->
<section>
<div class="flex justify-between items-center mb-4 px-1">
<h3 class="font-headline font-bold text-lg text-primary">Sesi Terakhir</h3>
<a class="text-xs font-bold text-surface-tint hover:underline underline-offset-4" href="#">Lihat Semua Arsip</a>
</div>
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left text-sm">
<thead>
<tr class="bg-surface-container-low/50 border-b border-outline-variant/10 text-[10px] font-bold text-outline uppercase tracking-wider">
<th class="px-6 py-4 rounded-tl-xl font-label">ID Sesi</th>
<th class="px-6 py-4 font-label">Klien / Subjek</th>
<th class="px-6 py-4 font-label">Durasi</th>
<th class="px-6 py-4 font-label">Skor Fokus Rata-rata</th>
<th class="px-6 py-4 rounded-tr-xl font-label">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group cursor-pointer">
<td class="px-6 py-4 font-mono text-xs text-primary font-medium">#KM-4921</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed/50 flex flex-col items-center justify-center text-secondary font-bold text-xs uppercase">AB</div>
<span class="font-semibold text-on-surface group-hover:text-primary transition-colors">Ahmad B.</span>
</div>
</td>
<td class="px-6 py-4 text-on-surface-variant">45m 12s</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 bg-surface-container h-1.5 rounded-full overflow-hidden"><div class="bg-primary w-[82%] h-full rounded-full"></div></div>
<span class="text-xs font-bold">82%</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase bg-surface-container-highest text-on-surface-variant">
                    Selesai
                </span>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group cursor-pointer">
<td class="px-6 py-4 font-mono text-xs text-primary font-medium">#KM-4920</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed/50 flex flex-col items-center justify-center text-primary font-bold text-xs uppercase">CN</div>
<span class="font-semibold text-on-surface group-hover:text-primary transition-colors">Citra N.</span>
</div>
</td>
<td class="px-6 py-4 text-on-surface-variant">1h 20m</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 bg-surface-container h-1.5 rounded-full overflow-hidden"><div class="bg-error w-[45%] h-full rounded-full"></div></div>
<span class="text-xs font-bold">45%</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase bg-error-container/50 text-error">
<span class="material-symbols-outlined text-[12px] opacity-70">flag</span>
                    Diulas
                </span>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/30 transition-colors group cursor-pointer">
<td class="px-6 py-4 font-mono text-xs text-primary font-medium">#KM-4919</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-[16px] text-on-surface-variant">person</span>
</div>
<span class="font-semibold text-on-surface group-hover:text-primary transition-colors text-on-surface-variant italic">Anonim 04</span>
</div>
</td>
<td class="px-6 py-4 text-on-surface-variant">12m 05s</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-16 bg-surface-container h-1.5 rounded-full overflow-hidden"><div class="bg-surface-tint w-[68%] h-full rounded-full"></div></div>
<span class="text-xs font-bold">68%</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase bg-surface-container-highest text-on-surface-variant">
                    Selesai
                </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- WebGazer & Camera Access Scripts -->
<script src="https://webgazer.cs.brown.edu/webgazer.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const videoElement = document.getElementById('webcam-feed');
        const statusElement = document.getElementById('cam-status');

        try {
            // Request raw camera access for our custom UI container
            const stream = await navigator.mediaDevices.getUserMedia({ video: true });
            videoElement.srcObject = stream;
            statusElement.innerText = "Koneksi Kamera Aktif";
            
            // Initialize WebGazer Engine
            // Note: This requires the user to click and look at points on the screen to calibrate
            webgazer.setGazeListener(function(data, elapsedTime) {
                if (data == null) return;
                
                // Track gaze coordinates
                let x = Math.round(data.x);
                let y = Math.round(data.y);
                statusElement.innerText = `X: ${x} Y: ${y} | AI Tracking Active`;
                statusElement.className = "absolute bottom-4 right-4 bg-green-600/80 text-white text-[10px] font-mono px-2 py-1 rounded z-50";
            }).begin();
            
            // Configure WebGazer UI: Hide default video but keep tracking dot
            setTimeout(() => {
                webgazer.showVideoPreview(false).showPredictionPoints(true);
            }, 1000);

        } catch (err) {
            console.error("Akses kamera ditolak atau tidak ditemukan perangkat:", err);
            statusElement.innerText = "Akses Kamera Ditolak / Error";
            statusElement.className = "absolute bottom-4 right-4 bg-error/90 text-white text-[10px] font-mono px-2 py-1 rounded z-50";
        }
    });
</script>
</body></html>

