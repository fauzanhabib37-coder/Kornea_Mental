<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil &amp; Pengaturan | Kornea Mental</title>
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
                        "surface-container-low": "#f2f3f9",
                        "surface": "#f8f9ff",
                        "outline-variant": "#cec3d3",
                        "surface-tint": "#7b41b3",
                        "error": "#ba1a1a",
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
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(206, 195, 211, 0.4); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(123, 65, 179, 0.4); }
    </style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-surface font-body text-on-surface h-screen flex flex-col md:flex-row overflow-hidden">
<!-- Sidebar Layout (Reused structure) -->
<aside class="w-20 md:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20 transition-all flex-shrink-0">
<div class="px-2 md:px-6 mb-8 flex justify-center md:justify-start">
<a href="{{ route('home') }}" class="flex items-center gap-3">
<img alt="KM Logo" class="w-10 h-10 rounded-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<div class="hidden md:block">
<h1 class="font-headline font-bold text-sm text-primary leading-tight">Kornea Riset</h1>
<p class="text-[9px] text-outline uppercase tracking-widest font-bold">Pengaturan Akun</p>
</div>
</a>
</div>
<nav class="flex-1 w-full px-3 space-y-2 overflow-y-auto">
<div class="hidden md:block text-[10px] font-bold text-outline uppercase tracking-wider mb-2 px-2">Menu Utama</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
<span class="hidden md:inline text-sm">Kembali ke Dasbor</span>
</a>
<div class="hidden md:block text-[10px] font-bold text-outline uppercase tracking-wider mt-6 mb-2 px-2">Preferensi</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold transition-colors border-l-4 border-primary" href="{{ route('profile') }}">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">person</span>
<span class="hidden md:inline text-sm">Profil Pribadi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">domain</span>
<span class="hidden md:inline text-sm">Profil Institusi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">security</span>
<span class="hidden md:inline text-sm">Keamanan &amp; Akses</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-medium transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">notifications_active</span>
<span class="hidden md:inline text-sm">Notifikasi Web</span>
</a>
</nav>
</aside>
<!-- Main Content -->
<main class="flex-1 h-full flex flex-col overflow-hidden bg-surface">
<!-- Header -->
<header class="h-20 flex flex-col justify-center px-6 lg:px-10 bg-surface-container-lowest border-b border-outline-variant/10 z-10 shrink-0">
<h2 class="font-headline font-extrabold text-2xl text-primary tracking-tight">Profil &amp; Preferensi</h2>
</header>
<!-- Scrollable Area -->
<div class="flex-1 overflow-y-auto p-6 lg:p-10">
<div class="max-w-4xl mx-auto space-y-8">
<!-- Quick Info Banner -->
<div class="bg-gradient-to-r from-primary to-primary-container rounded-2xl p-6 text-white shadow-md flex justify-between items-center bg-cover bg-center overflow-hidden relative">
<div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
<div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="relative z-10 flex items-center gap-6">
<div class="relative w-24 h-24">
<img alt="Dr. Anastasia Profil" class="w-full h-full rounded-full object-cover border-4 border-white/20 shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnmJOjVqapt_OoWGVjT1SX2rajUIYun2JTGuGnwU2vXr813Qd-dO8n6EyWQFRRAIQTYLJm17Ts69ssKXUfvlMr4aIlDAPXTYG2izEvmT47Rlgv8YtkpTQTFZtpopLsv6gAfvph2i9smJYjNZ21MGuT8qnS0UhE7ZOj8rjlG7c-lLrAoEC94ziRMVp6OzlPREqNKElXaRHbzXT7bg8vqtAACyihqLnlT_L1JJm7EFQNdJGYoR9h-elyw_AZWS2cpaU-JRY89YBABts"/>
<button class="absolute bottom-0 right-0 w-8 h-8 bg-surface-tint rounded-full flex items-center justify-center border-2 border-white hover:scale-110 transition-transform cursor-pointer" title="Ubah Foto">
<span class="material-symbols-outlined text-white text-[16px]">edit</span>
</button>
</div>
<div>
<h3 class="font-headline font-black text-2xl leading-none mb-1">Dr. Anastasia Wijaya</h3>
<p class="text-sm font-medium text-white/80">Kepala Riset Kognitif - Universitas Terbuka</p>
<div class="mt-3 flex gap-2">
<span class="text-[10px] font-bold uppercase tracking-widest bg-white/20 px-2 py-1 rounded backdrop-blur-md">Admin Spesialis</span>
<span class="text-[10px] font-bold uppercase tracking-widest bg-green-500/20 text-green-100 border border-green-400/30 px-2 py-1 rounded flex items-center gap-1">
<span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span> Online
                            </span>
