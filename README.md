# Kornea Mental — Web Application

Platform web untuk **Analisis Visual & Kognitif Terpadu** berbasis *eye-tracking*. Kornea Mental menyediakan dua portal terpisah yang disesuaikan berdasarkan peran pengguna: **Portal Individu** untuk pengguna perorangan, dan **Portal Institusi** untuk sekolah maupun universitas.

> 🏆 Proyek P2MW — Mahasiswa Universitas

---

## ✨ Fitur Utama

### 🏠 Halaman Publik (Landing Pages)
- **Beranda** — Informasi produk, fitur unggulan, dan CTA
- **Harga** — Paket langganan Individu & Institusi
- **Solusi** — Penjelasan solusi khusus institusi pendidikan

### 🔐 Autentikasi & Peran (Role-Based)
- Halaman login dengan desain *glassmorphism* modern
- **Tombol Demo** tersedia langsung di halaman login
- Setelah login, sistem **otomatis mendeteksi peran** (`individu` / `institusi`) dan mengarahkan ke portal yang sesuai
- Session management dengan Laravel Auth

### 👤 Portal Individu (`/individu/...`)
- **Dasbor Personal** — Live eye-tracking feed, metrik kognitif real-time (Cognitive Load, Fatigue Index, Blink Rate)
- **Peta Panas (Heatmap)** — Visualisasi distribusi perhatian pada antarmuka target
- **Jalur Tatapan (Saccade Path)** — Peta animasi gerakan bola mata antar elemen layar
- **Area of Interest (AOI)** — Distribusi waktu tatapan berdasarkan zona yang didefinisikan
- **Sub-fitur Analitik:**
  - 🛡️ **Analisis Stres — Blink Rate**: Timeline kedipan per 10 menit, indikator tekanan kognitif
  - 🎯 **Analisis Fokus — Fixation**: Skor fokus, distribusi durasi fiksasi, rata-rata waktu tatapan
  - ⚠️ **Analisis Burnout — Saccade**: Indeks burnout, deteksi regresi, gauge kelelahan visual
- **Profil & Pengaturan** — Konfigurasi preferensi dan kalibrasi default

### 🏫 Portal Institusi (`/institusi/...`)
- **Dasbor Institusi** — Ringkasan kolektif: Total siswa dipantau, Jumlah kelas, Siswa berisiko tinggi
- **Tabel Siswa Real-time** — Daftar siswa dengan status fokus, blink rate, saccade, dan alert
- **Analitik Sekolah** — Monitoring fokus kelas, alert kelelahan kolektif, peringkat siswa
- **Analitik Universitas** — Tren beban kognitif per fakultas (Chart.js), radar pola visual, tabel kinerja
- **Pengaturan Institusi** — Manajemen profil dan preferensi admin

---

## 🛠️ Teknologi

| Komponen | Teknologi |
|---|---|
| Backend Framework | Laravel 12 |
| Bahasa Pemrograman | PHP 8.2+ |
| Database | SQLite (development) |
| CSS Framework | Tailwind CSS (CDN) |
| Visualisasi Grafik | Chart.js |
| Eye-Tracking | WebGazer.js |
| Ikon | Material Symbols (Google) |
| Font | Manrope + Inter (Google Fonts) |

---

## ⚙️ Cara Menjalankan (Local Development)

### Persyaratan
- PHP >= 8.2
- Composer
- Node.js & npm

### Langkah Instalasi

```bash
# 1. Clone repositori
git clone <repo-url>
cd kornea-mental-web

# 2. Install dependensi PHP
composer install

# 3. Install dependensi Node
npm install

# 4. Buat file environment
cp .env.example .env
php artisan key:generate

# 5. Jalankan migrasi + seeder (membuat akun demo)
php artisan migrate:fresh --seed

# 6. Jalankan server (dua terminal berbeda)
php artisan serve       # Terminal 1 → Laravel server
npm run dev             # Terminal 2 → Vite asset bundler
```

Buka browser di: **http://localhost:8000**

---

## 🔑 Akun Demo

Tersedia tombol **Demo Login** langsung di halaman `/masuk` untuk kemudahan demonstrasi:

| Peran | Email | Password |
|---|---|---|
| **Individu** | `individu@korneamental.ai` | `password` |
| **Institusi** | `admin@sekolaha.edu` | `password` |

---

## 📂 Struktur Rute

```
/ (Beranda Publik)
/harga
/solusi
/masuk                         ← Form Login

# Portal Individu (auth required)
/individu/dasbor               ← Dasbor personal + live tracking
/individu/analisis?tab=heatmap ← Peta panas
/individu/analisis?tab=saccade ← Jalur tatapan
/individu/analisis?tab=aoi     ← Area of Interest
/individu/profil               ← Profil & pengaturan

# Portal Institusi (auth required)
/institusi/dasbor              ← Dasbor kolektif institusi
/institusi/sekolah             ← Monitoring kelas
/institusi/universitas         ← Statistik universitas
/institusi/pengaturan          ← Pengaturan institusi

/pembayaran                    ← Checkout & faktur
```

---

## 📁 Struktur Folder Penting

```
app/Http/Controllers/
├── AuthController.php        ← Login + role-based redirect
├── IndividuController.php    ← Dashboard, profil, analitik individu
├── InstitusiController.php   ← Dashboard, sekolah, universitas
├── HomeController.php        ← Landing pages publik
└── PaymentController.php     ← Halaman pembayaran

resources/views/
├── pages/                    ← Landing pages (home, pricing, solutions)
├── auth/                     ← Login form
├── dashboard/
│   ├── individu.blade.php    ← Dasbor portal individu
│   ├── institusi.blade.php   ← Dasbor portal institusi
│   └── profile.blade.php     ← Profil (role-aware)
└── analytics/
    ├── results.blade.php     ← Analitik individu (3 tab + sub-fitur)
    ├── school.blade.php      ← Analitik sekolah
    └── university.blade.php  ← Analitik universitas

database/seeders/
└── DatabaseSeeder.php        ← Akun demo + data dummy (Student, Faculty)
```

---

*Prototipe antarmuka untuk program P2MW — Kornea Mental © 2024*
