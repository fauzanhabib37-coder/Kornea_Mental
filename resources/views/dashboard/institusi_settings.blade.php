<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pengaturan Institusi | Kornea Mental</title>
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
                    "surface": "#f8f9ff",
                    "outline-variant": "#cec3d3",
                    "surface-tint": "#7b41b3",
                    "error": "#ba1a1a",
                    "background": "#f8f9ff",
                    "surface-container-lowest": "#ffffff"
                },
                fontFamily: { "headline": ["Manrope"], "body": ["Inter"], "label": ["Inter"] },
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


@include('institusi._sidebar', ['active' => 'settings'])


<!-- ===== MAIN CONTENT ===== -->
<main class="flex-1 h-full flex flex-col overflow-hidden relative">
<!-- Top App Bar -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-30">
    <div>
        <h2 class="font-headline font-bold text-xl text-primary leading-tight">Pengaturan Institusi</h2>
        <p class="text-[10px] font-medium text-outline uppercase tracking-wider">Admin Portal</p>
    </div>
    <button form="settings-form" type="submit" class="flex items-center gap-2 bg-gradient-to-br from-primary to-primary-container text-white px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 transition-all">
        <span class="material-symbols-outlined text-sm">save</span>
        <span class="hidden sm:inline">Simpan</span>
    </button>
</header>

<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-6 md:p-8">
<div class="max-w-3xl mx-auto space-y-6">

<!-- Institution Banner -->
<div class="bg-gradient-to-r from-primary to-primary-container rounded-2xl p-6 text-white shadow-md relative overflow-hidden">
    <div class="absolute -right-16 -top-16 w-56 h-56 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="relative z-10 flex items-center gap-5">
        <div class="w-20 h-20 rounded-full bg-white/20 border-4 border-white/30 flex items-center justify-center font-headline font-black text-3xl text-white shadow-lg shrink-0">
            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
        </div>
        <div>
            <h3 class="font-headline font-black text-2xl leading-tight mb-0.5">{{ auth()->user()->name }}</h3>
            <p class="text-sm text-white/80">{{ auth()->user()->email }}</p>
            <div class="mt-2 flex gap-2 flex-wrap">
                <span class="text-[10px] font-bold uppercase tracking-widest bg-white/20 px-2 py-1 rounded backdrop-blur-md">Admin Institusi</span>
                <span class="text-[10px] font-bold uppercase tracking-widest bg-green-500/20 text-green-100 border border-green-400/30 px-2 py-1 rounded flex items-center gap-1">
                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span> Aktif
                </span>
                <span class="text-[10px] font-bold uppercase tracking-widest bg-yellow-500/20 text-yellow-100 border border-yellow-400/30 px-2 py-1 rounded flex items-center gap-1">
                    <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">workspace_premium</span> Lisensi Institusi
                </span>
            </div>
        </div>
    </div>
</div>

