# Kornea Mental - Web Application

Kornea Mental adalah platform web untuk **Analisis Visual & Kognitif Terpadu**. Aplikasi ini dirancang untuk memfasilitasi institusi pendidikan, sekolah, dan universitas dalam melacak beban kognitif, kelelahan mata, dan pemahaman visual siswa/subjek riset melalui teknologi *eye-tracking*.

Versi aplikasi saat ini adalah implementasi *frontend* (tampilan antarmuka) yang terintegrasi di atas framework **Laravel 11**, dikembangkan menggunakan **Tailwind CSS**.

## 🚀 Fitur Utama (UI)

*   **Halaman Pemasaran (Landing Pages):** Beranda utama, Solusi Institusi, dan Harga.
*   **Autentikasi:** Antarmuka Login (*glassmorphism design*).
*   **Dasbor Pengguna:** Tinjauan sesi penelitian (*recent sessions*), monitoring beban kognitif langsung, dan manajemen profil.
*   **Analitik Pendidikan:**
    *   **Hasil Analisis Sesi:** Visualisasi data lengkap seperti *Heatmap*, garis waktu (*timeline*), dan interpretasi AI.
    *   **Analitik Sekolah:** Memantau fokus siswa secara kolektif (contoh: *monitoring* kelas *online*).
    *   **Analitik Universitas:** Dasbor tingkat institusi dengan visualisasi tren per fakultas.
*   **Pembayaran:** Form *checkout* dan faktur resi elektronik.

## 🛠️ Teknologi yang Digunakan

*   **Backend Framework:** Laravel 11
*   **Bahasa Pemrograman:** PHP 8.2+
*   **Database:** SQLite (Default bawaan untuk pengembangan awal)
*   **Desain Antarmuka (CSS):** Tailwind CSS (menggunakan *script* CDN untuk mempermudah *prototyping* cepat tanpa tahap *build assets*)
*   **Visualisasi Data (Grafik):** Chart.js

## ⚙️ Cara Menjalankan (*Local Development*)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di mesin lokal Anda:

1.  **Persyaratan:**
    Pastikan Anda sudah menginstal **PHP (Minimal versi 8.2)** dan **Composer** di komputer Anda.

2.  **Instalasi Dependensi (Jika baru di-*clone*):**
    ```bash
    composer install
    ```

3.  **Persiapan Lingkungan (Enviroment):**
    Di dalam direktori utama proyek, salin file konfigurasi utama lalu buat aplikasi key (*App Key*):
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *(Mengingat di tahap ini kita menggunakan SQLite, biasanya tidak perlu lagi mengubah nilai DB di `.env`, atau pastikan file `database/database.sqlite` terbuat)*

4.  **Menjalankan Migrasi Database:**
    ```bash
    php artisan migrate
    ```

5.  **Memulai Web Server Bawaan:**
    ```bash
    php artisan serve
    ```

Anda kini dapat membuka aplikasi di *browser* pada: `http://localhost:8000`

## 📂 Struktur Rute (Tautan Langsung)

Berikut adalah ringkasan dari URL yang bisa Anda akses di aplikasi:

* `/` (Beranda Produk)
* `/pricing` (Harga)
* `/solutions` (Solusi Institusi)
* `/login` (Form Masuk/Log In)
* `/dashboard` (Dasbor Tinjauan Utama)
* `/profile` (Pengaturan Profil Pengguna)
* `/analytics` (Hasil Analisis Sesi - *Heatmap*)
* `/analytics/school` (Monitoring Fokus Kelas/Sekolah)
* `/analytics/university` (Statistik Menyeluruh Universitas)
* `/checkout` (Tampilan Checkout Berhasil/Faktur Pembayaran)

---
*Proyek prototipe untuk antarmuka P2MW.*
