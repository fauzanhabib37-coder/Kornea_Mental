<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Aktivasi API Key | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvas-confetti/1.6.0/confetti.browser.min.js"></script>
<script>
tailwind.config={
    theme:{extend:{colors:{
        "primary":"#2e0052","on-surface-variant":"#4c4451","primary-container":"#4b0082",
        "on-surface":"#191c20","surface-container-low":"#f2f3f9","surface":"#f8f9ff",
        "outline-variant":"#cec3d3","surface-tint":"#7b41b3","error":"#ba1a1a",
        "surface-container-lowest":"#ffffff","primary-fixed":"#f0dbff",
    },fontFamily:{"headline":["Manrope"],"body":["Inter"]}}}
}
</script>
<style>
.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;}
.bg-mesh{background-color:#f8f9ff;background-image:radial-gradient(at 0% 0%,rgba(123,65,179,.1) 0px,transparent 60%),radial-gradient(at 100% 100%,rgba(75,0,130,.06) 0px,transparent 60%);}
@keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}
.fade-up{animation:fadeUp .5s ease-out both;}
.apikey-box{background:linear-gradient(135deg,#1a0030,#2e0052);border:1px solid rgba(255,255,255,.1);border-radius:16px;padding:20px;}
</style>
</head>
<body class="bg-mesh font-body text-on-surface min-h-screen flex flex-col">

<!-- Nav -->
<nav class="h-16 flex items-center px-8 border-b border-outline-variant/15 bg-surface-container-lowest/80 backdrop-blur-md">
    <a href="{{ route('home') }}" class="flex items-center gap-2.5">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" class="h-8 w-8 rounded-md" alt="Logo"/>
        <span class="font-headline font-bold text-sm text-primary">Kornea Mental</span>
    </a>
    <!-- Step indicator -->
    <div class="flex items-center gap-0 mx-auto text-xs font-bold">
        <div class="flex items-center gap-2 text-green-700">
            <span class="w-6 h-6 rounded-full bg-green-500 text-white flex items-center justify-center text-[11px]" style="font-variation-settings:'FILL' 1;">
                <span class="material-symbols-outlined text-[11px]">check</span>
            </span>
            Bayar
        </div>
        <div class="w-8 h-px bg-primary/30 mx-3"></div>
        <div class="flex items-center gap-2 text-primary">
            <span class="w-6 h-6 rounded-full bg-primary text-white flex items-center justify-center text-[11px]">2</span>
            Verifikasi API Key
        </div>
        <div class="w-8 h-px bg-outline-variant/40 mx-3"></div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="w-6 h-6 rounded-full bg-surface-container border border-outline-variant/30 text-on-surface-variant flex items-center justify-center text-[11px]">3</span>
            Buat Akun
        </div>
    </div>
</nav>

<div class="flex-1 flex items-center justify-center p-6">
<div class="w-full max-w-md fade-up">

    <!-- Success Icon -->
    <div class="text-center mb-8">
        <div class="relative w-16 h-16 mx-auto mb-4">
            <div class="absolute inset-0 bg-green-100 rounded-full animate-ping opacity-50" style="animation-duration:3s;"></div>
            <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-green-500 to-emerald-400 flex items-center justify-center shadow-lg relative z-10">
                <span class="material-symbols-outlined text-white text-3xl" style="font-variation-settings:'FILL' 1;">check_circle</span>
            </div>
        </div>
        <h1 class="font-headline font-black text-2xl text-primary mb-1">Pembayaran Berhasil! 🎉</h1>
        <p class="text-sm text-on-surface-variant">
            Halo <strong>{{ session('payment.name') }}</strong>, API Key layanan Kornea Mental Anda telah dibuat.
        </p>
    </div>

    <!-- API Key Display Box -->
    <div class="apikey-box mb-6">
        <p class="text-white/60 text-[10px] uppercase tracking-widest font-bold mb-2 flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings:'FILL' 1;">vpn_key</span>
            API Key Anda — Paket {{ ucfirst(session('payment.plan')) }}
        </p>
        <div class="flex items-center gap-3">
            <code class="flex-1 font-mono text-sm text-yellow-300 font-bold break-all" id="apikey-display">{{ session('payment.apikey') }}</code>
            <button onclick="copyApiKey()" class="flex items-center gap-1 text-xs font-bold text-white/80 hover:text-white px-2.5 py-1.5 border border-white/20 rounded-lg hover:bg-white/10 transition-colors shrink-0" id="copy-btn">
                <span class="material-symbols-outlined text-[14px]">content_copy</span>
            </button>
        </div>
        <p class="text-white/40 text-[10px] mt-3 leading-relaxed">
            ⚠ Simpan API Key ini dengan aman. Gunakan pada langkah berikutnya untuk memverifikasi kepemilikan lisensi Anda.
        </p>
    </div>

    <!-- Order details -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 p-5 mb-6 space-y-2 text-sm">
        <div class="flex justify-between"><span class="text-on-surface-variant">ID Pesanan</span><span class="font-mono font-bold">{{ session('payment.orderId') }}</span></div>
        <div class="flex justify-between"><span class="text-on-surface-variant">Paket</span><span class="font-bold">{{ ucfirst(session('payment.plan')) }}</span></div>
        <div class="flex justify-between"><span class="text-on-surface-variant">Email</span><span class="font-medium">{{ session('payment.email') }}</span></div>
    </div>

    <!-- Verify form -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 p-6">
        <h3 class="font-headline font-bold text-base text-primary mb-1 flex items-center gap-2">
            <span class="material-symbols-outlined text-lg" style="font-variation-settings:'FILL' 1;">security</span>
            Verifikasi API Key
        </h3>
        <p class="text-xs text-on-surface-variant mb-4">Salin API Key di atas, lalu tempel di sini untuk melanjutkan pembuatan akun.</p>

        <form action="{{ route('payment.apikey.verify') }}" method="POST">
            @csrf
            <div class="flex flex-col gap-1.5 mb-4">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide">Masukkan API Key Anda <span class="text-error">*</span></label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">vpn_key</span>
                    <input name="api_key" type="text" placeholder="KM-INDV-XXXXXXXXXXXXXXXX"
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-low rounded-lg border {{ $errors->has('api_key') ? 'border-error ring-2 ring-error/20' : 'border-outline-variant/20' }} focus:ring-2 focus:ring-primary/20 text-sm font-mono outline-none"
                        value="{{ old('api_key') }}" required autocomplete="off"/>
                </div>
                @error('api_key')
                <p class="text-[11px] text-error font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-[13px]" style="font-variation-settings:'FILL' 1;">error</span>
                    {{ $message }}
                </p>
                @enderror
            </div>
            <button type="submit" class="w-full py-3.5 bg-gradient-to-br from-primary to-primary-container text-white font-headline font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">arrow_forward</span>
                Lanjut ke Pembuatan Akun
            </button>
        </form>
    </div>

</div>
</div>

<script>
function copyApiKey() {
    const key = document.getElementById('apikey-display').innerText;
    navigator.clipboard.writeText(key).then(() => {
        const btn = document.getElementById('copy-btn');
        btn.innerHTML = '<span class="material-symbols-outlined text-[14px] text-green-400">check</span>';
        setTimeout(() => btn.innerHTML = '<span class="material-symbols-outlined text-[14px]">content_copy</span>', 2000);
    });
}

// Confetti on load
window.addEventListener('load', () => {
    setTimeout(() => {
        confetti({ particleCount:80, spread:60, origin:{y:0.4}, colors:['#2e0052','#7b41b3','#f0dbff'] });
    }, 400);
});
</script>
</body></html>