<form id="settings-form" class="space-y-6" onsubmit="event.preventDefault(); showToast();">

    <!-- Profil Institusi -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">domain</span>
            <h4 class="font-headline font-bold text-base text-primary">Profil Institusi</h4>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="instName">Nama Institusi</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="instName" type="text" placeholder="Contoh: SMA Negeri 1 Jakarta / Universitas Indonesia"/>
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="instType">Jenis Institusi</label>
                <select class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="instType">
                    <option>Sekolah Dasar (SD)</option>
                    <option>Sekolah Menengah Pertama (SMP)</option>
                    <option selected>Sekolah Menengah Atas (SMA)</option>
                    <option>Universitas / Perguruan Tinggi</option>
                    <option>Lembaga Riset</option>
                </select>
            </div>
            <div class="flex flex-col gap-1.5 md:col-span-2">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="instAddress">Alamat Institusi</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="instAddress" type="text" placeholder="Jl. Contoh No. 1, Kota, Provinsi"/>
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="adminName">Nama Admin / PIC</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="adminName" type="text" value="{{ auth()->user()->name }}"/>
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="adminEmail">Email Admin (Login)</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">email</span>
                    <input class="w-full bg-surface-container-low p-3 pl-10 rounded-lg border border-outline-variant/20 text-sm text-on-surface-variant cursor-not-allowed" disabled id="adminEmail" type="email" value="{{ auth()->user()->email }}"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengaturan Monitoring -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">monitor_heart</span>
            <h4 class="font-headline font-bold text-base text-primary">Pengaturan Monitoring Siswa</h4>
        </div>
        <div class="p-6 space-y-5">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide">Ambang Batas Risiko Kelelahan (%)</label>
                <div class="flex items-center gap-4 mt-1">
                    <span class="text-xs text-outline">Rendah</span>
                    <input class="w-full h-2 bg-surface-container rounded-lg cursor-pointer accent-surface-tint" max="100" min="0" type="range" value="60"/>
                    <span class="text-xs text-error font-bold">Kritis</span>
                </div>
                <p class="text-[10px] text-on-surface-variant mt-1">Siswa dengan skor fokus di bawah ambang ini akan ditandai berisiko tinggi.</p>
            </div>
            <hr class="border-outline-variant/20"/>
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Notifikasi Alert Real-time</h5>
                    <p class="text-[11px] text-on-surface-variant">Kirim notifikasi saat siswa terdeteksi kelelahan tinggi.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Ekspor Laporan Otomatis (Mingguan)</h5>
                    <p class="text-[11px] text-on-surface-variant">Hasilkan laporan PDF mingguan per kelas secara otomatis.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-sm font-bold text-on-surface">Anonimkan Data Siswa dalam Laporan</h5>
                    <p class="text-[11px] text-on-surface-variant">Sembunyikan identitas siswa saat ekspor data ke pihak luar.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input checked class="sr-only peer" type="checkbox"/>
                    <div class="w-11 h-6 bg-surface-container peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
        </div>
    </div>

    <!-- Lisensi & Paket -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">workspace_premium</span>
            <h4 class="font-headline font-bold text-base text-primary">Lisensi & Paket Berlangganan</h4>
        </div>
        <div class="p-6 space-y-4">
            <div class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl border border-outline-variant/20">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-yellow-500 text-2xl" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                    <div>
                        <p class="font-bold text-sm text-on-surface">Paket Institusi Pro</p>
                        <p class="text-[11px] text-on-surface-variant">Maks. 500 siswa • Analitik lanjutan • Ekspor laporan</p>
                    </div>
                </div>
                <span class="text-xs font-bold text-green-700 bg-green-50 border border-green-200 px-3 py-1 rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">check_circle</span> Aktif
                </span>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-on-surface-variant">Masa berlaku:</span>
                <span class="font-bold text-on-surface">Oktober 2025</span>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-on-surface-variant">Siswa terdaftar:</span>
                <span class="font-bold text-on-surface">48 / 500 siswa</span>
            </div>
            <button type="button" class="w-full mt-2 py-2.5 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary/5 transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">upgrade</span> Perpanjang / Upgrade Paket
            </button>
        </div>
    </div>

    <!-- Keamanan Admin -->
    <div class="bg-surface-container-lowest border border-outline-variant/20 rounded-2xl shadow-sm overflow-hidden">
        <div class="px-6 py-4 bg-surface-container-low/50 border-b border-outline-variant/10 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary/70">security</span>
            <h4 class="font-headline font-bold text-base text-primary">Keamanan Akun Admin</h4>
        </div>
        <div class="p-6 space-y-4">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="cur-pass">Password Saat Ini</label>
                <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="cur-pass" type="password" placeholder="••••••••"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="new-pass">Password Baru</label>
                    <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="new-pass" type="password" placeholder="Min. 8 karakter"/>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="conf-pass">Konfirmasi Password</label>
                    <input class="w-full bg-surface-container p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm" id="conf-pass" type="password" placeholder="Ulangi password baru"/>
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
            <span class="material-symbols-outlined text-[18px]">save</span> Simpan Pengaturan
        </button>
    </div>
</form>

</div>
</div>
</main>

<!-- Toast Notification -->
<div class="fixed bottom-6 right-6 bg-green-50 border border-green-200 shadow-lg rounded-xl p-4 hidden items-center gap-4 z-50 min-w-[300px]" id="toast">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-green-600" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        <div>
            <h4 class="font-bold text-sm text-green-800">Pengaturan Disimpan</h4>
            <p class="text-xs text-green-700">Konfigurasi institusi berhasil diperbarui.</p>
        </div>
    </div>
    <button class="text-green-500 hover:text-green-800 ml-2" onclick="document.getElementById('toast').classList.add('hidden')">
        <span class="material-symbols-outlined text-[16px]">close</span>
    </button>
</div>
<script>
function showToast() {
    const t = document.getElementById('toast');
    t.classList.remove('hidden'); t.classList.add('flex');
    setTimeout(() => { t.classList.remove('flex'); t.classList.add('hidden'); }, 3000);
}
</script>
</body></html>
