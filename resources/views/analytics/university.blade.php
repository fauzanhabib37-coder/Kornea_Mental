<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Analitik Institusi (Universitas) | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(46, 0, 82, 0.03) 0px, transparent 50%);
        }
        .bento-card {
            background: #ffffff;
            border: 1px solid rgba(206, 195, 211, 0.4);
            border-radius: 1.5rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -2px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }
        .bento-card:hover {
            box-shadow: 0 10px 25px -5px rgba(46, 0, 82, 0.05), 0 8px 10px -6px rgba(46, 0, 82, 0.02);
            border-color: rgba(123, 65, 179, 0.2);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-mesh font-body text-on-surface h-screen flex flex-col md:flex-row overflow-hidden">
<!-- Sidebar -->
<aside class="w-20 md:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20 transition-all flex-shrink-0">
<div class="px-2 md:px-6 mb-8 flex justify-center md:justify-start">
<a href="{{ route('home') }}" class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-surface-tint flex items-center justify-center text-white font-headline font-bold text-sm shadow-md">
                    KM
                </div>
<div class="hidden md:block">
<h1 class="font-headline font-bold text-sm text-primary leading-tight">Kornea Riset</h1>
<p class="text-[9px] text-outline uppercase tracking-widest font-bold">Panel Universitas</p>
</div>
</a>
</div>
<nav class="flex-1 w-full px-3 space-y-2 overflow-y-auto">
<div class="hidden md:block text-[10px] font-bold text-outline uppercase tracking-wider mb-2 px-2">Menu Utama</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="hidden md:inline text-sm">Dasbor Sentral</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="{{ route('analytics.school') }}">
<span class="material-symbols-outlined text-[20px]">school</span>
<span class="hidden md:inline text-sm">Manajemen Fakultas</span>
</a>
<div class="hidden md:block text-[10px] font-bold text-outline uppercase tracking-wider mt-6 mb-2 px-2">Analitik Tingkat Lanjut</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white font-bold shadow-md shadow-primary/20 relative overflow-hidden group" href="{{ route('analytics.university') }}">
<div class="absolute inset-0 bg-white/10 group-hover:bg-transparent transition-colors"></div>
<span class="material-symbols-outlined text-[20px] relative z-10" style="font-variation-settings: 'FILL' 1;">insights</span>
<span class="hidden md:inline text-sm relative z-10">Statistik Institusi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">folder_shared</span>
<span class="hidden md:inline text-sm">Repositori Data Mentah</span>
</a>
</nav>
</aside>
<!-- Main Content -->
<main class="flex-1 h-full flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-20 flex items-center justify-between px-6 lg:px-10 bg-surface-container-lowest/90 backdrop-blur-md border-b border-outline-variant/10 z-10">
<div>
<h2 class="font-headline font-extrabold text-2xl text-primary tracking-tight">Tinjauan Akademik Universitas</h2>
<p class="text-xs text-on-surface-variant font-medium mt-1">Periode: Semester Ganjil 2023/2024 (Sep - Jan)</p>
</div>
<div class="flex items-center gap-3">
<button class="hidden sm:flex items-center gap-2 px-4 py-2 bg-surface-container-low border border-outline-variant/30 rounded-lg text-sm font-bold text-primary hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-[18px]">calendar_month</span> Pilih Periode
            </button>
<button class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
<span class="material-symbols-outlined text-[18px]">download</span> Ekspor Laporan
            </button>
</div>
</header>
<!-- Scrollable Dashboard -->
<div class="flex-1 overflow-y-auto p-6 lg:p-10">
<div class="max-w-screen-2xl mx-auto space-y-6">
<!-- Top Metrics Row -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
<!-- Total Mahasiswa Dipantau -->
<div class="bento-card relative overflow-hidden group border-l-4 border-l-primary/50">
<div class="absolute right-[-10px] top-[-10px] w-24 h-24 bg-primary-fixed/20 rounded-full blur-2xl group-hover:bg-primary-fixed/40 transition-colors"></div>
<div class="flex justify-between items-start mb-4 relative z-10">
<span class="text-xs font-bold text-outline uppercase tracking-wider">Subjek Aktif</span>
<span class="material-symbols-outlined text-primary/50 text-[28px]">group</span>
</div>
<h3 class="font-headline font-black text-4xl text-primary mb-1">4,208</h3>
<p class="text-xs font-semibold text-green-600 flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">arrow_upward</span> +12% dari semester lalu
                </p>
</div>
<!-- Rata-rata Beban Kognitif -->
<div class="bento-card relative overflow-hidden border-l-4 border-l-surface-tint">
<div class="flex justify-between items-start mb-4 relative z-10">
<span class="text-xs font-bold text-outline uppercase tracking-wider">Indeks Kognitif Rata²</span>
<span class="material-symbols-outlined text-surface-tint/50 text-[28px]" style="font-variation-settings: 'FILL' 1;">psychology</span>
</div>
<div class="flex items-baseline gap-2 mb-1">
<h3 class="font-headline font-black text-4xl text-primary">68</h3>
<span class="text-sm font-bold text-on-surface-variant">/ 100</span>
</div>
<div class="w-full bg-surface-container h-1.5 rounded-full mt-2 overflow-hidden">
<div class="bg-surface-tint h-full rounded-full" style="width: 68%;"></div>
</div>
<p class="text-[10px] text-on-surface-variant font-medium mt-2">Kategori: Optimal/Fokus</p>
</div>
<!-- Total Sesi Riset/Ujian -->
<div class="bento-card relative overflow-hidden border-l-4 border-l-secondary">
<div class="flex justify-between items-start mb-4 relative z-10">
<span class="text-xs font-bold text-outline uppercase tracking-wider">Sesi Terekam</span>
<span class="material-symbols-outlined text-secondary/50 text-[28px]">video_library</span>
</div>
<h3 class="font-headline font-black text-4xl text-primary mb-1">12.5K</h3>
<p class="text-xs font-medium text-on-surface-variant">Total durasi: 14,200 jam</p>
</div>
<!-- Peringatan Kelelahan (Fatigue) -->
<div class="bento-card relative overflow-hidden border-l-4 border-l-error bg-error/5">
<div class="flex justify-between items-start mb-4 relative z-10">
<span class="text-xs font-bold text-error uppercase tracking-wider">Peringatan Kelelahan</span>
<span class="material-symbols-outlined text-error/50 text-[28px]" style="font-variation-settings: 'FILL' 1;">warning</span>
</div>
<h3 class="font-headline font-black text-4xl text-error mb-1">842</h3>
<p class="text-xs font-semibold text-error/80 flex items-center gap-1">
                    Kasus terdeteksi bulan ini
                </p>
<button class="mt-3 text-[10px] font-bold text-white bg-error hover:bg-red-800 px-3 py-1.5 rounded-md transition-colors w-full">Investigasi Fakultas</button>
</div>
</div>
<!-- Main Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Line Chart: Tren Fokus Antar Fakultas -->
<div class="lg:col-span-2 bento-card">
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="font-headline font-bold text-lg text-primary">Tren Beban Kognitif per Fakultas</h3>
<p class="text-xs text-on-surface-variant">Rata-rata mingguan berdasarkan Eye-Tracking data</p>
</div>
<select class="bg-surface-container-low border-none rounded-lg text-xs font-bold text-on-surface-variant focus:ring-primary py-2 px-3 cursor-pointer">
<option>Minggu Ini</option>
<option selected="">Bulan Ini</option>
<option>Semester Ini</option>
</select>
</div>
<div class="h-72 w-full relative">
<!-- Mocking the Chart Canvas -->
<canvas id="facultyTrendChart"></canvas>
<!-- Overlay message if JS disabled -->
<div class="absolute inset-0 flex items-center justify-center text-sm font-medium text-outline bg-surface-container-lowest/50 backdrop-blur-sm hidden" id="chartFallback">
                        Memuat grafik visualisasi...
                    </div>
</div>
</div>
<!-- Radar Chart/List: Profil Kemampuan -->
<div class="bento-card flex flex-col">
<h3 class="font-headline font-bold text-lg text-primary mb-1">Pola Visual Dominan</h3>
<p class="text-xs text-on-surface-variant mb-6">Berdasarkan analisis saccadic &amp; durasi fiksasi</p>
<div class="flex-1 flex flex-col justify-center">
<!-- Simulated Radar Chart visually using CSS and SVG -->
<div class="relative w-full aspect-square max-w-[240px] mx-auto opacity-90 drop-shadow-md">
<svg class="w-full h-full" preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100">
<!-- Background Grid (Web) -->
<polygon fill="none" points="50,10 90,30 90,70 50,90 10,70 10,30" stroke="#e1e2e8" stroke-width="0.5"></polygon>
<polygon fill="none" points="50,30 70,40 70,60 50,70 30,60 30,40" stroke="#e1e2e8" stroke-width="0.5"></polygon>
<!-- Axes -->
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="50" y1="50" y2="10"></line>
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="90" y1="50" y2="30"></line>
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="90" y1="50" y2="70"></line>
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="50" y1="50" y2="90"></line>
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="10" y1="50" y2="70"></line>
<line stroke="#e1e2e8" stroke-width="0.5" x1="50" x2="10" y1="50" y2="30"></line>
<!-- Data Polygon -->
<polygon class="animate-pulse" fill="rgba(123, 65, 179, 0.4)" points="50,20 80,45 65,75 50,80 25,60 30,35" stroke="#7b41b3" stroke-width="1.5"></polygon>
<!-- Points -->
<circle cx="50" cy="20" fill="#2e0052" r="1.5"></circle>
<circle cx="80" cy="45" fill="#2e0052" r="1.5"></circle>
<circle cx="65" cy="75" fill="#2e0052" r="1.5"></circle>
<circle cx="50" cy="80" fill="#2e0052" r="1.5"></circle>
<circle cx="25" cy="60" fill="#2e0052" r="1.5"></circle>
<circle cx="30" cy="35" fill="#2e0052" r="1.5"></circle>
<!-- Labels -->
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="50" y="7" text-anchor="middle">Pemahaman Teks</text>
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="92" y="30" >Analisis Visual</text>
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="92" y="72" >Pemecahan Masalah</text>
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="50" y="95" text-anchor="middle">Retensi Memori</text>
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="8" y="72" text-anchor="end">Fokus Konstan</text>
<text fill="#4c4451" font-family="Inter" font-size="4" font-weight="bold" x="8" y="30" text-anchor="end">Kecepatan Baca</text>
</svg>
</div>
</div>
</div>
</div>
<!-- Deep Dive Table -->
<div class="bento-card overflow-hidden !p-0">
<div class="bg-surface-container-low/50 p-6 border-b border-outline-variant/10 flex justify-between items-center">
<div>
<h3 class="font-headline font-bold text-lg text-primary">Kinerja Berdasarkan Fakultas</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">Data dikompilasi dari seluruh subjek aktif</p>
</div>
<button class="text-xs font-bold text-surface-tint hover:bg-surface-tint/10 px-3 py-1.5 rounded transition-colors uppercase tracking-wider">Lihat Selengkapnya</button>
</div>
<div class="overflow-x-auto w-full">
<table class="w-full text-left text-sm whitespace-nowrap">
<thead>
<tr class="bg-surface-container-lowest text-[10px] font-bold text-outline uppercase tracking-widest border-b border-outline-variant/10">
<th class="px-6 py-4 font-label">Nama Fakultas</th>
<th class="px-6 py-4 font-label">Total Mahasiswa</th>
<th class="px-6 py-4 font-label">Rata-rata Fokus</th>
<th class="px-6 py-4 font-label">Indeks Kelelahan</th>
<th class="px-6 py-4 font-label text-right">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body">
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[16px]">science</span>
</div>
<span class="font-bold text-primary">Kedokteran &amp; Ilmu Kesehatan</span>
</div>
</td>
<td class="px-6 py-4 font-medium">1,205</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="font-bold">85%</span>
<div class="w-16 h-1.5 bg-surface-container rounded-full overflow-hidden"><div class="w-[85%] h-full bg-green-500"></div></div>
</div>
</td>
<td class="px-6 py-4 font-bold text-error">Tinggi (7.2/10)</td>
<td class="px-6 py-4 text-right">
<span class="inline-flex items-center px-2 py-1 rounded bg-error-container/30 text-error text-[10px] font-bold uppercase border border-error/20">Perlu Intervensi</span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[16px]">code</span>
</div>
<span class="font-bold text-primary">Sistem Informasi &amp; Teknik</span>
</div>
</td>
<td class="px-6 py-4 font-medium">850</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="font-bold">78%</span>
<div class="w-16 h-1.5 bg-surface-container rounded-full overflow-hidden"><div class="w-[78%] h-full bg-primary-container"></div></div>
</div>
</td>
<td class="px-6 py-4 font-bold text-yellow-600">Sedang (4.5/10)</td>
<td class="px-6 py-4 text-right">
<span class="inline-flex items-center px-2 py-1 rounded bg-surface-container-high text-on-surface-variant text-[10px] font-bold uppercase border border-outline-variant/30">Stabil</span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[16px]">account_balance</span>
</div>
<span class="font-bold text-primary">Ekonomi &amp; Bisnis</span>
</div>
</td>
<td class="px-6 py-4 font-medium">1,102</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="font-bold">92%</span>
<div class="w-16 h-1.5 bg-surface-container rounded-full overflow-hidden"><div class="w-[92%] h-full bg-green-500"></div></div>
</div>
</td>
<td class="px-6 py-4 font-bold text-green-600">Rendah (2.1/10)</td>
<td class="px-6 py-4 text-right">
<span class="inline-flex items-center px-2 py-1 rounded bg-green-50 text-green-700 text-[10px] font-bold uppercase border border-green-200">Sangat Baik</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
<!-- Chart Generation Script -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('facultyTrendChart').getContext('2d');
            
            Chart.defaults.font.family = "'Inter', sans-serif";
            Chart.defaults.color = "#4c4451";
            
            const gradient1 = ctx.createLinearGradient(0, 0, 0, 300);
            gradient1.addColorStop(0, 'rgba(123, 65, 179, 0.2)');
            gradient1.addColorStop(1, 'rgba(123, 65, 179, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4', 'Minggu 5'],
                    datasets: [
                        {
                            label: 'Fak. Kedokteran',
                            data: [75, 78, 85, 82, 88],
                            borderColor: '#ba1a1a', // Error red to highlight issue
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#ba1a1a'
                        },
                        {
                            label: 'Fak. Teknik',
                            data: [60, 65, 62, 70, 75],
                            borderColor: '#7b41b3', // Surface tint
                            backgroundColor: gradient1,
                            borderWidth: 3,
                            fill: true,
                            tension: 0.4,
                            pointRadius: 4,
                            pointBackgroundColor: '#ffffff',
                            pointBorderColor: '#7b41b3',
                            pointBorderWidth: 2
                        },
                        {
                            label: 'Rata-rata Universitas',
                            data: [65, 68, 70, 72, 76],
                            borderColor: '#cec3d3',
                            borderDash: [5, 5],
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointStyle: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 11,
                                    weight: 'bold'
                                }
                            }
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            backgroundColor: 'rgba(25, 28, 32, 0.9)',
                            titleFont: { size: 13, family: 'Manrope' },
                            bodyFont: { size: 12 },
                            padding: 12,
                            cornerRadius: 8
                        }
                    },
                    scales: {
                        y: {
                            min: 40,
                            max: 100,
                            grid: {
                                color: 'rgba(206, 195, 211, 0.2)',
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10,
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                padding: 10
                            }
                        }
                    },
                    interaction: {
                        mode: 'nearest',
                        axis: 'x',
                        intersect: false
                    }
                }
            });
        });
    </script>
</body></html>
