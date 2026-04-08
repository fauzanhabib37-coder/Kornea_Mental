<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Buat Akun | Kornea Mental</title>
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
            <span class="w-6 h-6 rounded-full bg-green-500 text-white flex items-center justify-center text-[11px]">
                <span class="material-symbols-outlined text-[11px]" style="font-variation-settings:'FILL' 1;">check</span>
            </span> Bayar
        </div>
        <div class="w-8 h-px bg-green-400 mx-3"></div>
        <div class="flex items-center gap-2 text-green-700">
            <span class="w-6 h-6 rounded-full bg-green-500 text-white flex items-center justify-center text-[11px]">
                <span class="material-symbols-outlined text-[11px]" style="font-variation-settings:'FILL' 1;">check</span>
            </span> Verifikasi
        </div>
        <div class="w-8 h-px bg-primary/30 mx-3"></div>
        <div class="flex items-center gap-2 text-primary">
            <span class="w-6 h-6 rounded-full bg-primary text-white flex items-center justify-center text-[11px]">3</span>
            Buat Akun
        </div>
    </div>
</nav>

<div class="flex-1 flex items-center justify-center p-6">
<div class="w-full max-w-md fade-up">

    <!-- Header -->
    <div class="text-center mb-8">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center mx-auto mb-4 shadow-lg shadow-primary/20">
            <span class="material-symbols-outlined text-white text-2xl" style="font-variation-settings:'FILL' 1;">person_add</span>
        </div>
        <h1 class="font-headline font-black text-2xl text-primary mb-1">Buat Akun Anda</h1>
        <p class="text-sm text-on-surface-variant">
            Paket <strong class="text-primary capitalize">{{ session('payment.plan', 'individu') }}</strong> telah diverifikasi.
            Lengkapi data di bawah untuk mulai menggunakan Kornea Mental.
        </p>
    </div>

    <!-- Form -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-7">

        @if($errors->any())
        <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-xl text-xs text-error font-medium">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Pre-fill from payment session -->
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="reg-name">Nama Lengkap <span class="text-error">*</span></label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">badge</span>
                    <input id="reg-name" name="name" type="text" value="{{ old('name', session('payment.name')) }}" placeholder="Nama lengkap Anda"
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-low rounded-lg border {{ $errors->has('name') ? 'border-error' : 'border-outline-variant/20' }} focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required/>
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="reg-email">Email <span class="text-error">*</span></label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">mail</span>
                    <input id="reg-email" name="email" type="email" value="{{ old('email', session('payment.email')) }}" placeholder="email@domain.com"
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-low rounded-lg border {{ $errors->has('email') ? 'border-error' : 'border-outline-variant/20' }} focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required/>
                </div>
                @error('email')<p class="text-[10px] text-error font-bold">{{ $message }}</p>@enderror
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="reg-password">Password <span class="text-error">*</span></label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">lock</span>
                    <input id="reg-password" name="password" type="password" placeholder="Min. 8 karakter"
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-low rounded-lg border {{ $errors->has('password') ? 'border-error' : 'border-outline-variant/20' }} focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required minlength="8"/>
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-on-surface-variant tracking-wide" for="reg-password-confirm">Konfirmasi Password <span class="text-error">*</span></label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">lock_reset</span>
                    <input id="reg-password-confirm" name="password_confirmation" type="password" placeholder="Ulangi password"
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-low rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/20 text-sm outline-none"
                        required/>
                </div>
            </div>

            <!-- Terms -->
            <label class="flex items-start gap-3 text-xs text-on-surface-variant cursor-pointer">
                <input type="checkbox" required class="mt-0.5 accent-primary w-4 h-4 shrink-0"/>
                <span>Saya menyetujui <a href="#" class="font-bold text-primary hover:underline">Syarat & Ketentuan</a> dan <a href="#" class="font-bold text-primary hover:underline">Kebijakan Privasi</a> Kornea Mental.</span>
            </label>

            <button type="submit" class="w-full mt-2 py-4 bg-gradient-to-br from-primary to-primary-container text-white font-headline font-bold rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-2 text-base">
                <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">rocket_launch</span>
                Buat Akun & Mulai Sekarang
            </button>
        </form>
    </div>

    <p class="text-center text-xs text-on-surface-variant mt-4">
        Sudah punya akun? <a href="{{ route('login') }}" class="font-bold text-primary hover:underline">Masuk di sini</a>
    </p>
</div>
</div>

</body></html>
