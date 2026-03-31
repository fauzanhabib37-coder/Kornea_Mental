<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pembayaran Berhasil | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvas-confetti/1.6.0/confetti.browser.min.js"></script>
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.05) 0px, transparent 50%);
        }
        .success-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 25px 50px -12px rgba(46, 0, 82, 0.1), 0 0px 15px rgba(123, 65, 179, 0.05);
        }
        .receipt-cutout {
            position: relative;
        }
        .receipt-cutout::before, .receipt-cutout::after {
            content: '';
            position: absolute;
            top: -12px;
            width: 24px;
            height: 24px;
            background-color: #f8f9ff;
            border-radius: 50%;
            border-bottom: 1px solid rgba(206, 195, 211, 0.3);
        }
        .receipt-cutout::before { left: -12px; border-right: 1px solid rgba(206, 195, 211, 0.3); }
        .receipt-cutout::after { right: -12px; border-left: 1px solid rgba(206, 195, 211, 0.3); }
        .dashed-line {
            border-top: 2px dashed rgba(206, 195, 211, 0.4);
            margin: 0 16px;
        }
    </style>
</head>
<body class="bg-mesh font-body text-on-surface min-h-screen flex flex-col items-center justify-center p-4 py-12 relative overflow-x-hidden">
<!-- Background decorative elements -->
<div class="absolute top-[-10%] left-[-10%] w-[40vw] h-[40vw] rounded-full bg-primary-fixed/40 blur-[100px] pointer-events-none"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-secondary-fixed/40 blur-[100px] pointer-events-none"></div>
<!-- Top Logo Anchor -->
<div class="absolute top-8 left-8 flex items-center gap-3">
<a href="{{ route('home') }}" class="flex items-center gap-3 cursor-pointer">
<img alt="Kornea Mental" class="h-8 w-8 rounded-md" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<span class="font-headline font-bold text-sm text-primary tracking-tight">Kornea Mental</span>
</a>
</div>
<!-- Main Card -->
<main class="w-full max-w-lg z-10 animate-[slideUp_0.6s_ease-out]">
<style>
            @keyframes slideUp { 0% { opacity: 0; transform: translateY(20px); } 100% { opacity: 1; transform: translateY(0); } }
            @keyframes scaleIn { 0% { transform: scale(0); } 60% { transform: scale(1.1); } 100% { transform: scale(1); } }
        </style>
<div class="success-card rounded-3xl overflow-hidden flex flex-col items-center relative">
<!-- Top Section: Success Icon & Header -->
<div class="bg-surface-container-lowest w-full pt-10 pb-8 px-8 flex flex-col items-center text-center">
<div class="relative w-20 h-20 mb-6">
<div class="absolute inset-0 bg-green-100 rounded-full animate-ping opacity-70" style="animation-duration: 3s;"></div>
<div class="w-20 h-20 rounded-full bg-gradient-to-tr from-green-500 to-emerald-400 flex justify-center items-center shadow-lg shadow-green-500/20 relative z-10 animate-[scaleIn_0.5s_ease-out_0.2s_both]">
<span class="material-symbols-outlined text-white text-[40px]">check_circle</span>
</div>
</div>
<h1 class="font-headline font-extrabold text-3xl text-primary mb-2">Pembayaran Berhasil!</h1>
<p class="text-sm text-on-surface-variant max-w-[280px]">
                    Akses lisensi <strong>Institusi Premium</strong> Anda telah diaktifkan secara instan.
                </p>