</div>
</div>
</div>
<!-- License status widget (desktop only) -->
<div class="hidden md:flex relative z-10 bg-black/20 backdrop-blur-md rounded-xl p-4 border border-white/10 flex-col items-center min-w-[160px]">
<span class="material-symbols-outlined text-yellow-400 text-3xl mb-1" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
<p class="text-[10px] font-bold text-white/70 uppercase tracking-widest">Lisensi Institusi</p>
<p class="font-bold text-sm">Aktif</p>
<p class="text-[10px] text-white/50 mt-1">Berakhir: Okt 2024</p>
</div>
</div>
<!-- Profile Information Form -->
<form class="space-y-8" onsubmit="event.preventDefault(); document.getElementById('toast').classList.remove('hidden'); document.getElementById('toast').classList.add('flex'); setTimeout(() => {document.getElementById('toast').classList.remove('flex'); document.getElementById('toast').classList.add('hidden')}, 3000);">
<!-- Data Pribadi Section -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl shadow-sm overflow-hidden">
<div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
<span class="material-symbols-outlined text-primary/70">badge</span>
<h4 class="font-headline font-bold text-lg text-primary">Informasi Personal</h4>
</div>
<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-1.5">
<label class="text-xs font-bold text-on-surface-variant tracking-wide" for="firstName">Nama Depan</label>
<input class="w-full bg-surface-container p-3 rounded-lg border-none focus:ring-2 focus:ring-primary/30 text-sm placeholder:text-outline" id="firstName" type="text" value="Anastasia"/>
</div>
<div class="flex flex-col gap-1.5">
<label class="text-xs font-bold text-on-surface-variant tracking-wide" for="lastName">Nama Belakang / Gelar</label>
<input class="w-full bg-surface-container p-3 rounded-lg border-none focus:ring-2 focus:ring-primary/30 text-sm placeholder:text-outline" id="lastName" type="text" value="Wijaya, Ph.D."/>
</div>
<div class="flex flex-col gap-1.5 md:col-span-2 relative">
<label class="text-xs font-bold text-on-surface-variant tracking-wide" for="email">Email Utama (Login)</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">email</span>
<input class="w-full bg-surface-container-low p-3 pl-10 rounded-lg border border-outline-variant/20 focus:ring-0 text-sm text-on-surface-variant cursor-not-allowed" disabled="" id="email" type="email" value="anastasia.w@univ-terbuka.ac.id"/>
</div>
<p class="text-[10px] text-outline mt-1 font-medium italic">Hubungi administrator sistem untuk mengubah email log masuk terikat institusi.</p>
</div>
<div class="flex flex-col gap-1.5 md:col-span-2">
<label class="text-xs font-bold text-on-surface-variant tracking-wide" for="role">Jabatan / Peran Akademik</label>
<input class="w-full bg-surface-container p-3 rounded-lg border-none focus:ring-2 focus:ring-primary/30 text-sm placeholder:text-outline" id="role" type="text" value="Kepala Riset Pusat Psikologi Kognitif"/>
</div>
</div>
</div>
<!-- Preferensi Riset Section -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl shadow-sm overflow-hidden">
<div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
<span class="material-symbols-outlined text-primary/70">tune</span>
<h4 class="font-headline font-bold text-lg text-primary">Preferensi Dasbor &amp; Kalibrasi Default</h4>
</div>
<div class="p-6 space-y-6">
<div class="flex flex-col gap-1.5">
<label class="text-xs font-bold text-on-surface-variant tracking-wide">Sensitivitas AI Baseline (Indeks Kelelahan)</label>
<div class="flex items-center gap-4 mt-2">
<span class="text-xs font-medium text-outline">Rendah</span>
<input class="w-full h-2 bg-surface-container rounded-lg appearance-none cursor-pointer accent-surface-tint" max="100" min="0" type="range" value="75"/>
<span class="text-xs font-medium text-surface-tint font-bold">Tinggi</span>
</div>
<p class="text-[10px] text-on-surface-variant leading-relaxed mt-2 w-full md:w-3/4">Sensitivitas tinggi memperketat deteksi penurunan saccade sebelum memicu notifikasi peringatan. Ideal untuk eksperimen membidik detail kecil.</p>
</div>
<hr class="border-outline-variant/20"/>
<div class="flex items-center justify-between">
<div>
<h5 class="text-sm font-bold text-on-surface">Area of Interest (AOI) Otomatis</h5>
<p class="text-[11px] text-on-surface-variant">Aktifkan grid AOI sekunder saat memulai sesi pelacakan langsung.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<div>
<h5 class="text-sm font-bold text-on-surface">Perekaman Sesi (Audio Latar)</h5>
<p class="text-[11px] text-on-surface-variant">Izinkan agen menyertakan sinkronisasi mikrofon subjek. Memerlukan izin izin browser di setiap awal sesi.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- Actions Footer -->
<div class="flex justify-end gap-3 pt-4">
<button class="px-6 py-2.5 rounded-lg border border-outline-variant/40 bg-white text-sm font-bold text-on-surface-variant hover:bg-surface-container transition-colors shadow-sm" type="button">
                        Batalkan Perubahan
                    </button>
<button class="px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-[18px]">save</span> Simpan Konfigurasi
                    </button>
</div>
</form>
</div>
<!-- Global Floating Notification for Form Submission -->
<div class="fixed bottom-6 right-6 bg-green-50 border border-green-200 shadow-lg rounded-xl p-4 hidden items-center justify-between gap-4 z-50 min-w-[300px] animate-[slideUp_0.3s_ease-out]" id="toast">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-green-600" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<div>
<h4 class="font-bold text-sm text-green-800">Perubahan Disimpan</h4>
<p class="text-xs text-green-700">Profil &amp; preferensi terbaru berhasil diunggah ke database.</p>
</div>
</div>
<button class="text-green-500 hover:text-green-800 transition-colors" onclick="document.getElementById('toast').classList.add('hidden')">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
</div>
<style>
            @keyframes slideUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
        </style>
</div>
</main>
</body></html>

