<!DOCTYPE html>
<html class="scroll-smooth" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kornea Mental | Wawasan Pelacakan Mata Berbasis AI</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "tertiary-fixed": "#ffdcc3",
              "inverse-on-surface": "#eff0f6",
              "primary": "#2e0052",
              "outline": "#7d7483",
              "on-surface-variant": "#4c4451",
              "surface-container-high": "#e7e8ee",
              "primary-container": "#4b0082",
              "on-surface": "#191c20",
              "on-tertiary-fixed": "#2f1500",
              "on-secondary": "#ffffff",
              "on-tertiary": "#ffffff",
              "tertiary": "#301600",
              "on-primary": "#ffffff",
              "tertiary-container": "#4f2700",
              "primary-fixed": "#f0dbff",
              "inverse-surface": "#2e3135",
              "surface-container-low": "#f2f3f9",
              "on-tertiary-container": "#c98c5c",
              "secondary-fixed-dim": "#d4bbff",
              "primary-fixed-dim": "#ddb7ff",
              "surface": "#f8f9ff",
              "outline-variant": "#cec3d3",
              "on-tertiary-fixed-variant": "#693c12",
              "on-error": "#ffffff",
              "inverse-primary": "#ddb7ff",
              "surface-tint": "#7b41b3",
              "surface-container": "#eceef3",
              "error": "#ba1a1a",
              "surface-variant": "#e1e2e8",
              "on-secondary-fixed": "#260058",
              "on-primary-fixed": "#2c0050",
              "secondary-container": "#b78efe",
              "secondary-fixed": "#ebdcff",
              "on-secondary-container": "#491d8a",
              "secondary": "#6f48b2",
              "error-container": "#ffdad6",
              "background": "#f8f9ff",
              "surface-container-lowest": "#ffffff",
              "surface-container-highest": "#e1e2e8",
              "on-primary-fixed-variant": "#622599",
              "on-primary-container": "#ba7ef4",
              "surface-bright": "#f8f9ff",
              "tertiary-fixed-dim": "#fbb884",
              "surface-dim": "#d8dae0",
              "on-background": "#191c20",
              "on-error-container": "#93000a",
              "on-secondary-fixed-variant": "#572e99"
            },
            fontFamily: {
              "headline": ["Manrope", "sans-serif"],
              "body": ["Inter", "sans-serif"],
              "label": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; color: #191c20; }
      .font-manrope { font-family: 'Manrope', sans-serif; }
      .glass-card {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
      }
      .luminous-gradient {
        background: linear-gradient(135deg, #2e0052 0%, #4b0082 100%);
      }
      .heatmap-dot {
        filter: blur(25px);
        mix-blend-mode: screen;
      }
      .heatmap-pulse {
        animation: pulse-heatmap 3s infinite;
      }
      @keyframes pulse-heatmap {
        0%, 100% { transform: scale(1); opacity: 0.4; }
        50% { transform: scale(1.2); opacity: 0.7; }
      }
    </style>
</head>
<body class="bg-surface selection:bg-primary-fixed selection:text-primary">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/60 dark:bg-slate-950/60 backdrop-blur-md shadow-[0px_20px_40px_rgba(75,0,130,0.06)]">
<div class="flex justify-between items-center px-8 h-20 w-full max-w-screen-2xl mx-auto">
<div class="text-2xl font-black text-purple-950 dark:text-white tracking-tighter font-manrope flex items-center"><div class="flex items-center gap-3">
<img alt="Kornea Mental Logo" class="h-10 w-auto rounded-lg shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<span>Kornea Mental</span>
</div></div>
<div class="hidden md:flex items-center gap-8 font-manrope font-bold tracking-tight">
<a class="text-purple-700 dark:text-purple-300 border-b-2 border-purple-700 dark:border-purple-300 pb-1" href="{{ route('home') }}">Produk</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-purple-900 dark:hover:text-white transition-colors" href="{{ route('solutions') }}">Solusi</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-purple-900 dark:hover:text-white transition-colors" href="{{ route('pricing') }}">Harga</a>
</div>
<div class="flex items-center gap-4">
<a class="text-slate-600 font-manrope font-bold hover:text-primary transition-colors" href="{{ route('login') }}">Masuk</a>
<a class="luminous-gradient text-on-primary px-6 py-2.5 rounded-lg font-manrope font-bold transition-all hover:shadow-lg hover:shadow-primary/20" href="{{ route('pricing') }}">
                    Mulai
                </a>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden px-8 py-20 md:py-32">
<div class="max-w-screen-2xl mx-auto grid md:grid-cols-2 gap-16 items-center">
<div class="z-10">
<h1 class="text-5xl md:text-7xl font-headline font-extrabold text-primary tracking-tighter leading-[1.1] mb-6">
                        Pahami Pikiran Anda Melalui Mata
                    </h1>
<p class="text-xl md:text-2xl text-on-surface-variant font-body mb-10 max-w-xl leading-relaxed">
                        Wawasan pelacakan mata bertenaga AI untuk analisis kelelahan &amp; fokus. Ungkap pola tersembunyi dari performa kognitif Anda.
                    </p>
<div class="flex flex-wrap gap-4">
<button class="luminous-gradient text-on-primary px-8 py-4 rounded-xl font-manrope font-bold text-lg shadow-xl shadow-primary/10 hover:scale-[1.02] transition-transform">
                            Mulai Analisis
                        </button>
<button class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-xl font-manrope font-bold text-lg hover:bg-surface-container-high transition-colors">
                            Coba Demo
                        </button>
</div>
</div>
<!-- Animated Heatmap/Eye Visual - Enhanced for Prominence -->
<div class="relative flex justify-center items-center scale-110 lg:scale-125">
<div class="relative w-full max-w-md aspect-square">
<img alt="Detail mata manusia jarak dekat" class="w-full h-full object-cover rounded-full border-[12px] border-surface-container-low shadow-[0_0_50px_rgba(75,0,130,0.15)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPbwlsFi4yUxNl4HDGEDqQcLx7HNCvPCh5CpSb3gyvny_XwytquzzeNyoPt4uUtwe4sWz1Y0IDiRjksUjFAIDGUSlsWLkvnz8fsb8PDLexUQvTik8LofkosmvCV0NLVpvJ6T137bqAyRlgqCltE9L2y2-ZjJmCrUvTIp6gNNZrpymLcwYtfzpLtuGYw68yb0B45gVMe480RsgKY9zImcVkW2xLrwH2agfbO6bs-DWXi7TqnyyVNeXKcqK4FdvjY-KGdS8nsJ8E_-0"/>
<!-- Heatmap Overlays - Enlarged & More Dynamic -->
<div class="absolute inset-0 flex justify-center items-center">
<div class="heatmap-dot w-48 h-48 bg-error/50 rounded-full absolute top-1/4 right-1/4 heatmap-pulse"></div>
<div class="heatmap-dot w-36 h-36 bg-surface-tint/60 rounded-full absolute bottom-1/4 left-1/4"></div>
<div class="heatmap-dot w-56 h-56 bg-secondary/40 rounded-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
<div class="heatmap-dot w-24 h-24 bg-yellow-400/30 rounded-full absolute top-1/3 left-1/3 animate-bounce"></div>
</div>
<!-- Glass UI Overlay Elements -->
<div class="absolute -right-12 top-1/4 glass-card p-4 rounded-2xl shadow-xl border border-white/20 z-20">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-surface-tint">visibility</span>
<span class="text-sm font-bold text-primary">Level Fokus: 92%</span>
</div>
</div>
<div class="absolute -left-10 bottom-1/4 glass-card p-4 rounded-2xl shadow-xl border border-white/20 z-20">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-error">analytics</span>
<span class="text-sm font-bold text-primary">Kelelahan Terdeteksi</span>
</div>
</div>
</div>
</div>
</div>
<!-- Abstract background blobs -->
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary-fixed/30 blur-[120px] rounded-full -z-10 translate-x-1/2 -translate-y-1/2"></div>
</section>
<!-- Features Bento Grid -->
<section class="py-24 px-8 bg-surface-container-low">
<div class="max-w-screen-2xl mx-auto">
<div class="mb-16">
<h2 class="text-4xl font-headline font-extrabold text-primary tracking-tight mb-4">Pelacakan yang Direkayasa Secara Presisi</h2>
<p class="text-on-surface-variant font-body max-w-2xl">Menggunakan algoritma estimasi tatapan tingkat klinis untuk memberikan kedalaman yang belum pernah ada sebelumnya pada perilaku manusia dan kesehatan neurologis.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Feature 1 -->
<div class="md:col-span-8 bg-surface-container-lowest p-10 rounded-3xl shadow-sm border-0 flex flex-col justify-between min-h-[400px]">
<div>
<div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">visibility</span>
</div>
<h3 class="text-3xl font-headline font-bold text-primary mb-4">Pemetaan Tatapan Real-time</h3>
<p class="text-on-surface-variant font-body text-lg leading-relaxed max-w-md">Mesin saraf kami memproses gerakan okular pada 120fps, menghasilkan peta spasial-temporal instan dari perhatian pengguna tanpa perangkat keras khusus.</p>
</div>
<div class="mt-8 overflow-hidden rounded-xl h-48 relative">
<img alt="Dashboard visualisasi data" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzM7XTbym7CLY9TAff4F1NGyRsbpWXpa_ZGOTGn4yW-U9lZGwzk77UCweymhZuCiLC1NZ33Ju_E6RAc55IAdDXrjdW8B90U7FUBns6ltbWW_gosYP6SGgCdZQ5MvCS58kNrFOI78FUe-MdFmTIDkWPGEF2D9Rcx534dM4xNRE1OHreQylvrNsqP7VMjdF_5RZXf2EBIiwRe6hEiEhqG9875dF9yyexGL9PElVwnjZhRWR2HwV34CB_543i9ZfxYucFISTG_ohLQsI"/>
</div>
</div>
<!-- Feature 2 -->
<div class="md:col-span-4 bg-primary p-10 rounded-3xl text-on-primary flex flex-col justify-between min-h-[400px]">
<div>
<div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-white">psychology</span>
</div>
<h3 class="text-2xl font-headline font-bold mb-4">Analisis Beban Kognitif</h3>
<p class="text-on-primary/80 font-body leading-relaxed">Kuantifikasi upaya mental dan kelelahan melalui dilatasi pupil dan pola mikro-saccade.</p>
</div>
<div class="pt-6 border-t border-white/10">
<span class="text-xs font-bold tracking-widest uppercase text-on-primary/60">Penerapan Algoritma v4.2</span>
</div>
</div>
<!-- Feature 3 -->
<div class="md:col-span-4 bg-surface-container-highest p-10 rounded-3xl flex flex-col justify-between min-h-[400px]">
<div>
<div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
<span class="material-symbols-outlined text-primary">verified_user</span>
</div>
<h3 class="text-2xl font-headline font-bold text-primary mb-4">Desain Utamakan Privasi</h3>
<p class="text-on-surface-variant font-body leading-relaxed">Komputasi tepi memastikan citra mata tidak pernah meninggalkan perangkat Anda. Kami hanya memproses metadata vektor.</p>
</div>
<button class="mt-6 flex items-center gap-2 font-bold text-primary hover:gap-3 transition-all">
                            Baca protokol kepatuhan <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<!-- Feature 4 -->
<div class="md:col-span-8 bg-secondary-fixed p-10 rounded-3xl flex items-center gap-12 min-h-[400px]">
<div class="flex-1">
<h3 class="text-3xl font-headline font-bold text-on-secondary-fixed mb-4">Integrasi dengan 1 Baris Kode</h3>
<p class="text-on-secondary-fixed-variant font-body text-lg mb-8">Terapkan SDK ringan kami di lingkungan web, seluler, dan VR dalam hitungan menit. Tidak perlu kalibrasi rumit bagi pengguna akhir.</p>
<code class="bg-primary/10 p-4 rounded-xl font-mono text-sm text-primary block border border-primary/20">
                                npm install @korneamental/sdk
                            </code>
</div>
<div class="hidden lg:block w-1/3">
<img alt="Potongan kode pada layar gelap" class="rounded-2xl shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCTIjQMFPBIYuwx3UQep67lx5I8GoUmglNvC_Q86FC8-WKV6sqEAYRTtanUflYcZvaaYthN0WhXU6Zi75bR0HTV6TiI49vPaOisXYMtpuyfdwnF9JP95B-MeXLXNyB-EqohFPtRzNrk8ex-winsmo_FnPM_B0o0C8mk_15hJ8s16hFYcl75T_9FZZlSkNWuxoAhwMN-jLj8ERMnQoNYfMlm7FcRgnqLJN6Rs-QT5BlAO-MRuVXNZ3CNbQZ5uwmZaVYVU2PB_dBNHM"/>
</div>
</div>
</div>
</div>
</section>
<!-- Use Cases Section -->
<section class="py-24 px-8">
<div class="max-w-screen-2xl mx-auto text-center mb-16">
<span class="text-surface-tint font-manrope font-extrabold uppercase tracking-widest text-sm">Aplikasi</span>
<h2 class="text-4xl md:text-5xl font-headline font-extrabold text-primary tracking-tight mt-4">Satu Platform, Kedalaman Tanpa Batas</h2>
</div>
<div class="max-w-screen-xl mx-auto grid md:grid-cols-3 gap-12">
<div class="group">
<div class="mb-8 rounded-3xl overflow-hidden aspect-[4/5] relative">
<img alt="Orang bekerja dengan laptop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcJFrBb7BPcdov2uuOBmWQEtLNRHTruBoYR49n9twJzRye9N3wMLRNJC1PBePceraTiv0Us9nA459QfTsol5wH6DrpaofinAcob5CBod4aF9ZIvAsJLk_12ZJ8q4HnFOHMgEHdFe71gP5HvH-9n_Gq_A1GaLY0NJr2dU6b3GUXkGOm9VkZE2lQ6c5V4mbJRBXIJmu4Sykui1RvRVA2_nvgqBlhhm6gjZrKkCfuhYqWqWrHgPNosoeRdc3WGFlO3KaR7imRiVbX_cI"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
<div class="absolute bottom-8 left-8 text-on-primary">
<h4 class="text-2xl font-headline font-bold">Individu</h4>
<p class="opacity-80">Pelatihan fokus pribadi</p>
</div>
</div>
<p class="text-on-surface-variant leading-relaxed">Optimalkan kebiasaan kerja Anda dengan mengidentifikasi kapan otak Anda memasuki fokus dalam atau mulai lelah. Umpan balik bio real-time.</p>
</div>
<div class="group">
<div class="mb-8 rounded-3xl overflow-hidden aspect-[4/5] relative">
<img alt="Interior kantor modern" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZ8VuDsrr-tRmQeIlGZXdEyggQQtaPnsrGnJ6fsmO0Cu6lzX8mXojvJsRdKBXab6Xjl-wukeEIW2gsePOiQpiTjMVOOHzHTQLmL4WYYx5zbYExRQHOciyUjAABttav-_k7qWx_0nchHPdJN6zh0DZ_fL42pH4YFp_jA8Sy0s2TjBbTbdKMK8EpBitEbBwkCv2ZHRtFhYYqAIc6uKyPDzr2-PgXO3g_8UZqrSSnMmr7i1_lnLig5NUOQtNse3GnmJaJms2n-sQ0nXE"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
<div class="absolute bottom-8 left-8 text-on-primary">
<h4 class="text-2xl font-headline font-bold">Tempat Kerja</h4>
<p class="opacity-80">Kesejahteraan tim &amp; UX</p>
</div>
</div>
<p class="text-on-surface-variant leading-relaxed">Tingkatkan antarmuka perangkat lunak dan kesejahteraan karyawan dengan menganalisis beban kognitif di seluruh alur kerja digital organisasi Anda.</p>
</div>
<div class="group">
<div class="mb-8 rounded-3xl overflow-hidden aspect-[4/5] relative">
<img alt="Laboratorium ilmiah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNuNobkw3BkxJXSbjBpS82JIalqYeHpajkW2ulEcClVJxP5WiJj9QmL2UKi95fW02I14dudozQcAoM87NrBewCkFKpEfqAn-g6szAa8TF7H-FKI1Ry39Zl5cJtnVFZP2JIiogbFd1CJwQ_aayfqfTGH_siDPSUrTnRzxP34G6I4sQKudqxyylbpZLQ5LcDo6daap8jTXQDvFbxTIw60_IQR2vg3zyrS6YyEPee2ug9KEDXWEwt3XrPWS9mfQdlRqGWlaDOjGEodvE"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
<div class="absolute bottom-8 left-8 text-on-primary">
<h4 class="text-2xl font-headline font-bold">Penelitian</h4>
<p class="opacity-80">Studi neurologis</p>
</div>
</div>
<p class="text-on-surface-variant leading-relaxed">Berdayakan penelitian akademis dan medis dengan pengumpulan dan analisis data pelacakan mata yang sangat akurat dan dapat diterapkan dari jarak jauh.</p>
</div>
</div>
</section>
<!-- Pricing Preview -->
<section class="py-24 px-8 bg-slate-50">
<div class="max-w-screen-2xl mx-auto"><!-- Header -->
<div class="text-center mb-16">
<h2 class="font-headline text-4xl md:text-5xl font-extrabold tracking-tight text-primary mb-4">Harga Presisi</h2>
<p class="text-on-surface-variant text-lg max-w-2xl mx-auto">Pilih kedalaman kecerdasan yang dibutuhkan riset Anda. Skalakan dari wawasan individu hingga analisis pandangan mata tingkat institusi.</p>
</div>
<!-- Pricing Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 max-w-4xl mx-auto">
<!-- Individual Tier -->
<div class="glass-card p-10 rounded-3xl flex flex-col border border-primary/10 hover:translate-y-[-4px] transition-transform duration-300">
<div class="mb-8">
<span class="text-primary font-headline font-bold tracking-widest text-xs uppercase bg-primary-fixed px-3 py-1 rounded-full">Explorer</span>
<h3 class="text-3xl font-headline font-extrabold text-on-surface mt-4">Individu</h3>
<div class="mt-4 flex items-baseline gap-1">
<span class="text-4xl font-extrabold text-primary">Rp25rb</span>
<span class="text-on-surface-variant font-medium">/bln</span>
</div>
</div>
<ul class="space-y-4 mb-10 flex-grow">
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Durasi Tanpa Batas</span>
</li>
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Jalur Pandangan Lanjutan</span>
</li>
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Laporan Analitis Lengkap</span>
</li>
<li class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Kolaborasi Multi-pengguna</span>
</li>
</ul>
<a href="{{ route('checkout') }}" class="w-full block text-center py-4 bg-surface-container-highest text-primary font-manrope font-bold rounded-xl hover:bg-surface-container-high transition-all">Tingkatkan Paket</a>
</div>
<!-- Institusi Tier (Featured) -->
<div class="luminous-gradient p-10 rounded-3xl flex flex-col text-on-primary shadow-[0px_30px_60px_rgba(46,0,82,0.15)] relative overflow-hidden transform md:scale-105 z-10">
<div class="absolute top-0 right-0 p-4">
<span class="bg-white/20 backdrop-blur-md px-4 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">Paling Populer</span>
</div>
<div class="mb-8">
<span class="text-secondary-fixed font-headline font-bold tracking-widest text-xs uppercase border border-secondary-fixed/30 px-3 py-1 rounded-full">Analyst</span>
<h3 class="text-3xl font-headline font-extrabold mt-4">Institusi</h3>
<div class="mt-4 flex items-baseline gap-1">
<span class="text-4xl font-extrabold">Rp15rb</span>
<span class="opacity-80 font-medium">/siswa/bln</span>
</div>
</div>
<ul class="space-y-4 mb-10 flex-grow">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-fixed text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Durasi Tanpa Batas</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-fixed text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Jalur Pandangan Lanjutan</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-fixed text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Laporan Analitis Lengkap</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-fixed text-xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span>Kolaborasi Multi-pengguna</span>
</li>
</ul>
<a href="{{ route('checkout') }}" class="w-full block text-center py-4 bg-white text-primary font-manrope font-bold rounded-xl shadow-xl hover:shadow-2xl transition-all">Tingkatkan Paket</a>
</div>
</div>
<!-- Trial Note -->
<div class="max-w-xl mx-auto text-center">
<p class="text-on-surface-variant italic">Kami menawarkan uji coba penuh Institusi selama <strong>7 hari</strong> untuk peneliti baru. Tidak memerlukan kartu kredit untuk memulai analisis pertama Anda.</p>
</div></div>
</section>
</main>
<!-- Footer -->
<footer class="w-full border-t-0 mt-20 bg-slate-50 dark:bg-slate-950">
<div class="flex flex-col md:flex-row justify-between items-center px-12 py-10 w-full">
<div class="mb-8 md:mb-0">
<div class="text-xl font-black text-purple-950 dark:text-white tracking-tighter font-manrope mb-2">
                    Kornea Mental
                </div>
<p class="text-slate-500 dark:text-slate-400 text-xs tracking-wide">© 2024 Kornea Mental AI. Hak cipta dilindungi undang-undang.</p>
</div>
<div class="flex flex-wrap justify-center gap-8 font-inter text-xs tracking-wide">
<a class="text-slate-500 dark:text-slate-400 hover:text-purple-500 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Kebijakan Privasi</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-purple-500 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Syarat Layanan</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-purple-500 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Kepatuhan HIPAA</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-purple-500 underline underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Pengaturan Cookie</a>
</div>
<div class="mt-8 md:mt-0 flex gap-4">
<span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors">language</span>
<span class="material-symbols-outlined text-slate-400 cursor-pointer hover:text-primary transition-colors">help</span>
</div>
</div>
</footer>
</body></html>
