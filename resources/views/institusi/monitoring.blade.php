<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Monitoring Siswa | Kornea Mental</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script>
tailwind.config = {
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
@keyframes slideIn{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}
.row-anim{animation:slideIn .3s ease-out both;}
</style>
<link rel="icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" type="image/png">
</head>
<body class="bg-mesh font-body text-on-surface h-screen flex overflow-hidden">

@include('institusi._sidebar', ['active' => 'monitoring'])

<main class="flex-1 h-full flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-16 flex items-center justify-between px-8 bg-surface-container-lowest/80 backdrop-blur-md border-b border-outline-variant/10 sticky top-0 z-10">
    <div>
        <h2 class="font-headline font-bold text-xl text-primary">Monitoring Siswa</h2>
        <p class="text-xs text-on-surface-variant">Pantau kondisi & riwayat sesi setiap siswa</p>
    </div>
    <div class="flex items-center gap-2">
        <button onclick="exportReport()" class="flex items-center gap-2 border border-outline-variant/30 px-3 py-2 rounded-lg text-xs font-bold text-on-surface-variant hover:bg-surface-container-low transition-colors">
            <span class="material-symbols-outlined text-sm">download</span> Ekspor
        </button>
        <button onclick="openImportModal()" class="flex items-center gap-2 border border-primary/40 text-primary px-3 py-2 rounded-lg text-xs font-bold hover:bg-primary/5 transition-colors">
            <span class="material-symbols-outlined text-sm">person_add</span> Import Siswa
        </button>
        <a href="{{ route('institusi.deteksi') }}" class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-bold text-sm shadow-md hover:bg-primary-container transition-all">
            <span class="material-symbols-outlined text-sm">visibility</span> Deteksi
        </a>
    </div>
</header>

<div class="flex-1 overflow-y-auto p-6 md:p-8">
<div class="max-w-screen-xl mx-auto space-y-6">

<!-- Alert Banner -->
@if($alert_count > 0)
<div class="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-2xl">
    <span class="material-symbols-outlined text-error text-xl shrink-0 mt-0.5" style="font-variation-settings:'FILL' 1;">warning</span>
    <div class="flex-1">
        <p class="font-bold text-error text-sm">{{ $alert_count }} siswa memerlukan perhatian segera</p>
        <p class="text-xs text-red-700">Skor fokus di bawah ambang aman. Pertimbangkan intervensi atau istirahat.</p>
    </div>
    <div class="flex gap-2">
        @foreach($students->where('has_alert', true) as $s)
        <div class="w-7 h-7 rounded-full bg-error text-white text-[10px] font-bold flex items-center justify-center" title="{{ $s->name }}">{{ $s->initials }}</div>
        @endforeach
    </div>
</div>
@endif

<!-- Student Monitoring Table -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant/10 flex-wrap gap-3">
        <h3 class="font-headline font-bold text-base text-primary">Daftar Siswa & Status Monitoring</h3>
        <!-- Filter -->
        <div class="flex items-center gap-2">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
                <input id="search-input" oninput="filterTable()" type="text" placeholder="Cari nama / NIS..."
                    class="pl-8 pr-3 py-1.5 text-xs bg-surface-container-low border border-outline-variant/20 rounded-lg focus:ring-2 focus:ring-primary/20 outline-none w-44"/>
            </div>
            <select id="status-filter" onchange="filterTable()" class="text-xs bg-surface-container-low border border-outline-variant/20 rounded-lg px-2 py-1.5 outline-none">
                <option value="">Semua Status</option>
                <option value="Optimal">Optimal</option>
                <option value="Fokus Menurun">Fokus Menurun</option>
                <option value="Kelelahan Visual">Kelelahan Visual</option>
            </select>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left" id="student-table">
            <thead>
                <tr class="bg-surface-container-low/50 border-b border-outline-variant/10 text-[10px] font-bold text-outline uppercase tracking-wider">
                    <th class="px-6 py-3">Siswa</th>
                    <th class="px-6 py-3">NIS</th>
                    <th class="px-6 py-3">Skor Fokus</th>
                    <th class="px-6 py-3">Blink Rate</th>
                    <th class="px-6 py-3">Saccade</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/10" id="student-tbody">
                @foreach($students as $i => $student)
                <tr class="hover:bg-surface-container-low/30 transition-colors group row-anim student-row"
                    style="animation-delay:{{ $i * 0.06 }}s"
                    data-name="{{ strtolower($student->name) }}"
                    data-nis="{{ strtolower($student->nis) }}"
                    data-status="{{ $student->status_label }}">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div class="w-9 h-9 rounded-full bg-primary/10 text-primary font-bold text-sm flex items-center justify-center shrink-0">{{ $student->initials }}</div>
                                @if($student->has_alert)
                                <span class="absolute -top-0.5 -right-0.5 w-3 h-3 rounded-full bg-error border-2 border-white"></span>
                                @endif
                            </div>
                            <div>
                                <p class="font-semibold text-on-surface text-sm">{{ $student->name }}</p>
                                <p class="text-[10px] text-on-surface-variant">Terakhir dideteksi: Hari ini</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">{{ $student->nis }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-20 bg-surface-container h-2 rounded-full overflow-hidden">
                                <div class="{{ $student->focus_score >= 75 ? 'bg-green-500' : ($student->focus_score >= 55 ? 'bg-yellow-400' : 'bg-error') }} h-full rounded-full transition-all"
                                     style="width:{{ $student->focus_score }}%"></div>
                            </div>
                            <span class="text-xs font-black {{ $student->focus_score < 55 ? 'text-error' : ($student->focus_score >= 75 ? 'text-green-700' : 'text-yellow-700') }}">
                                {{ $student->focus_score }}%
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs text-on-surface-variant">{{ $student->blink_rate }}</td>
                    <td class="px-6 py-4 text-xs text-on-surface-variant">{{ $student->saccade_status }}</td>
                    <td class="px-6 py-4">
                        <span class="text-[10px] font-bold px-2.5 py-1 rounded-md border {{ $student->status_color }}">
                            {{ $student->status_label }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-1.5">
                            <button onclick="openAnalytics({{ $student->id }}, '{{ addslashes($student->name) }}')"
                                class="flex items-center gap-1 text-xs font-bold text-surface-tint hover:text-primary border border-surface-tint/30 hover:border-primary/30 px-2 py-1.5 rounded-lg transition-all">
                                <span class="material-symbols-outlined text-[13px]" style="font-variation-settings:'FILL' 1;">analytics</span>
                                Analitik
                            </button>
                            <a href="{{ route('institusi.deteksi') }}?student={{ $student->id }}"
                                class="flex items-center gap-1 text-xs font-bold text-on-surface-variant hover:text-primary border border-outline-variant/30 hover:border-primary/30 px-2 py-1.5 rounded-lg transition-all">
                                <span class="material-symbols-outlined text-[13px]">add</span>
                                Deteksi
                            </a>
                            <button onclick="deleteStudent({{ $student->id }}, '{{ addslashes($student->name) }}')"
                                class="flex items-center gap-1 text-xs font-bold text-error/70 hover:text-error border border-error/20 hover:border-error/40 px-2 py-1.5 rounded-lg transition-all">
                                <span class="material-symbols-outlined text-[13px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Activity Log -->
<div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-outline-variant/10 flex items-center gap-2">
        <span class="material-symbols-outlined text-primary/70">history</span>
        <h3 class="font-headline font-bold text-base text-primary">Log Aktivitas Sesi</h3>
    </div>
    <div class="divide-y divide-outline-variant/10">
        @php $detectedStudents = $students->where('status_label', '!=', 'Belum Terdeteksi'); @endphp
        @forelse($detectedStudents as $i => $student)
        <div class="px-6 py-4 flex items-center gap-4 hover:bg-surface-container-low/20 transition-colors row-anim" style="animation-delay:{{ $i * 0.08 }}s">
            <div class="w-2 h-2 rounded-full shrink-0 {{ $student->has_alert ? 'bg-error' : 'bg-green-500' }}"></div>
            <div class="w-8 h-8 rounded-full bg-primary/10 text-primary font-bold text-xs flex items-center justify-center shrink-0">{{ $student->initials }}</div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-on-surface">{{ $student->name }}</p>
                <p class="text-xs text-on-surface-variant truncate">
                    Sesi selesai — Fokus: <span class="font-bold {{ $student->focus_score < 55 ? 'text-error' : 'text-green-700' }}">{{ $student->focus_score }}%</span>
                    · Blink rate: {{ $student->blink_rate }} · Status: {{ $student->status_label }}
                </p>
            </div>
            <span class="text-[10px] text-on-surface-variant font-mono shrink-0">Hari ini, {{ sprintf('%02d', 8 + $i) }}:{{ sprintf('%02d', 30 + $i * 7) }}</span>
            @if($student->has_alert)
            <span class="text-[10px] font-bold px-2 py-1 rounded bg-red-50 text-error border border-red-200 shrink-0">PERLU PERHATIAN</span>
            @endif
        </div>
        @empty
        <div class="px-6 py-10 text-center">
            <span class="material-symbols-outlined text-4xl text-outline/40 mb-2 block">manage_search</span>
            <p class="text-sm text-on-surface-variant">Belum ada sesi deteksi yang selesai.</p>
            <a href="{{ route('institusi.deteksi') }}" class="mt-3 inline-flex items-center gap-1.5 text-xs font-bold text-primary hover:underline underline-offset-2">
                <span class="material-symbols-outlined text-[14px]">add_circle</span> Mulai Deteksi Siswa
            </a>
        </div>
        @endforelse
    </div>
</div>

<!-- Informasi Tambahan -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5">
        <div class="flex items-center gap-2 mb-3">
            <span class="material-symbols-outlined text-primary/70 text-xl" style="font-variation-settings:'FILL' 1;">info</span>
            <h4 class="font-headline font-bold text-sm text-primary">Tentang Monitoring</h4>
        </div>
        <p class="text-xs text-on-surface-variant leading-relaxed">Data diperbarui setiap kali sesi deteksi diselesaikan. Pastikan setiap siswa menyelesaikan minimal 1 sesi per hari untuk akurasi data.</p>
    </div>
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5">
        <div class="flex items-center gap-2 mb-3">
            <span class="material-symbols-outlined text-yellow-600 text-xl" style="font-variation-settings:'FILL' 1;">tips_and_updates</span>
            <h4 class="font-headline font-bold text-sm text-primary">Rekomendasi</h4>
        </div>
        <ul class="text-xs text-on-surface-variant space-y-1.5">
            <li class="flex items-start gap-1.5"><span class="material-symbols-outlined text-[12px] mt-0.5 text-yellow-500">arrow_right</span>Siswa dengan skor &lt;55% disarankan istirahat 10 menit</li>
            <li class="flex items-start gap-1.5"><span class="material-symbols-outlined text-[12px] mt-0.5 text-yellow-500">arrow_right</span>Blink rate &lt;15/mnt = indikasi kelelahan mata tinggi</li>
            <li class="flex items-start gap-1.5"><span class="material-symbols-outlined text-[12px] mt-0.5 text-yellow-500">arrow_right</span>Lakukan deteksi ulang setelah 30 menit belajar</li>
        </ul>
    </div>
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-sm p-5">
        <div class="flex items-center gap-2 mb-3">
            <span class="material-symbols-outlined text-green-600 text-xl" style="font-variation-settings:'FILL' 1;">bar_chart</span>
            <h4 class="font-headline font-bold text-sm text-primary">Statistik Hari Ini</h4>
        </div>
        <div class="space-y-2">
            <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Sesi dilakukan</span><span class="font-bold">{{ $total_students }}</span></div>
            <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Rata-rata fokus</span><span class="font-bold text-surface-tint">{{ $avg_focus }}%</span></div>
            <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Perlu perhatian</span><span class="font-bold text-error">{{ $alert_count }} siswa</span></div>
        </div>
    </div>
</div>

</div><!-- end max-w -->
</div><!-- end scroll -->
</main>

<!-- Analytics Modal -->
<div id="analytics-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="closeAnalytics()"></div>
    <div class="relative z-10 bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">
        <div class="bg-gradient-to-r from-primary to-primary-container px-6 py-5 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/70 text-xs">Hasil Analitik — </p>
                    <h3 class="font-headline font-bold text-lg" id="modal-student-name">Nama Siswa</h3>
                </div>
                <button onclick="closeAnalytics()" class="text-white/70 hover:text-white">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
        </div>
        <div class="p-6" id="modal-analytics-content">
            <!-- Content generated by JS -->
        </div>
        <div class="px-6 pb-6 flex gap-3">
            <button onclick="closeAnalytics()" class="flex-1 py-2.5 rounded-lg border border-outline-variant/30 text-sm font-bold text-on-surface-variant hover:bg-surface-container-low transition-colors">Tutup</button>
            <a href="{{ route('individu.analytics') }}" class="flex-1 py-2.5 rounded-lg bg-primary text-white text-sm font-bold text-center hover:bg-primary-container transition-colors">Buka Halaman Analitik</a>
        </div>
    </div>
</div>

<!-- ===== IMPORT SISWA MODAL ===== -->
<div id="import-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="closeImportModal()"></div>
    <div class="relative z-10 bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-primary to-primary-container px-6 py-5 text-white">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">group_add</span>
                    <h3 class="font-headline font-bold text-lg">Import Data Siswa</h3>
                </div>
                <button onclick="closeImportModal()" class="text-white/70 hover:text-white"><span class="material-symbols-outlined">close</span></button>
            </div>
            <p class="text-white/70 text-xs mt-1">Tambah siswa secara manual atau unggah file CSV</p>
        </div>

        <!-- Tabs -->
        <div class="flex border-b border-outline-variant/20">
            <button id="tab-manual" onclick="switchTab('manual')" class="flex-1 py-3 text-sm font-bold text-primary border-b-2 border-primary transition-all">
                <span class="material-symbols-outlined text-sm align-middle mr-1">edit_note</span> Manual
            </button>
            <button id="tab-csv" onclick="switchTab('csv')" class="flex-1 py-3 text-sm font-bold text-on-surface-variant border-b-2 border-transparent hover:text-primary transition-all">
                <span class="material-symbols-outlined text-sm align-middle mr-1">upload_file</span> Upload CSV
            </button>
        </div>

        <!-- Tab: Manual -->
        <div id="panel-manual" class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">Nama Lengkap <span class="text-error">*</span></label>
                    <input id="inp-name" type="text" placeholder="Contoh: Siti Rahayu"
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm outline-none"/>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-on-surface-variant tracking-wide">NIS / Nomor Siswa <span class="text-error">*</span></label>
                    <input id="inp-nis" type="text" placeholder="Contoh: 190205"
                        class="w-full bg-surface-container-low p-3 rounded-lg border border-outline-variant/20 focus:ring-2 focus:ring-primary/30 text-sm outline-none"/>
                </div>
            </div>
            <div id="manual-error" class="hidden text-xs text-error bg-red-50 border border-red-200 rounded-lg px-3 py-2"></div>
            <div class="flex gap-3">
                <button onclick="closeImportModal()" class="flex-1 py-2.5 rounded-lg border border-outline-variant/30 text-sm font-bold text-on-surface-variant hover:bg-surface-container-low transition-colors">Batal</button>
                <button id="btn-save-manual" onclick="submitManual()" class="flex-1 py-2.5 rounded-lg bg-primary text-white text-sm font-bold shadow-md hover:bg-primary-container transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[17px]">person_add</span> Tambah Siswa
                </button>
            </div>
        </div>

        <!-- Tab: CSV -->
        <div id="panel-csv" class="hidden p-6 space-y-4">
            <!-- Format hint -->
            <div class="p-3 bg-primary/5 border border-primary/15 rounded-xl text-xs">
                <p class="font-bold text-primary mb-1.5 flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[14px]">info</span> Format File CSV
                </p>
                <p class="text-on-surface-variant mb-2">File harus berformat <code class="bg-surface-container px-1 rounded">.csv</code> dengan kolom berikut:</p>
                <div class="bg-surface-container font-mono text-[10px] px-3 py-2 rounded-lg border border-outline-variant/20">
                    <p class="text-on-surface-variant">Nama,NIS</p>
                    <p>Siti Rahayu,190205</p>
                    <p>Budi Prasetyo,190206</p>
                    <p>Anisa Putri,190207</p>
                </div>
                <button onclick="downloadTemplate()" class="mt-2 flex items-center gap-1 text-surface-tint font-bold hover:underline underline-offset-2">
                    <span class="material-symbols-outlined text-[13px]">download</span> Unduh Template CSV
                </button>
            </div>

            <!-- Dropzone -->
            <div id="dropzone" onclick="document.getElementById('csv-file-input').click()"
                class="border-2 border-dashed border-primary/30 rounded-xl p-6 text-center cursor-pointer hover:border-primary/60 hover:bg-primary/5 transition-all relative">
                <span class="material-symbols-outlined text-4xl text-primary/40 mb-2 block">upload_file</span>
                <p class="text-sm font-bold text-on-surface">Seret & lepas file CSV di sini</p>
                <p class="text-xs text-on-surface-variant mt-1">atau klik untuk memilih file (maks. 2 MB)</p>
                <p id="selected-filename" class="mt-2 text-xs font-bold text-primary hidden"></p>
                <input type="file" id="csv-file-input" accept=".csv,.txt" class="hidden" onchange="onFileSelected(this)"/>
            </div>

            <div id="csv-error" class="hidden text-xs text-error bg-red-50 border border-red-200 rounded-lg px-3 py-2"></div>
            <div id="csv-success" class="hidden text-xs text-green-800 bg-green-50 border border-green-200 rounded-lg px-3 py-2"></div>

            <div class="flex gap-3">
                <button onclick="closeImportModal()" class="flex-1 py-2.5 rounded-lg border border-outline-variant/30 text-sm font-bold text-on-surface-variant hover:bg-surface-container-low transition-colors">Batal</button>
                <button id="btn-upload-csv" onclick="submitCSV()" class="flex-1 py-2.5 rounded-lg bg-primary text-white text-sm font-bold shadow-md hover:bg-primary-container transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[17px]">cloud_upload</span> Impor CSV
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast -->
<div id="global-toast" class="fixed bottom-5 right-5 z-[60] hidden items-center gap-3 px-4 py-3 rounded-xl border shadow-lg text-sm font-medium">
    <span class="material-symbols-outlined text-base" id="toast-icon" style="font-variation-settings:'FILL' 1;"></span>
    <p id="toast-msg"></p>
    <button onclick="document.getElementById('global-toast').classList.add('hidden')" class="ml-2 opacity-60 hover:opacity-100">
        <span class="material-symbols-outlined text-sm">close</span>
    </button>
</div>

<script>
const CSRF = '{{ csrf_token() }}';

// ── Modal open/close ──────────────────────────────────────────────────────────
function openImportModal()  { const m=document.getElementById('import-modal'); m.classList.remove('hidden'); m.classList.add('flex'); switchTab('manual'); }
function closeImportModal() { const m=document.getElementById('import-modal'); m.classList.add('hidden'); m.classList.remove('flex'); resetForms(); }

function switchTab(tab) {
    ['manual','csv'].forEach(t => {
        document.getElementById(`panel-${t}`).classList.toggle('hidden', t !== tab);
        const btn = document.getElementById(`tab-${t}`);
        btn.classList.toggle('text-primary', t === tab);
        btn.classList.toggle('border-primary', t === tab);
        btn.classList.toggle('text-on-surface-variant', t !== tab);
        btn.classList.toggle('border-transparent', t !== tab);
    });
}

function resetForms() {
    document.getElementById('inp-name').value = '';
    document.getElementById('inp-nis').value  = '';
    document.getElementById('manual-error').classList.add('hidden');
    document.getElementById('csv-error').classList.add('hidden');
    document.getElementById('csv-success').classList.add('hidden');
    document.getElementById('selected-filename').classList.add('hidden');
    document.getElementById('csv-file-input').value = '';
}

// ── Manual add ───────────────────────────────────────────────────────────────
async function submitManual() {
    const name = document.getElementById('inp-name').value.trim();
    const nis  = document.getElementById('inp-nis').value.trim();
    const errEl = document.getElementById('manual-error');
    errEl.classList.add('hidden');

    if (!name || !nis) { errEl.innerText = 'Nama dan NIS wajib diisi.'; errEl.classList.remove('hidden'); return; }

    setBtnLoading('btn-save-manual', true, 'Menyimpan...');
    try {
        const res  = await fetch('{{ route("institusi.siswa.tambah") }}', {
            method:'POST', headers:{'Content-Type':'application/json','X-CSRF-TOKEN':CSRF,'Accept':'application/json'},
            body: JSON.stringify({ name, nis })
        });
        const data = await res.json();
        if (data.success) {
            closeImportModal();
            showToast(data.message, 'success');
            setTimeout(() => location.reload(), 1200);
        } else {
            errEl.innerText = data.message || 'Terjadi kesalahan.'; errEl.classList.remove('hidden');
        }
    } catch(e) { errEl.innerText = 'Koneksi gagal. Coba lagi.'; errEl.classList.remove('hidden'); }
    setBtnLoading('btn-save-manual', false, '<span class="material-symbols-outlined text-[17px]">person_add</span> Tambah Siswa');
}

// ── CSV upload ────────────────────────────────────────────────────────────────
function onFileSelected(input) {
    if (!input.files[0]) return;
    const fname = input.files[0].name;
    const el = document.getElementById('selected-filename');
    el.innerText = `📄 ${fname}`;
    el.classList.remove('hidden');
}

async function submitCSV() {
    const fileInput = document.getElementById('csv-file-input');
    const errEl = document.getElementById('csv-error');
    const okEl  = document.getElementById('csv-success');
    errEl.classList.add('hidden'); okEl.classList.add('hidden');

    if (!fileInput.files[0]) { errEl.innerText='Pilih file CSV terlebih dahulu.'; errEl.classList.remove('hidden'); return; }

    setBtnLoading('btn-upload-csv', true, 'Mengimpor...');
    const formData = new FormData();
    formData.append('csv_file', fileInput.files[0]);
    formData.append('_token', CSRF);

    try {
        const res  = await fetch('{{ route("institusi.siswa.impor") }}', { method:'POST', body:formData });
        const data = await res.json();
        if (data.success) {
            okEl.innerText = `✅ ${data.message}`; okEl.classList.remove('hidden');
            showToast(data.message, 'success');
            setTimeout(() => location.reload(), 1800);
        } else {
            errEl.innerText = data.message; errEl.classList.remove('hidden');
        }
    } catch(e) { errEl.innerText = 'Upload gagal. Coba lagi.'; errEl.classList.remove('hidden'); }
    setBtnLoading('btn-upload-csv', false, '<span class="material-symbols-outlined text-[17px]">cloud_upload</span> Impor CSV');
}

// ── Delete student ────────────────────────────────────────────────────────────
async function deleteStudent(id, name) {
    if (!confirm(`Hapus siswa "${name}" dari daftar?`)) return;
    try {
        const res  = await fetch(`/institusi/siswa/${id}`, {
            method:'DELETE', headers:{'X-CSRF-TOKEN':CSRF,'Accept':'application/json'}
        });
        const data = await res.json();
        if (data.success) { showToast(data.message,'success'); setTimeout(()=>location.reload(),1000); }
        else showToast(data.message,'error');
    } catch(e) { showToast('Gagal menghapus siswa.','error'); }
}

// ── Template download ─────────────────────────────────────────────────────────
function downloadTemplate() {
    const csv = 'Nama,NIS\nContoh Siswa Satu,190201\nContoh Siswa Dua,190202';
    const a = document.createElement('a');
    a.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
    a.download = 'template_siswa_kornea.csv';
    a.click();
}

// ── Drag & drop on dropzone ───────────────────────────────────────────────────
const dz = document.getElementById('dropzone');
dz.addEventListener('dragover', e => { e.preventDefault(); dz.classList.add('border-primary','bg-primary/5'); });
dz.addEventListener('dragleave', () => dz.classList.remove('border-primary','bg-primary/5'));
dz.addEventListener('drop', e => {
    e.preventDefault(); dz.classList.remove('border-primary','bg-primary/5');
    const file = e.dataTransfer.files[0];
    if (file) { document.getElementById('csv-file-input').files = e.dataTransfer.files; onFileSelected(document.getElementById('csv-file-input')); }
});

// ── Helpers ───────────────────────────────────────────────────────────────────
function setBtnLoading(id, loading, html) {
    const b = document.getElementById(id);
    if (loading) { b.disabled=true; b.innerHTML=`<span class="material-symbols-outlined text-[15px] animate-spin">autorenew</span> ${html}`; }
    else { b.disabled=false; b.innerHTML=html; }
}

function showToast(msg, type='success') {
    const t   = document.getElementById('global-toast');
    const ico = document.getElementById('toast-icon');
    const txt = document.getElementById('toast-msg');
    t.className = `fixed bottom-5 right-5 z-[60] flex items-center gap-3 px-4 py-3 rounded-xl border shadow-lg text-sm font-medium ${
        type==='success' ? 'bg-green-50 border-green-200 text-green-800' : 'bg-red-50 border-red-200 text-red-800'}`;
    ico.innerText = type==='success' ? 'check_circle' : 'error';
    txt.innerText = msg;
    t.classList.remove('hidden');
    setTimeout(() => t.classList.add('hidden'), 4000);
}
// ── Filter table ──────────────────────────────────────────────────────────────
function filterTable() {
    const q = document.getElementById('search-input').value.toLowerCase();
    const s = document.getElementById('status-filter').value;
    document.querySelectorAll('.student-row').forEach(row => {
        const matchQ = !q || row.dataset.name.includes(q) || row.dataset.nis.includes(q);
        const matchS = !s || row.dataset.status === s;
        row.style.display = (matchQ && matchS) ? '' : 'none';
    });
}

// ── Analytics modal ───────────────────────────────────────────────────────────
const studentData = @json($students->keyBy('id'));

function openAnalytics(id, name) {
    const s = studentData[id];
    if (!s) return;
    document.getElementById('modal-student-name').innerText = name;
    const focusColor = s.focus_score >= 75 ? '#22c55e' : s.focus_score >= 55 ? '#eab308' : '#ba1a1a';
    document.getElementById('modal-analytics-content').innerHTML = `
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div class="text-center p-4 bg-surface-container-low rounded-xl">
                <p class="text-xs text-on-surface-variant mb-1">Skor Fokus</p>
                <p class="font-headline font-black text-3xl" style="color:${focusColor}">${s.focus_score}%</p>
            </div>
            <div class="text-center p-4 bg-surface-container-low rounded-xl">
                <p class="text-xs text-on-surface-variant mb-1">Blink Rate</p>
                <p class="font-headline font-black text-xl text-on-surface">${s.blink_rate}</p>
            </div>
            <div class="text-center p-4 bg-surface-container-low rounded-xl">
                <p class="text-xs text-on-surface-variant mb-1">Saccade</p>
                <p class="font-headline font-black text-xl text-on-surface">${s.saccade_status}</p>
            </div>
            <div class="text-center p-4 bg-surface-container-low rounded-xl">
                <p class="text-xs text-on-surface-variant mb-1">Status</p>
                <p class="font-headline font-black text-base" style="color:${focusColor}">${s.status_label}</p>
            </div>
        </div>
        <div class="p-3 bg-surface-container-low rounded-xl text-xs text-on-surface-variant">
            <p class="font-bold text-on-surface mb-1">Rekomendasi:</p>
            ${s.focus_score < 55
                ? '⚠️ Siswa ini menunjukkan tanda kelelahan visual serius. Sarankan istirahat minimal 15 menit dan hindari layar.'
                : s.focus_score < 75
                ? '⚡ Fokus mulai menurun. Pertimbangkan jeda singkat 5 menit atau pergantian aktivitas.'
                : '✅ Kondisi fokus optimal. Lanjutkan aktivitas belajar seperti biasa.'}
        </div>`;
    const modal = document.getElementById('analytics-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeAnalytics() {
    const modal = document.getElementById('analytics-modal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

function exportReport() {
    alert('Fitur ekspor laporan PDF sedang dalam pengembangan.');
}

// Auto-select student from URL param
const urlParams = new URLSearchParams(window.location.search);
const studentParam = urlParams.get('student');
if (studentParam && studentData[studentParam]) {
    setTimeout(() => openAnalytics(studentParam, studentData[studentParam].name), 300);
}
</script>
</body></html>
