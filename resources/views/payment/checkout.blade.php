<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pilih Paket & Pembayaran | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
.plan-card{border:2px solid transparent;cursor:pointer;transition:all .2s;}
.plan-card.selected{border-color:#2e0052;box-shadow:0 0 0 4px rgba(46,0,82,.08);}
</style>
</head>
<body class="bg-mesh font-body text-on-surface min-h-screen">

<!-- Nav -->
<nav class="h-16 flex items-center px-8 border-b border-outline-variant/15 bg-surface-container-lowest/80 backdrop-blur-md">
    <a href="{{ route('home') }}" class="flex items-center gap-2.5">
        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" class="h-8 w-8 rounded-md" alt="Logo"/>
        <span class="font-headline font-bold text-sm text-primary">Kornea Mental</span>
    </a>
    <!-- Step indicator -->
    <div class="flex items-center gap-0 mx-auto text-xs font-bold">
        <div class="flex items-center gap-2 text-primary">
            <span class="w-6 h-6 rounded-full bg-primary text-white flex items-center justify-center text-[11px]">1</span>
            Pilih Paket & Bayar
        </div>
        <div class="w-8 h-px bg-outline-variant/40 mx-3"></div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="w-6 h-6 rounded-full bg-surface-container border border-outline-variant/30 text-on-surface-variant flex items-center justify-center text-[11px]">2</span>
            Verifikasi API Key
        </div>
        <div class="w-8 h-px bg-outline-variant/40 mx-3"></div>
        <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="w-6 h-6 rounded-full bg-surface-container border border-outline-variant/30 text-on-surface-variant flex items-center justify-center text-[11px]">3</span>
            Buat Akun
        </div>
    </div>
</nav>

<div class="max-w-5xl mx-auto px-4 py-12">

    <!-- Heading -->
    <div class="text-center mb-10 fade-up">
        <h1 class="font-headline font-black text-3xl md:text-4xl text-primary mb-2">Pilih Paket Anda</h1>
        <p class="text-on-surface-variant text-sm">Mulai dengan paket yang sesuai kebutuhan. Setelah pembayaran, Anda akan mendapat API Key untuk mengaktifkan akun.</p>
    </div>

    <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
        @csrf

        <!-- Plan Selection -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-8">
            <!-- Individu -->
            <label class="plan-card rounded-2xl p-6 bg-surface-container-lowest border border-outline-variant/20 shadow-sm fade-up {{ ($plan ?? 'individu') === 'individu' ? 'selected' : '' }}" style="animation-delay:.1s">
                <input type="radio" name="plan" value="individu" class="hidden" {{ ($plan ?? 'individu') === 'individu' ? 'checked' : '' }} onchange="selectPlan('individu')"/>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings:'FILL' 1;">person</span>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-primary/60 bg-primary/8 px-2.5 py-0.5 rounded-full border border-primary/20">Explorer</span>
                    </div>
                    <div id="check-individu" class="w-5 h-5 rounded-full border-2 border-primary flex items-center justify-center {{ ($plan ?? 'individu') === 'individu' ? 'bg-primary' : '' }}">
                        @if(($plan ?? 'individu') === 'individu')
                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                        @endif
                    </div>
                </div>
                <h2 class="font-headline font-bold text-xl text-on-surface mb-0.5">Individu</h2>
                <p class="font-headline font-black text-3xl text-primary mb-1">Rp25rb <span class="text-base font-medium text-on-surface-variant">/bulan</span></p>
                <p class="text-xs text-on-surface-variant mb-4">Ideal untuk peneliti, psikolog, dan praktisi individu</p>
                <ul class="space-y-2 text-xs text-on-surface-variant">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-600 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Durasi Sesi Tanpa Batas</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-600 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Jalur Pandangan Lanjutan</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-600 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Laporan Analitik Lengkap</li>
                    <li class="flex items-center gap-2 opacity-40"><span class="material-symbols-outlined text-[16px]">cancel</span> Kolaborasi Multi-pengguna</li>
                </ul>
            </label>

            <!-- Institusi -->
            <label class="plan-card rounded-2xl p-6 shadow-lg shadow-primary/10 fade-up relative overflow-hidden {{ ($plan ?? 'individu') === 'institusi' ? 'selected' : '' }}" style="background:linear-gradient(135deg,#2e0052,#4b0082);animation-delay:.18s">
                <input type="radio" name="plan" value="institusi" class="hidden" {{ ($plan ?? 'individu') === 'institusi' ? 'checked' : '' }} onchange="selectPlan('institusi')"/>
                <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 text-[10px] font-black uppercase tracking-widest px-2.5 py-1 rounded-full">Paling Populer</div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-white/80" style="font-variation-settings:'FILL' 1;">business</span>
                        <span class="text-[11px] font-bold uppercase tracking-widest text-white/70 bg-white/10 px-2.5 py-0.5 rounded-full border border-white/20">Analyst</span>
                    </div>
                    <div id="check-institusi" class="w-5 h-5 rounded-full border-2 border-white flex items-center justify-center {{ ($plan ?? 'individu') === 'institusi' ? 'bg-white' : '' }}">
                        @if(($plan ?? 'individu') === 'institusi')
                        <span class="material-symbols-outlined text-primary text-[12px]">check</span>
                        @endif
                    </div>
                </div>
                <h2 class="font-headline font-bold text-xl text-white mb-0.5">Institusi</h2>
                <p class="font-headline font-black text-3xl text-white mb-1">Rp15rb <span class="text-base font-medium text-white/60">/siswa/bln</span></p>
                <p class="text-xs text-white/60 mb-4">Untuk sekolah, universitas, dan lembaga riset</p>
                <ul class="space-y-2 text-xs text-white/80">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-400 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Durasi Sesi Tanpa Batas</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-400 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Jalur Pandangan Lanjutan</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-400 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Laporan Analitik Lengkap</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-400 text-[16px]" style="font-variation-settings:'FILL' 1;">check_circle</span> Kolaborasi Multi-pengguna</li>
                </ul>
            </label>
        </div>

        <!-- Payment Form -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-7 fade-up" style="animation-delay:.25s">
            <h3 class="font-headline font-bold text-lg text-primary mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">payment</span>
                Detail Pembayaran
            </h3>

            @if($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-xl text-xs text-error font-medium">
                {{ $errors->first() }}
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">Nama Lengkap / Institusi <span class="text-error">*</span></label>
                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Masukkan nama atau nama institusi"
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required/>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">Email Aktif <span class="text-error">*</span></label>
                    <input name="email" type="email" value="{{ old('email') }}" placeholder="email@domain.com"
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required/>
                </div>
            </div>

            <!-- Payment method placeholder -->
            <div class="mb-5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide mb-2 block">Metode Pembayaran</label>
                <div class="grid grid-cols-3 gap-3">
                    <label class="flex flex-col items-center p-3 rounded-xl border-2 border-primary bg-primary/5 cursor-pointer">
                        <input type="radio" name="method" value="transfer" class="hidden" checked/>
                        <span class="material-symbols-outlined text-primary text-2xl" style="font-variation-settings:'FILL' 1;">account_balance</span>
                        <span class="text-[10px] font-bold text-primary mt-1">Transfer Bank</span>
                    </label>
                    <label class="flex flex-col items-center p-3 rounded-xl border border-outline-variant/20 cursor-pointer hover:border-primary/30 transition-colors">
                        <input type="radio" name="method" value="qris" class="hidden"/>
                        <span class="material-symbols-outlined text-on-surface-variant text-2xl">qr_code_2</span>
                        <span class="text-[10px] font-bold text-on-surface-variant mt-1">QRIS</span>
                    </label>
                    <label class="flex flex-col items-center p-3 rounded-xl border border-outline-variant/20 cursor-pointer hover:border-primary/30 transition-colors">
                        <input type="radio" name="method" value="ewallet" class="hidden"/>
                        <span class="material-symbols-outlined text-on-surface-variant text-2xl">wallet</span>
                        <span class="text-[10px] font-bold text-on-surface-variant mt-1">E-Wallet</span>
                    </label>
                </div>
            </div>

            <!-- Order Summary -->
            <div id="order-summary" class="p-4 bg-surface-container-low rounded-xl mb-5 text-sm">
                <p class="text-xs font-bold text-outline uppercase tracking-wider mb-3">Ringkasan Pesanan</p>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-on-surface-variant">Paket</span>
                    <span class="font-bold text-on-surface" id="summary-plan">Individu — Explorer</span>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-on-surface-variant">Harga</span>
                    <span class="font-bold text-on-surface" id="summary-price">Rp 25.000/bulan</span>
                </div>
                <div class="border-t border-outline-variant/20 mt-3 pt-3 flex justify-between items-center">
                    <span class="font-bold text-on-surface">Total (1 bulan)</span>
                    <span class="font-headline font-black text-primary text-lg" id="summary-total">Rp 25.000</span>
                </div>
            </div>

            <button type="submit" class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-white font-headline font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-2 text-base">
                <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">lock</span>
                Bayar Sekarang & Dapatkan API Key
            </button>
            <p class="text-center text-xs text-on-surface-variant mt-3">
                <span class="material-symbols-outlined text-[12px] align-middle mr-0.5" style="font-variation-settings:'FILL' 1;">verified_user</span>
                Pembayaran aman & terenkripsi. Setelah berhasil, Anda akan menerima API Key untuk aktivasi akun.
            </p>
        </div>
    </form>

    <p class="text-center text-xs text-on-surface-variant mt-6">
        Sudah punya akun? <a href="{{ route('login') }}" class="font-bold text-primary hover:underline">Masuk di sini</a>
    </p>
</div>

<script>
const plans = {
    individu:  { label:'Individu — Explorer',   price:'Rp 25.000/bulan', total:'Rp 25.000' },
    institusi: { label:'Institusi — Analyst',   price:'Rp 15.000/siswa/bulan', total:'Rp 15.000 x jumlah siswa' },
};

function selectPlan(plan) {
    document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
    event.currentTarget.closest('.plan-card').classList.add('selected');

    // Update checkmarks (quick DOM update)
    ['individu','institusi'].forEach(p => {
        const el = document.getElementById(`check-${p}`);
        if (!el) return;
        if (p === plan) {
            el.classList.add(p === 'individu' ? 'bg-primary' : 'bg-white');
            el.innerHTML = `<span class="material-symbols-outlined ${p==='individu'?'text-white':'text-primary'} text-[12px]">check</span>`;
        } else {
            el.classList.remove('bg-primary','bg-white');
            el.innerHTML = '';
        }
    });

    document.getElementById('summary-plan').innerText  = plans[plan].label;
    document.getElementById('summary-price').innerText = plans[plan].price;
    document.getElementById('summary-total').innerText = plans[plan].total;

    // Set radio
    document.querySelector(`input[name="plan"][value="${plan}"]`).checked = true;
}

// Init on load
selectPlan('{{ $plan ?? "individu" }}');
</script>
</body></html>
