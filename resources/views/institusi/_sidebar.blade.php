<aside class="w-20 lg:w-64 h-full bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col py-6 z-20 flex-shrink-0">
    <div class="px-2 lg:px-6 mb-8 flex justify-center lg:justify-start">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img alt="Logo" class="h-8 w-8 rounded shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc"/>
            <div class="hidden lg:block">
                <p class="font-headline font-bold text-sm text-primary leading-none">Kornea Mental</p>
                <p class="text-[9px] text-outline uppercase tracking-widest font-bold">Portal Institusi</p>
            </div>
        </a>
    </div>
    <nav class="flex-1 w-full px-2 space-y-1 overflow-y-auto">
        <div class="hidden lg:block text-xs font-bold text-outline uppercase tracking-wider mb-2 px-3">Menu Utama</div>

        @php
            $navItems = [
                ['route' => 'institusi.dashboard',  'icon' => 'dashboard',      'label' => 'Dasbor Keseluruhan', 'key' => 'dashboard'],
                ['route' => 'institusi.monitoring', 'icon' => 'monitor_heart',  'label' => 'Monitoring Siswa',   'key' => 'monitoring'],
                ['route' => 'institusi.deteksi',    'icon' => 'visibility',     'label' => 'Deteksi Siswa',      'key' => 'deteksi'],
            ];
        @endphp

        @foreach($navItems as $item)
        @php $isActive = ($active ?? '') === $item['key']; @endphp
        <a href="{{ route($item['route']) }}"
            class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg font-medium group transition-all relative overflow-hidden
                   {{ $isActive ? 'bg-primary/10 text-primary font-bold' : 'text-on-surface-variant hover:bg-surface-container hover:text-primary' }}">
            <span class="material-symbols-outlined text-[20px] {{ $isActive ? '' : 'group-hover:scale-110 transition-transform' }}"
                  @if($isActive) style="font-variation-settings: 'FILL' 1;" @endif>{{ $item['icon'] }}</span>
            <span class="hidden lg:inline text-sm">{{ $item['label'] }}</span>
            @if($isActive)<div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>@endif
        </a>
        @endforeach
    </nav>

    <div class="w-full px-3 mt-auto pt-4 border-t border-outline-variant/20">
        @php $settingsActive = ($active ?? '') === 'settings'; @endphp
        <a href="{{ route('institusi.settings') }}"
            class="flex items-center justify-center lg:justify-start gap-3 px-3 py-2.5 rounded-lg font-medium group transition-all relative overflow-hidden
                   {{ $settingsActive ? 'bg-primary/10 text-primary font-bold' : 'text-on-surface-variant hover:bg-surface-container hover:text-primary' }}">
            <span class="material-symbols-outlined text-[20px] {{ $settingsActive ? '' : 'group-hover:scale-110 transition-transform' }}"
                  @if($settingsActive) style="font-variation-settings: 'FILL' 1;" @endif>settings</span>
            <span class="hidden lg:inline text-sm">Pengaturan</span>
            @if($settingsActive)<div class="absolute left-0 top-0 w-1 h-full bg-primary rounded-r-md"></div>@endif
        </a>
        <div class="mt-2 p-2 hidden lg:flex items-center gap-3 rounded-xl bg-surface-container-low border border-outline-variant/10">
            <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-xs shrink-0">
                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
            </div>
            <div class="flex-1 overflow-hidden">
                <p class="text-xs font-bold text-on-surface truncate">{{ auth()->user()->name }}</p>
                <p class="text-[10px] text-on-surface-variant truncate">{{ auth()->user()->email }}</p>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="ml-auto flex items-center">
                @csrf
                <button type="submit" class="material-symbols-outlined text-outline hover:text-error text-sm cursor-pointer" title="Keluar">logout</button>
            </form>
        </div>
    </div>
</aside>
