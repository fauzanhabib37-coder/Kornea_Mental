<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil & Pengaturan | Kornea Mental</title>
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
    .bg-mesh {
        background-color: #f8f9ff;
        background-image:
            radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.08) 0px, transparent 50%),
            radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(46, 0, 82, 0.03) 0px, transparent 50%);
    }
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: rgba(206, 195, 211, 0.4); border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: rgba(123, 65, 179, 0.4); }
    @keyframes slideUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
</style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">

<!-- ===== SIDEBAR (format identik dengan dasbor & analitik) ===== -->
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
    <!-- Bottom: Profil (active) + user card + logout -->
    <div class="w-full px-3 mt-auto pt-4 border-t border-outline-variant/20">
        <a class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-bold group transition-all relative overflow-hidden" href="{{ route('individu.profile') }}">
            <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">settings</span>
            <span class="hidden lg:inline text-sm">Profil & pengaturan</span>
            <div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>
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

<!-- ===== MAIN CONTENT ===== -->
<main class="flex-1 h-full flex flex-col overflow-hidden relative">
<!-- Top App Bar -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-30">
    <div class="flex items-center gap-3">
        <div>
            <h2 class="font-headline font-bold text-xl text-primary leading-tight">Profil & Pengaturan</h2>
            <p class="text-[10px] font-medium text-outline uppercase tracking-wider">Akun Individu</p>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <button form="profile-form" type="submit" class="flex items-center gap-2 bg-gradient-to-br from-primary to-primary-container text-white px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 transition-all">
            <span class="material-symbols-outlined text-sm">save</span>
            <span class="hidden sm:inline">Simpan</span>
        </button>
    </div>
</header>

<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-6 md:p-8">
<div class="max-w-3xl mx-auto space-y-6">

<!-- User Banner -->
<div class="bg-gradient-to-r from-primary to-primary-container rounded-2xl p-6 text-white shadow-md relative overflow-hidden">
    <div class="absolute -right-16 -top-16 w-56 h-56 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-8 -bottom-8 w-40 h-40 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
    <div class="relative z-10 flex items-center gap-5">
        <!-- Avatar Inisial -->
        <div class="relative w-20 h-20 shrink-0">
            <div class="w-full h-full rounded-full bg-white/20 border-4 border-white/30 flex items-center justify-center font-headline font-black text-3xl text-white shadow-lg">
                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
            </div>
        </div>
        <div>
            <h3 class="font-headline font-black text-2xl leading-tight mb-0.5">{{ auth()->user()->name }}</h3>
            <p class="text-sm text-white/80">{{ auth()->user()->email }}</p>
            <div class="mt-2 flex gap-2 flex-wrap">
                <span class="text-[10px] font-bold uppercase tracking-widest bg-white/20 px-2 py-1 rounded backdrop-blur-md">Pengguna Individu</span>
                <span class="text-[10px] font-bold uppercase tracking-widest bg-green-500/20 text-green-100 border border-green-400/30 px-2 py-1 rounded flex items-center gap-1">
                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span> Online
                </span>
            </div>
        </div>
    </div>
</div>