</div>
<!-- Paper Receipt Cutout Divider -->
<div class="w-full bg-surface-container-low receipt-cutout relative">
<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-white border border-outline-variant/30 px-3 py-1 rounded-full text-[10px] font-bold text-primary tracking-widest uppercase shadow-sm z-20">Resi Elektronik</div>
<div class="dashed-line relative top-[1px]"></div>
</div>
<!-- Middle Section: Receipt Details -->
<div class="bg-surface-container-low w-full px-8 py-10 space-y-6 border-x border-outline-variant/30">
<!-- Order Info -->
<div class="flex justify-between items-end border-b border-outline-variant/20 pb-4">
<div>
<p class="text-[10px] font-bold text-outline tracking-wider uppercase mb-1">ID Transaksi</p>
<p class="font-mono text-xs font-semibold text-primary">#KM-INV-889241</p>
</div>
<div class="text-right">
<p class="text-[10px] font-bold text-outline tracking-wider uppercase mb-1">Tanggal</p>
<p class="text-xs font-semibold text-on-surface-variant">24 Okt 2023, 14:30 WIB</p>
</div>
</div>
<!-- Plan Details -->
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-xl bg-primary-fixed/50 flex items-center justify-center flex-shrink-0 border border-primary-fixed">
<span class="material-symbols-outlined text-primary text-[24px]">workspace_premium</span>
</div>
<div class="flex-1">
<h3 class="font-bold text-sm text-primary leading-tight mb-1">Paket Institusi Terpadu</h3>
<p class="text-xs text-on-surface-variant mb-2">Lisensi Tahunan (Max 500 Siswa/Subjek)</p>
<div class="bg-surface-container/50 rounded-lg p-2.5 flex items-center gap-2">
<span class="material-symbols-outlined text-[14px] text-surface-tint flex-shrink-0">check</span>
<span class="text-[10px] font-medium text-on-surface-variant">Termasuk integrasi LMS &amp; API mentah.</span>
</div>
</div>
</div>
<!-- Price Breakdown -->
<div class="space-y-3 pt-4">
<div class="flex justify-between items-center text-sm">
<span class="text-on-surface-variant font-medium">Subtotal</span>
<span class="font-semibold text-primary">Rp 48.000.000</span>
</div>
<div class="flex justify-between items-center text-sm">
<span class="text-on-surface-variant font-medium">Pajak (PPN 11%)</span>
<span class="font-semibold text-primary">Rp 5.280.000</span>
</div>
<div class="flex justify-between items-center text-sm text-green-600">
<span class="font-bold">Diskon Edukasi (-20%)</span>
<span class="font-bold">- Rp 10.656.000</span>
</div>
</div>
<!-- Total Box -->
<div class="bg-white rounded-xl p-4 flex justify-between items-center border border-surface-container shadow-sm mt-4">
<div>
<p class="text-[10px] font-bold text-primary/60 uppercase tracking-widest mb-1">Total Dibayar</p>
<p class="font-headline font-black text-2xl text-primary">Rp 42.624.000</p>
</div>
<div class="flex items-center gap-1.5 opacity-60 pointer-events-none grayscale">
<div class="w-8 h-5 border border-slate-200 rounded shrink-0 flex items-center justify-center overflow-hidden"><img alt="Visa" class="w-full h-full object-contain" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/200px-Visa_Inc._logo.svg.png"/></div>
<p class="font-mono text-[10px] font-bold text-slate-500">**** 4291</p>
</div>
</div>
</div>
<!-- Bottom Section: Actions -->
<div class="bg-surface-container-lowest w-full px-8 py-8 border-t border-outline-variant/30 text-center flex flex-col gap-4 relative overflow-hidden">
<a class="w-full py-4 bg-primary text-on-primary font-bold rounded-xl shadow-lg hover:shadow-primary/20 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-2" href="{{ route('dashboard') }}">
<span>Masuk ke Dasbor Institusi</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
<button class="text-sm font-bold text-outline hover:text-primary transition-colors py-2 flex items-center justify-center gap-2 mx-auto" onclick="alert('Resi PDF sedang diunduh')">
<span class="material-symbols-outlined text-[18px]">receipt_long</span> Unduh Faktur Pajak (PDF)
            </button>
</div>
</div>
<p class="text-center text-[10px] text-outline mt-8 font-medium">Salinan faktur dan instruksi setup telah dikirimkan ke <strong class="text-on-surface-variant">admin@universitas.ac.id</strong></p>
</main>
<script>
        // Trigger confetti on load
        window.addEventListener('load', function() {
            setTimeout(function() {
                var duration = 3 * 1000;
                var animationEnd = Date.now() + duration;
                var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

                function randomInRange(min, max) {
                    return Math.random() * (max - min) + min;
                }

                var interval = setInterval(function() {
                    var timeLeft = animationEnd - Date.now();

                    if (timeLeft <= 0) {
                        return clearInterval(interval);
                    }

                    var particleCount = 50 * (timeLeft / duration);
                    confetti({
                        ...defaults, particleCount,
                        origin: { x: randomInRange(0.1, 0.3), y: randomInRange(0.2, 0.4) },
                        colors: ['#2e0052', '#7b41b3', '#f0dbff']
                    });
                    confetti({
                        ...defaults, particleCount,
                        origin: { x: randomInRange(0.7, 0.9), y: randomInRange(0.2, 0.4) },
                        colors: ['#2e0052', '#7b41b3', '#4b0082']
                    });
                }, 250);
            }, 600); // slight delay after card animates in
        });
    </script>
</body></html>
