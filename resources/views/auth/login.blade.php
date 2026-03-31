<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Masuk | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
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
              "primary-fixed-dim": "#ddb7ff",
              "surface": "#f8f9ff",
              "outline-variant": "#cec3d3",
              "surface-tint": "#7b41b3",
              "error": "#ba1a1a",
              "secondary-fixed-dim": "#d4bbff",
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
                radial-gradient(at 0% 0%, rgba(123, 65, 179, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(75, 0, 130, 0.1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(46, 0, 82, 0.05) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(186, 126, 244, 0.1) 0px, transparent 50%);
        }
    </style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png"></head>
<body class="bg-mesh font-body text-on-surface min-h-screen flex flex-col items-center justify-center p-6">
<!-- Top Branding Anchor -->
<div class="fixed top-12 flex flex-col items-center gap-2">
<a href="{{ route('home') }}" class="flex items-center gap-3 cursor-pointer">
<img alt="Kornea Mental Logo" class="h-10 w-auto rounded-lg shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
<h1 class="font-headline font-extrabold text-2xl tracking-tighter text-primary">Kornea Mental</h1>
</a>
<p class="font-headline text-on-surface-variant font-medium text-sm tracking-wide">Analisis Visual &amp; Kognitif Terpadu</p>
</div>
<!-- Login Container -->
<main class="w-full max-w-md mt-16 z-10">
<div class="glass-card rounded-xl p-10 shadow-[0px_20px_40px_rgba(75,0,130,0.06)] flex flex-col gap-8">
<!-- Header Text -->
<div class="text-center">
<h2 class="font-headline text-3xl font-bold text-primary tracking-tight mb-2">Selamat Datang Kembali</h2>
<p class="text-on-surface-variant text-sm">Masuk ke sistem pelacakan kognitif Kornea Mental</p>
</div>
<!-- Social Login -->
<button class="flex items-center justify-center gap-3 w-full py-3.5 px-4 bg-surface-container-lowest rounded-lg border border-outline-variant hover:bg-surface-container-low transition-all duration-300 group">
<img alt="Google Logo" class="w-5 h-5" data-alt="Google colorful letter G logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnmJOjVqapt_OoWGVjT1SX2rajUIYun2JTGuGnwU2vXr813Qd-dO8n6EyWQFRRAIQTYLJm17Ts69ssKXUfvlMr4aIlDAPXTYG2izEvmT47Rlgv8YtkpTQTFZtpopLsv6gAfvph2i9smJYjNZ21MGuT8qnS0UhE7ZOj8rjlG7c-lLrAoEC94ziRMVp6OzlPREqNKElXaRHbzXT7bg8vqtAACyihqLnlT_L1JJm7EFQNdJGYoR9h-elyw_AZWS2cpaU-JRY89YBABts"/>
<span class="font-label font-semibold text-on-surface">Lanjutkan dengan Google</span>
</button>
<!-- Divider -->
<div class="relative flex items-center">
<div class="flex-grow border-t border-outline-variant/30"></div>
<span class="flex-shrink mx-4 text-outline text-xs font-medium uppercase tracking-widest">atau email</span>
<div class="flex-grow border-t border-outline-variant/30"></div>
</div>
<!-- Form -->
<form class="flex flex-col gap-5" action="{{ route('dashboard') }}" method="GET">
<div class="flex flex-col gap-2">
<label class="font-label text-xs font-bold text-primary/70 uppercase tracking-widest px-1" for="email">Email Profesional</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">mail</span>
<input class="w-full pl-12 pr-4 py-3.5 bg-surface-container-high/50 border-none rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all placeholder:text-outline/60 text-sm" id="email" placeholder="praktisi@korneamental.ai" type="email" required/>
</div>
</div>
<div class="flex flex-col gap-2">
<div class="flex justify-between items-center px-1">
<label class="font-label text-xs font-bold text-primary/70 uppercase tracking-widest" for="password">Kata Sandi</label>
<a class="text-xs font-semibold text-primary hover:text-surface-tint transition-colors" href="#">Lupa?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-lg">lock</span>
<input class="w-full pl-12 pr-4 py-3.5 bg-surface-container-high/50 border-none rounded-lg focus:ring-2 focus:ring-primary-container/20 focus:bg-surface-container-lowest transition-all placeholder:text-outline/60 text-sm" id="password" placeholder="••••••••" type="password" required/>
</div>
</div>
<button class="w-full py-4 mt-2 bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold rounded-lg shadow-lg shadow-primary/10 hover:shadow-primary/20 hover:scale-[1.01] active:scale-[0.99] transition-all duration-300" type="submit">
                    Masuk ke Konsol
                </button>
</form>
<!-- Footer Link -->
<p class="text-center text-sm text-on-surface-variant">
                Belum punya akun? 
                <a class="font-bold text-primary hover:underline underline-offset-4" href="{{ route('pricing') }}">Minta Akses</a>
</p>
</div>
<!-- Prominent Abstract Cognitive Visual -->
<div class="mt-16 flex justify-center opacity-80 pointer-events-none">
<div class="relative w-64 h-24">
<div class="absolute inset-0 flex items-center justify-center gap-3">
<div class="w-1.5 h-8 bg-primary/40 rounded-full animate-pulse"></div>
<div class="w-1.5 h-14 bg-primary-container/60 rounded-full"></div>
<div class="w-1.5 h-20 bg-primary rounded-full shadow-[0_0_20px_rgba(46,0,82,0.4)]"></div>
<div class="flex flex-col gap-1 items-center">
<div class="w-10 h-10 rounded-full border-2 border-primary/20 flex items-center justify-center">
<div class="w-6 h-6 rounded-full bg-primary/80 animate-ping"></div>
</div>
</div>
<div class="w-1.5 h-20 bg-primary rounded-full shadow-[0_0_20px_rgba(46,0,82,0.4)]"></div>
<div class="w-1.5 h-14 bg-primary-container/60 rounded-full"></div>
<div class="w-1.5 h-8 bg-primary/40 rounded-full animate-pulse"></div>
</div>
</div>
</div>
</main>
<!-- Global Footer Branding & Disclaimer -->
<footer class="fixed bottom-8 w-full max-w-screen-xl px-12 flex flex-col md:flex-row justify-between items-center gap-4 z-10">
<p class="font-label text-xs text-outline tracking-wide">© 2024 Kornea Mental. Hak cipta dilindungi undang-undang.</p>
<div class="flex items-center gap-2 bg-error-container/20 px-4 py-2 rounded-full border border-error/10">
<span class="material-symbols-outlined text-error text-sm" style="font-variation-settings: 'FILL' 1;">warning</span>
<p class="font-label text-[10px] md:text-xs font-semibold text-error/80 tracking-tight uppercase">Penafian: Platform ini bukan alat diagnosis medis mandiri</p>
</div>
<div class="flex gap-6">
<a class="font-label text-xs text-outline hover:text-primary transition-colors" href="#">Keamanan</a>
<a class="font-label text-xs text-outline hover:text-primary transition-colors" href="#">Privasi</a>
</div>
</footer>
<!-- Background Decoration -->
<div class="fixed top-1/4 -right-24 w-96 h-96 bg-primary-fixed-dim/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
<div class="fixed -bottom-24 -left-24 w-96 h-96 bg-secondary-fixed-dim/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
</body></html>

