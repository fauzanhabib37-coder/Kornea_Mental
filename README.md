<div align="center">

<img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVaklPoqV-bP4gqIkloZAarhiBv0ThXvAqtC-ikzUDSc02ysHvb3FctyTFQx1t1u6g-3KwPot7HBivGQXqm0L8OJkSIf4CSmA97T7J3gCRZbzRnnp243YJZgl9qZpsDT5NDMLZhEkljhKheZBQvRuAdHTsgj-m-gmDJeGGwxr2mfQm5c3aOqzfQhO2TLhsc_lCub9HzqZthO_AZycwdq3sjqLbjpfJFjeCt06W1fzlUOacvtOC3z0gEuyeQbxD1R2Kax_a2hEttMc" alt="Kornea Mental Logo" width="80" />

# 🧠 Kornea Mental

### Platform Analisis Visual & Kognitif Berbasis Eye-Tracking

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-CDN-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![WebGazer](https://img.shields.io/badge/WebGazer.js-Eye_Tracking-8B5CF6?style=for-the-badge)](https://webgazer.cs.brown.edu)
[![License](https://img.shields.io/badge/Status-P2MW_2024-gold?style=for-the-badge)](https://github.com)

<p>
  <strong>Kornea Mental</strong> adalah aplikasi web inovatif yang memanfaatkan teknologi <em>eye-tracking</em> berbasis kamera untuk menganalisis kondisi visual dan kognitif pengguna secara real-time — tanpa perangkat keras tambahan.
</p>

[🚀 Demo Live](#-akun-demo) · [📖 Dokumentasi](#%EF%B8%8F-cara-menjalankan) · [🐛 Laporkan Bug](https://github.com/fauzanhabib37-coder/Kornea_Mental/issues)

</div>

---

## 📸 Tampilan Aplikasi

<div align="center">

| Portal Individu — Dasbor | Portal Institusi — Monitoring |
|---|---|
| Kalibrasi + Live Eye-Tracking | Manajemen & monitoring siswa |

| Checkout 3-Langkah | Halaman Hasil Analitik |
|---|---|
| Bayar → API Key → Daftar Akun | Heatmap, Saccade Path, AOI |

</div>

---

## ✨ Fitur Utama

### 🌐 Landing Pages Publik
- **Beranda** — Hero section, fitur unggulan, statistik, testimonial
- **Halaman Harga** — Perbandingan paket Individu & Institusi
- **Halaman Solusi** — Penjelasan implementasi untuk lembaga pendidikan

### 🔐 Alur Registrasi & Pembayaran
```
Pilih Paket  ──►  Bayar & Dapatkan API Key  ──►  Verifikasi Key  ──►  Buat Akun  ──►  Dasbor
   /harga          /pembayaran                    /aktivasi           /daftar
```
- Pemilihan paket **Individu** atau **Institusi** dengan ringkasan harga
- Generasi **API Key unik** per transaksi (format: `KM-INST-XXXXXXXXXXXXXXXX`)
- Verifikasi API Key sebagai gate sebelum pembuatan akun
- Auto-login & redirect ke portal yang sesuai setelah registrasi

### 👤 Portal Individu (`/individu/...`)

| Halaman | Fitur |
|---|---|
| **Dasbor Personal** | Live eye-tracking via webcam, kalibrasi 9-titik, deteksi arah gerak mata, beban kognitif & kelelahan real-time |
| **Hasil Analitik** | Heatmap distribusi perhatian, jalur tatapan (saccade path), area of interest, analisis blink rate, fixation & burnout |
| **Profil & Pengaturan** | Manajemen akun, preferensi kalibrasi |

### 🏫 Portal Institusi (`/institusi/...`)

| Halaman | Fitur |
|---|---|
| **Dasbor Keseluruhan** | KPI kelas (total siswa, rata-rata fokus, butuh perhatian, sesi selesai), grafik distribusi skor, donut chart status |
| **Monitoring Siswa** | Tabel lengkap dengan skor fokus, blink rate, saccade, status alert; log aktivitas sesi terfilter |
| **Deteksi Siswa** | Pilih siswa → kalibrasi → rekam sesi eye-tracking, hasil otomatis masuk monitoring |
| **Pengaturan** | Profil institusi, ambang batas risiko, notifikasi alert |

### 📥 Manajemen Siswa
- **Tambah manual** — Input nama & NIS via modal
- **Impor CSV** — Upload file `Nama,NIS` dengan drag-and-drop, deteksi duplikat otomatis
- **Hapus siswa** — Dengan konfirmasi per baris

---

## 🛠️ Teknologi

| Layer | Teknologi |
|---|---|
| 🔧 **Backend** | Laravel 12.x — PHP 8.2+ |
| 🗄️ **Database** | SQLite (dev) / MySQL (prod) — Eloquent ORM |
| 🎨 **Frontend** | Tailwind CSS (CDN), Vanilla JS |
| 📊 **Visualisasi** | Chart.js (bar, doughnut, line) |
| 👁️ **Eye Tracking** | WebGazer.js (webcam-based, no hardware) |
| 🔤 **Tipografi** | Manrope + Inter (Google Fonts) |
| 🎯 **Ikon** | Material Symbols Outlined (Google) |
| ⚡ **Asset Build** | Vite |

---

## ⚙️ Cara Menjalankan

### Persyaratan Sistem
- PHP >= 8.2 + Composer
- Node.js >= 18 + npm
- (Opsional) MySQL untuk production

### Instalasi

```bash
# 1. Clone repositori
git clone https://github.com/fauzanhabib37-coder/Kornea_Mental.git
cd Kornea_Mental

# 2. Install dependensi PHP
composer install

# 3. Install dependensi Node
npm install

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Migrasi database + seed data demo
php artisan migrate:fresh --seed

# 6. Jalankan server (dua terminal)
php artisan serve     # → http://localhost:8000
npm run dev           # → Vite HMR
```

> 💡 **WebGazer.js** memerlukan izin kamera dari browser. Pastikan akses HTTPS atau `localhost`.

---

## 🔑 Akun Demo

Tersedia **tombol demo** langsung di halaman `/masuk` — klik sekali, langsung masuk:

| Peran | Email | Password | Portal |
|---|---|---|---|
| 👤 **Individu** | `individu@korneamental.ai` | `password` | `/individu/dasbor` |
| 🏫 **Institusi** | `admin@sekolaha.edu` | `password` | `/institusi/dasbor` |

---

## 📂 Peta Rute

```
# Public
GET  /                        → Beranda
GET  /harga                   → Halaman harga
GET  /solusi                  → Halaman solusi
GET  /masuk                   → Form login
POST /masuk                   → Proses login

# Alur Pembayaran (publik, no-auth)
GET  /pembayaran              → Pilih paket & form bayar
POST /pembayaran              → Proses bayar → generate API Key
GET  /aktivasi                → Tampil API Key & form verifikasi
POST /aktivasi                → Verifikasi API Key
GET  /daftar                  → Form buat akun
POST /daftar                  → Buat akun & auto-login

# Portal Individu (auth required)
GET  /individu/dasbor         → Dasbor + live eye-tracking
GET  /individu/analisis       → Hasil analitik (heatmap, saccade, AOI)
GET  /individu/profil         → Profil & pengaturan
POST /individu/sesi-baru      → Mulai sesi baru
POST /individu/sesi-selesai/{id} → Selesaikan & simpan sesi

# Portal Institusi (auth required)
GET  /institusi/dasbor        → Dasbor kolektif & grafik
GET  /institusi/monitoring    → Monitoring & log aktivitas siswa
GET  /institusi/deteksi       → Rekam sesi per-siswa
GET  /institusi/pengaturan    → Pengaturan institusi
POST /institusi/deteksi/mulai → Mulai sesi deteksi siswa
POST /institusi/deteksi/selesai/{id} → Selesaikan sesi
POST /institusi/siswa/tambah  → Tambah siswa manual
POST /institusi/siswa/impor   → Impor siswa dari CSV
DEL  /institusi/siswa/{id}    → Hapus siswa
```

---

## 📁 Struktur Folder

```
kornea-mental-web/
├── app/Http/Controllers/
│   ├── AuthController.php          ← Login, logout, register (+ API key gate)
│   ├── PaymentController.php       ← Checkout, proses bayar, verifikasi API key
│   ├── IndividuController.php      ← Dasbor, analitik, sesi individu
│   ├── InstitusiController.php     ← Dasbor, monitoring, deteksi, manajemen siswa
│   └── HomeController.php          ← Landing pages publik
│
├── resources/views/
│   ├── pages/                      ← home.blade.php, pricing.blade.php, solutions.blade.php
│   ├── auth/
│   │   ├── login.blade.php         ← Form login + tombol demo
│   │   └── register.blade.php      ← Form daftar akun (step 3 payment flow)
│   ├── payment/
│   │   ├── checkout.blade.php      ← Pilih paket & bayar (step 1)
│   │   └── apikey.blade.php        ← Tampil & verifikasi API Key (step 2)
│   ├── dashboard/
│   │   ├── individu.blade.php      ← Dasbor personal + live tracking
│   │   ├── institusi_settings.blade.php ← Pengaturan institusi
│   │   └── profile.blade.php       ← Profil individu
│   ├── institusi/
│   │   ├── _sidebar.blade.php      ← Sidebar institusi (shared component)
│   │   ├── dashboard.blade.php     ← Dasbor kolektif
│   │   ├── monitoring.blade.php    ← Tabel siswa + log aktivitas
│   │   └── deteksi.blade.php       ← 3-step deteksi per-siswa
│   └── analytics/
│       └── results.blade.php       ← Hasil analitik individu (heatmap, AOI, dll)
│
├── database/
│   ├── migrations/                 ← Tabel: users, students, research_sessions
│   └── seeders/DatabaseSeeder.php  ← Data demo: 2 user, 3 siswa, data sesi
│
└── routes/web.php                  ← Semua definisi rute
```

---

## 🧩 Arsitektur Data

```
users
 ├── id, name, email, password
 └── role: 'individu' | 'institusi'

students (milik institusi)
 ├── id, name, nis, initials
 ├── focus_score, blink_rate, saccade_status
 ├── status_label, status_color
 └── has_alert (bool)

research_sessions
 ├── id, session_code, client_name, client_initials
 ├── duration, avg_focus_score
 ├── status: 'Berlangsung' | 'Selesai'
 └── is_alert (bool)
```

---

## 🗺️ Roadmap

- [x] Portal Individu dengan live eye-tracking (WebGazer.js)
- [x] Portal Institusi terpadu (Dasbor + Monitoring + Deteksi)
- [x] Manajemen siswa: tambah manual & impor CSV
- [x] Alur pembayaran 3-langkah dengan verifikasi API Key
- [ ] Ekspor laporan PDF per siswa
- [ ] Notifikasi real-time saat siswa kelelahan tinggi
- [ ] Multi-institusi (beberapa sekolah per admin)
- [ ] Dashboard admin superuser

---

## 🤝 Kontribusi

1. Fork repositori ini
2. Buat branch fitur: `git checkout -b feat/nama-fitur`
3. Commit perubahan: `git commit -m 'feat: deskripsi singkat'`
4. Push ke branch: `git push origin feat/nama-fitur`
5. Buat Pull Request

---

<div align="center">

**Kornea Mental** — Prototipe Antarmuka untuk Program P2MW

*Menghadirkan analisis kognitif berbasis eye-tracking yang aksesibel untuk semua.*

[![GitHub](https://img.shields.io/badge/GitHub-fauzanhabib37--coder-181717?style=flat-square&logo=github)](https://github.com/fauzanhabib37-coder/Kornea_Mental)

© 2024 Kornea Mental. Dikembangkan dengan ❤️ untuk pendidikan Indonesia.

</div>
