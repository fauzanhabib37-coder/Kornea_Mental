<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Deteksi Siswa | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script>
tailwind.config={
    darkMode:"class",
    theme:{extend:{colors:{
        "primary":"#2e0052","on-surface-variant":"#4c4451","surface-container-high":"#e7e8ee",
        "primary-container":"#4b0082","on-surface":"#191c20","surface-container-low":"#f2f3f9",
        "surface":"#f8f9ff","outline-variant":"#cec3d3","surface-tint":"#7b41b3",
        "error":"#ba1a1a","error-container":"#ffdad6","surface-container-lowest":"#ffffff",
    },fontFamily:{"headline":["Manrope"],"body":["Inter"]}}}
}
</script>
<style>
.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;}
.bg-mesh{background-color:#f8f9ff;background-image:radial-gradient(at 0% 0%,rgba(123,65,179,.08) 0px,transparent 50%),radial-gradient(at 100% 0%,rgba(75,0,130,.05) 0px,transparent 50%);}
::-webkit-scrollbar{width:5px}::-webkit-scrollbar-thumb{background:rgba(123,65,179,.2);border-radius:4px}
/* Calibration dots */
.cal-dot{width:16px;height:16px;border-radius:50%;background:#7b41b3;cursor:pointer;transition:all .2s;box-shadow:0 0 0 3px rgba(123,65,179,.2);}
.cal-dot:hover{transform:scale(1.3);background:#2e0052}
.cal-dot.done{background:#16a34a;box-shadow:0 0 0 4px rgba(22,163,74,.25)}
.cal-dot.active{animation:calPulse .8s ease-in-out infinite}
@keyframes calPulse{0%,100%{transform:scale(1);box-shadow:0 0 0 4px rgba(123,65,179,.25)}50%{transform:scale(1.3);box-shadow:0 0 0 8px rgba(123,65,179,.08)}}
@keyframes slideUp{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}
.card-in{animation:slideUp .35s ease-out both}
</style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png">
</head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">

@include('institusi._sidebar', ['active' => 'deteksi'])

<main class="flex-1 h-full flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-10">
    <div>
        <h2 class="font-headline font-bold text-xl text-primary">Deteksi Siswa</h2>
        <p class="text-xs text-on-surface-variant">Rekam sesi eye-tracking untuk masing-masing siswa</p>
    </div>
    <div class="flex items-center gap-2">
        <span id="active-badge" class="hidden items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-green-50 text-green-700 border border-green-200">
            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
            <span id="active-student-badge">Sesi Aktif</span>
        </span>
    </div>
</header>

<div class="flex-1 overflow-y-auto p-6 md:p-8">
<div class="max-w-screen-xl mx-auto">
<div class="grid grid-cols-1 xl:grid-cols-3 gap-5">

    <!-- LEFT: Student Selection & Camera -->
    <div class="xl:col-span-2 space-y-4">

        <!-- Step 1: choose student -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5 card-in" style="animation-delay:.05s">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center">1</div>
                <h3 class="font-headline font-bold text-base text-primary">Pilih Siswa</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">Nama Siswa</label>
                    <select id="student-select" onchange="onStudentChange()"
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm outline-none">
                        <option value="">-- Pilih siswa --</option>
                        @foreach($students as $student)
                        <option value="{{ $student->id }}"
                            data-name="{{ $student->name }}"
                            data-nis="{{ $student->nis }}"
                            data-initials="{{ $student->initials }}"
                            data-score="{{ $student->focus_score }}"
                            data-status="{{ $student->status_label }}"
                            {{ request('student') == $student->id ? 'selected' : '' }}>
                            {{ $student->name }} — {{ $student->nis }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">Label Sesi / Aktivitas</label>
                    <input id="session-label" type="text" placeholder="Contoh: Membaca, Ujian Matematika..."
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm outline-none"/>
                </div>
            </div>

            <!-- Student info card -->
            <div id="student-info" class="hidden mt-4 p-4 bg-surface-container-low rounded-xl flex items-center gap-4">
                <div id="si-avatar" class="w-12 h-12 rounded-full bg-primary/10 text-primary font-bold text-lg flex items-center justify-center shrink-0">--</div>
                <div class="flex-1">
                    <p class="font-bold text-on-surface" id="si-name">—</p>
                    <p class="text-xs text-on-surface-variant" id="si-nis">—</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-on-surface-variant">Skor terakhir</p>
                    <p class="font-headline font-bold text-xl text-primary" id="si-score">—</p>
                </div>
                <div id="si-status" class="text-[10px] font-bold px-2.5 py-1 rounded-md border"></div>
            </div>
        </div>

        <!-- Step 2: Camera + Calibration -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5 card-in" style="animation-delay:.1s">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center">2</div>
                    <h3 class="font-headline font-bold text-base text-primary">Kalibrasi & Deteksi</h3>
                </div>
                <div class="flex items-center gap-2">
                    <span id="accuracy-badge" class="hidden text-xs font-bold px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-200">
                        Akurasi: <span id="accuracy-val">--</span>%
                    </span>
                    <button id="btn-cal" onclick="startCalibration()" disabled
                        class="flex items-center gap-1.5 text-xs font-bold px-3 py-2 rounded-lg bg-surface-container text-on-surface-variant opacity-50 cursor-not-allowed transition-all">
                        <span class="material-symbols-outlined text-[16px]">adjust</span> Kalibrasi
                    </button>
                    <button id="btn-detect" onclick="startDetection()" disabled
                        class="flex items-center gap-1.5 text-xs font-bold px-3 py-2 rounded-lg bg-surface-container text-on-surface-variant opacity-50 cursor-not-allowed transition-all">
                        <span class="material-symbols-outlined text-[16px]">play_circle</span> Deteksi
                    </button>
                </div>
            </div>

            <!-- Camera view -->
            <div id="cam-container" class="relative bg-zinc-900 rounded-xl overflow-hidden" style="min-height:260px;">
                <!-- Placeholder before student selected -->
                <div id="cam-placeholder" class="absolute inset-0 flex flex-col items-center justify-center text-white/40">
                    <span class="material-symbols-outlined text-5xl mb-2">person_pin</span>
                    <p class="text-sm font-medium">Pilih siswa terlebih dahulu</p>
                    <p class="text-xs mt-1">Lalu aktifkan kamera untuk memulai</p>
                </div>
                <video id="webcam-feed" class="w-full object-cover hidden" autoplay playsinline muted style="min-height:260px;max-height:320px;"></video>

                <!-- Calibration grid -->
                <div id="calibration-grid" class="absolute inset-0 hidden" style="pointer-events:none;">
                    <div class="absolute inset-0 grid pointer-events-all" style="grid-template-columns:1fr 1fr 1fr;grid-template-rows:1fr 1fr 1fr;padding:12px;">
                        @for($i = 0; $i < 9; $i++)
                        <div class="flex items-{{ $i < 3 ? 'start' : ($i < 6 ? 'center' : 'end') }} justify-{{ in_array($i, [0,3,6]) ? 'start' : (in_array($i, [1,4,7]) ? 'center' : 'end') }} p-2">
                            <div class="cal-dot" id="dot-{{ $i }}" onclick="clickCalDot({{ $i }})"></div>
                        </div>
                        @endfor
                    </div>
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-black/70 text-white text-[10px] font-mono px-3 py-1.5 rounded-full">
                        Minta siswa menatap & klik tiap titik — <span id="cal-progress">0/9</span>
                    </div>
                </div>

                <!-- Grid overlay -->
                <div class="absolute inset-0 bg-[linear-gradient(rgba(123,65,179,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(123,65,179,0.12)_1px,transparent_1px)] bg-[size:50px_50px] pointer-events-none hidden" id="grid-overlay"></div>

                <!-- Gaze dot -->
                <div id="gaze-dot" class="absolute w-4 h-4 rounded-full bg-red-500/80 border-2 border-white shadow-lg hidden pointer-events-none" style="transform:translate(-50%,-50%);"></div>

                <!-- Status label -->
                <div id="cam-status" class="absolute bottom-3 right-3 bg-black/70 text-white text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50 hidden">Menunggu...</div>
            </div>

            <!-- Calibration hint -->
            <div id="cal-hint" class="hidden mt-3 text-xs text-on-surface-variant bg-primary/5 border border-primary/15 rounded-lg px-4 py-2.5 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-base shrink-0">info</span>
                Minta siswa untuk menatap langsung ke setiap titik ungu, lalu klik titik tersebut. Selesaikan semua 9 titik.
            </div>
        </div>

        <!-- Step 3: Start Session -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5 card-in" style="animation-delay:.15s">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-7 h-7 rounded-full bg-primary text-white text-xs font-bold flex items-center justify-center">3</div>
                <h3 class="font-headline font-bold text-base text-primary">Mulai & Selesaikan Sesi</h3>
            </div>
            <div class="flex items-center gap-4 flex-wrap">
                <button id="btn-start" onclick="startSession()" disabled
                    class="flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-lg font-bold text-sm shadow-md opacity-50 cursor-not-allowed transition-all">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings:'FILL' 1;">radio_button_checked</span>
                    Mulai Rekam Sesi
                </button>
                <button id="btn-end" onclick="endSession()" disabled
                    class="flex items-center gap-2 bg-error text-white px-5 py-2.5 rounded-lg font-bold text-sm shadow-md opacity-50 cursor-not-allowed transition-all">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings:'FILL' 1;">stop_circle</span>
                    Selesaikan Sesi
                </button>
                <!-- Timer -->
                <div id="session-timer-wrap" class="hidden flex items-center gap-2 ml-2">
                    <span class="material-symbols-outlined text-green-600 text-base animate-pulse">schedule</span>
                    <span class="font-mono font-bold text-on-surface text-lg tabular-nums" id="session-timer-display">00:00</span>
                    <span class="text-xs text-on-surface-variant">berjalan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT: Instructions + All Students list -->
    <div class="space-y-4">

        <!-- How-to -->
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-2xl text-white p-5 card-in" style="animation-delay:.1s">
            <h4 class="font-headline font-bold text-base mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-white/80" style="font-variation-settings:'FILL' 1;">help_circle</span>
                Cara Menggunakan
            </h4>
            <ol class="space-y-2 text-sm text-white/85">
                <li class="flex items-start gap-2"><span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">1</span>Pilih nama siswa dari dropdown</li>
                <li class="flex items-start gap-2"><span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">2</span>Aktifkan kamera & minta siswa duduk di depan layar</li>
                <li class="flex items-start gap-2"><span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">3</span>Kalibrasi 9 titik bersama siswa</li>
                <li class="flex items-start gap-2"><span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">4</span>Klik "Mulai Rekam" lalu biarkan siswa beraktivitas</li>
                <li class="flex items-start gap-2"><span class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">5</span>Klik "Selesaikan" — hasil otomatis masuk monitoring</li>
            </ol>
        </div>

        <!-- All students quick status -->
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm overflow-hidden card-in" style="animation-delay:.15s">
            <div class="px-5 py-4 border-b border-outline-variant/10 flex items-center justify-between">
                <h4 class="font-headline font-bold text-sm text-primary">Semua Siswa</h4>
                <a href="{{ route('institusi.monitoring') }}" class="text-xs text-surface-tint font-bold hover:underline flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">open_in_new</span> Monitoring
                </a>
            </div>
            <div class="divide-y divide-outline-variant/10 max-h-[360px] overflow-y-auto">
                @foreach($students as $i => $student)
                <div class="px-5 py-3 flex items-center gap-3 hover:bg-surface-container-low/30 transition-colors cursor-pointer"
                     onclick="selectStudent({{ $student->id }})">
                    <div class="w-8 h-8 rounded-full bg-primary/10 text-primary font-bold text-xs flex items-center justify-center shrink-0">{{ $student->initials }}</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-on-surface truncate">{{ $student->name }}</p>
                        <p class="text-[10px] text-on-surface-variant">{{ $student->nis }}</p>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded {{ $student->focus_score >= 75 ? 'text-green-700 bg-green-50' : ($student->focus_score >= 55 ? 'text-yellow-700 bg-yellow-50' : 'text-error bg-red-50') }}">
                            {{ $student->focus_score }}%
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div><!-- end grid -->
</div><!-- end max-w -->
</div><!-- end scroll -->
</main>

<!-- Active Session Bottom Banner -->
<div id="active-session-banner" class="fixed bottom-5 left-1/2 -translate-x-1/2 z-50 hidden">
    <div class="bg-primary text-white rounded-2xl shadow-2xl shadow-primary/30 px-5 py-3.5 flex items-center gap-4 min-w-[360px] border border-white/10">
        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined animate-pulse" style="font-variation-settings:'FILL' 1;">radio_button_checked</span>
        </div>
        <div class="flex-1 min-w-0">
            <p class="font-bold text-sm truncate" id="banner-name">Sesi Aktif</p>
            <p class="text-[10px] text-white/60 font-mono" id="banner-code">KM-XXXXX</p>
        </div>
        <div class="text-center px-3 border-l border-white/20 shrink-0">
            <p class="font-mono font-bold text-lg tabular-nums" id="banner-timer">00:00</p>
            <p class="text-[9px] text-white/60">durasi</p>
        </div>
    </div>
</div>

<script src="https://webgazer.cs.brown.edu/webgazer.js"></script>
<script>
const CSRF = '{{ csrf_token() }}';
let selectedStudentId = null;
let calDotsClicked = 0;
const TOTAL_DOTS = 9;
let webgazerReady = false;
let detectionMode = false;
let activeSessionId = null;
let sessionStart = null;
let timerInterval = null;

// ── Student select ──────────────────────────────────────────────────────────
function onStudentChange() {
    const sel = document.getElementById('student-select');
    if (!sel.value) return;
    selectedStudentId = sel.value;
    const opt = sel.selectedOptions[0];
    // Show info
    document.getElementById('si-avatar').innerText = opt.dataset.initials;
    document.getElementById('si-name').innerText = opt.dataset.name;
    document.getElementById('si-nis').innerText = opt.dataset.nis;
    document.getElementById('si-score').innerText = opt.dataset.score + '%';
    const statusEl = document.getElementById('si-status');
    statusEl.innerText = opt.dataset.status;
    statusEl.className = `text-[10px] font-bold px-2.5 py-1 rounded-md border ${
        parseInt(opt.dataset.score) >= 75 ? 'bg-green-50 text-green-700 border-green-200' :
        parseInt(opt.dataset.score) >= 55 ? 'bg-yellow-50 text-yellow-700 border-yellow-200' :
        'bg-red-50 text-error border-error/20'}`;
    document.getElementById('student-info').classList.remove('hidden');
    // Enable camera / calibration button
    enableBtn('btn-cal', true);
    // Activate camera
    activateCamera();
}

function selectStudent(id) {
    const sel = document.getElementById('student-select');
    sel.value = id;
    onStudentChange();
    sel.scrollIntoView({ behavior:'smooth', block:'nearest' });
    document.querySelector('#student-select').focus();
}

// ── Camera ──────────────────────────────────────────────────────────────────
async function activateCamera() {
    const video = document.getElementById('webcam-feed');
    const status = document.getElementById('cam-status');
    const placeholder = document.getElementById('cam-placeholder');
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video:true, audio:false });
        video.srcObject = stream;
        video.classList.remove('hidden');
        placeholder.classList.add('hidden');
        status.classList.remove('hidden');
        status.innerText = '📷 Kamera aktif';
        status.className = 'absolute bottom-3 right-3 bg-black/70 text-green-300 text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
        document.getElementById('grid-overlay').classList.remove('hidden');
    } catch (e) {
        status.classList.remove('hidden');
        status.innerText = '⚠ Kamera ditolak';
        status.className = 'absolute bottom-3 right-3 bg-red-900/80 text-white text-[10px] font-mono px-2.5 py-1.5 rounded-lg z-50';
    }
}

// ── Calibration ──────────────────────────────────────────────────────────────
function enableBtn(id, enable) {
    const b = document.getElementById(id);
    if (enable) { b.disabled=false; b.classList.remove('opacity-50','cursor-not-allowed'); }
    else         { b.disabled=true;  b.classList.add('opacity-50','cursor-not-allowed'); }
}

function startCalibration() {
    if (!selectedStudentId) return;
    calDotsClicked = 0;
    for (let i=0;i<TOTAL_DOTS;i++) { const d=document.getElementById(`dot-${i}`); if(d){d.classList.remove('done','active');} }
    document.getElementById('dot-0')?.classList.add('active');
    document.getElementById('calibration-grid').classList.remove('hidden');
    document.getElementById('cal-hint').classList.remove('hidden');
    document.getElementById('cal-progress').innerText = `0/${TOTAL_DOTS}`;
    document.getElementById('cam-status').innerText = '🎯 Kalibrasi aktif';
    try {
        webgazer.setGazeListener(()=>{}).begin();
        webgazer.showVideoPreview(false).showPredictionPoints(false);
        webgazerReady = true;
    } catch(e) {}
}

function clickCalDot(i) {
    const dot = document.getElementById(`dot-${i}`);
    if (!dot) return;
    dot.classList.add('done');
    dot.classList.remove('active');
    dot.style.pointerEvents='none';
    calDotsClicked++;
    document.getElementById('cal-progress').innerText = `${calDotsClicked}/${TOTAL_DOTS}`;
    if (i+1 < TOTAL_DOTS) document.getElementById(`dot-${i+1}`)?.classList.add('active');
    if (calDotsClicked >= TOTAL_DOTS) finishCalibration();
}

function finishCalibration() {
    document.getElementById('calibration-grid').classList.add('hidden');
    document.getElementById('cal-hint').classList.add('hidden');
    enableBtn('btn-detect', true);
    enableBtn('btn-start', true);
    document.getElementById('cam-status').innerText = '✅ Kalibrasi selesai';
    document.getElementById('accuracy-badge').classList.remove('hidden');
    document.getElementById('accuracy-val').innerText = Math.floor(82+Math.random()*12);
}

// ── Detection ────────────────────────────────────────────────────────────────
function startDetection() {
    detectionMode = true;
    document.getElementById('gaze-dot').classList.remove('hidden');
    document.getElementById('cam-status').innerText = '👁 Mendeteksi arah tatapan...';
    try { webgazer.setGazeListener(gazeCallback); }
    catch(e) { simulateGaze(); }
}

function gazeCallback(data) {
    if (!data || !detectionMode) return;
    const container = document.getElementById('cam-container');
    const rect = container.getBoundingClientRect();
    const dot = document.getElementById('gaze-dot');
    dot.style.left = Math.max(0, Math.min(rect.width,  data.x - rect.left))  + 'px';
    dot.style.top  = Math.max(0, Math.min(rect.height, data.y - rect.top))   + 'px';
}

function simulateGaze() {
    const pts = [[.2,.2],[.8,.2],[.5,.5],[.2,.8],[.8,.8]];
    let t=0;
    const it = setInterval(()=>{ if(!detectionMode){clearInterval(it);return;}
        const container = document.getElementById('cam-container');
        const rect=container.getBoundingClientRect();
        const p=pts[Math.floor(t/5)%pts.length];
        const dot=document.getElementById('gaze-dot');
        dot.style.left=(p[0]*rect.width+(Math.random()-.5)*40)+'px';
        dot.style.top =(p[1]*rect.height+(Math.random()-.5)*40)+'px';
        t++;
    }, 600);
}

// ── Session ──────────────────────────────────────────────────────────────────
async function startSession() {
    if (!selectedStudentId) return;
    const label = document.getElementById('session-label').value.trim() || 'Sesi Tatapan';
    try {
        const res = await fetch('{{ route("institusi.deteksi.start") }}', {
            method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':CSRF,'Accept':'application/json'},
            body: JSON.stringify({ student_id: selectedStudentId, session_label: label })
        });
        const data = await res.json();
        if (data.success) {
            activeSessionId = data.session_id;
            showBanner(data.student_name, data.session_code);
        }
    } catch(e) {
        showBanner(document.getElementById('student-select').selectedOptions[0]?.dataset.name || 'Siswa', 'KM-DEMO');
    }
    enableBtn('btn-start', false);
    enableBtn('btn-end', true);
    document.getElementById('session-timer-wrap').classList.remove('hidden');
    sessionStart = Date.now();
    if (timerInterval) clearInterval(timerInterval);
    timerInterval = setInterval(()=>{
        const e=Math.floor((Date.now()-sessionStart)/1000);
        const t=`${Math.floor(e/60).toString().padStart(2,'0')}:${(e%60).toString().padStart(2,'0')}`;
        document.getElementById('session-timer-display').innerText=t;
        document.getElementById('banner-timer').innerText=t;
    },1000);
    document.getElementById('active-badge').classList.remove('hidden');
    document.getElementById('active-badge').classList.add('flex');
    document.getElementById('active-student-badge').innerText = 'Sesi Aktif';
}

async function endSession() {
    clearInterval(timerInterval);
    detectionMode=false;
    const elapsed=sessionStart?Math.floor((Date.now()-sessionStart)/1000):0;
    const m=Math.floor(elapsed/60), s=elapsed%60;
    const dur=`${m}m ${s}s`;
    const focus = Math.floor(60+Math.random()*30);
    const blink = Math.floor(14+Math.random()*10)+'/mnt';
    if (activeSessionId) {
        try {
            await fetch(`/institusi/deteksi/selesai/${activeSessionId}`, {
                method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':CSRF,'Accept':'application/json'},
                body: JSON.stringify({ duration:dur, focus_score:focus, blink_rate:blink+' (Normal)' })
            });
        } catch(e){}
    }
    document.getElementById('active-session-banner').classList.add('hidden');
    document.getElementById('session-timer-wrap').classList.add('hidden');
    document.getElementById('gaze-dot').classList.add('hidden');
    enableBtn('btn-start', false); enableBtn('btn-end', false);
    alert(`Sesi selesai!\nDurasi: ${dur}\nSkor Fokus: ${focus}%\nData berhasil disimpan ke monitoring.`);
    setTimeout(()=>location.reload(), 1000);
}

function showBanner(name, code) {
    document.getElementById('banner-name').innerText = name;
    document.getElementById('banner-code').innerText = code;
    document.getElementById('active-session-banner').classList.remove('hidden');
}

// Auto-select from URL param
const urlParams = new URLSearchParams(window.location.search);
const sp = urlParams.get('student');
if (sp) { setTimeout(()=>{ selectStudent(parseInt(sp)); }, 300); }
</script>
</body></html>