<form id="profile-form" class="space-y-6" onsubmit="event.preventDefault(); showToast();">

    <!-- Informasi Personal -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">badge</span>
            <h4 class="font-headline font-bold text-base text-primary">Informasi Personal</h4>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="fullName">Nama Lengkap</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="fullName" type="text" value="{{ auth()->user()->name }}"/>
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="role">Peran / Occupasi</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="role" type="text" placeholder="Contoh: Mahasiswa, Peneliti, Profesional"/>
            </div>
            <div class="flex flex-col gap-1.5 md:col-span-2">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="email">Email Utama (Login)</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">email</span>
                    <input class="w-full bg-surface-container-low p-3 pl-10 rounded-lg border border-outline-variant/20 text-sm text-on-surface-variant cursor-not-allowed" disabled id="email" type="email" value="{{ auth()->user()->email }}"/>
                </div>
                <p class="text-[10px] text-outline mt-0.5 italic">Hubungi administrator untuk mengubah email login.</p>
            </div>
            <div class="flex flex-col gap-1.5 md:col-span-2">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="institution">Institusi / Afiliasi</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="institution" type="text" placeholder="Nama universitas, perusahaan, atau mandiri"/>
            </div>
        </div>
    </div>

    <!-- Preferensi Eye-Tracking -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">tune</span>
            <h4 class="font-headline font-bold text-base text-primary">Preferensi Eye-Tracking & Kalibrasi</h4>
        </div>
        <div class="p-6 space-y-5">
            <!-- Sensitivitas -->
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide">Sensitivitas Deteksi Kelelahan</label>
                <div class="flex items-center gap-4 mt-1">
                    <span class="text-xs text-outline">Rendah</span>
                    <input class="w-full h-2 bg-surface-container rounded-lg cursor-pointer accent-surface-tint" max="100" min="0" type="range" value="75"/>
                    <span class="text-xs text-surface-tint font-bold">Tinggi</span>
                </div>
                <p class="text-[10px] text-on-surface-variant mt-1">Sensitivitas lebih tinggi mempercepat notifikasi peringatan kelelahan visual.</p>
            </div>
            <hr class="border-outline-variant/20"/>
            <!-- AOI Otomatis -->
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Area of Interest (AOI) Otomatis</h5>
                    <p class="text-[11px] text-on-surface-variant">Aktifkan grid AOI saat memulai sesi pelacakan langsung.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            <!-- Perekaman Sesi -->
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Perekaman Sesi (Audio Mikrofon)</h5>
                    <p class="text-[11px] text-on-surface-variant">Izinkan sinkronisasi mikrofon saat sesi. Memerlukan izin browser.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
        </div>
    </div>

    <!-- Notifikasi & Privasi -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">notifications</span>
            <h4 class="font-headline font-bold text-base text-primary">Notifikasi & Privasi</h4>
        </div>
        <div class="p-6 space-y-5">
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Notifikasi Kelelahan Visual</h5>
                    <p class="text-[11px] text-on-surface-variant">Tampilkan alert saat indeks kelelahan melampaui ambang batas.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Data Privat — Enkripsi Lokal</h5>
                    <p class="text-[11px] text-on-surface-variant">Semua data sesi disimpan terenkripsi secara lokal di perangkat Anda.</p>
                </div>
                <span class="text-xs font-bold text-green-700 bg-green-50 border border-green-200 px-3 py-1 rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">verified_user</span> Aktif
                </span>
            </div>
        </div>
    </div>

    <!-- Keamanan Akun -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">security</span>
            <h4 class="font-headline font-bold text-base text-primary">Keamanan Akun</h4>
        </div>
        <div class="p-6 space-y-4">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="current-pass">Password Saat Ini</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="current-pass" type="password" placeholder="••••••••"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="new-pass">Password Baru</label>
                    <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="new-pass" type="password" placeholder="Min. 8 karakter"/>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="confirm-pass">Konfirmasi Password</label>
                    <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="confirm-pass" type="password" placeholder="Ulangi password baru"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Action buttons -->
    <div class="flex justify-end gap-3 pb-4">
        <button class="px-6 py-2.5 rounded-lg border border-outline-variant/40 bg-white text-sm font-bold text-on-surface-variant hover:bg-surface-container transition-colors" type="button">
            Batalkan
        </button>
        <button class="px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center gap-2" type="submit">
            <span class="material-symbols-outlined text-[18px]">save</span> Simpan Perubahan
        </button>
    </div>
</form>

</div>
</div>
</main>

<!-- Toast Notification -->
<div class="fixed bottom-6 right-6 bg-green-50 border border-green-200 shadow-lg rounded-xl p-4 hidden items-center gap-4 z-50 min-w-[300px]" id="toast" style="animation: slideUp 0.3s ease-out;">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-green-600" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        <div>
            <h4 class="font-bold text-sm text-green-800">Perubahan Disimpan</h4>
            <p class="text-xs text-green-700">Profil & preferensi berhasil diperbarui.</p>
        </div>
    </div>
    <button class="text-green-500 hover:text-green-800 ml-2" onclick="document.getElementById('toast').classList.add('hidden')">
        <span class="material-symbols-outlined text-[16px]">close</span>
    </button>
</div>

<script>
function showToast() {
    const toast = document.getElementById('toast');
    toast.classList.remove('hidden');
    toast.classList.add('flex');
    setTimeout(() => {
        toast.classList.remove('flex');
        toast.classList.add('hidden');
    }, 3000);
}
</script>
</body></html>
