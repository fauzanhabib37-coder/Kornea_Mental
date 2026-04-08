<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\IndividuController;
use App\Http\Controllers\InstitusiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/harga', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/solusi', [HomeController::class, 'solutions'])->name('solutions');

Route::get('/masuk', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/masuk', [AuthController::class, 'login']);
Route::post('/keluar', [AuthController::class, 'logout'])->name('logout');

// Payment flow (public — no auth required)
Route::get('/pembayaran', [PaymentController::class, 'checkout'])->name('checkout');
Route::post('/pembayaran', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/aktivasi', [PaymentController::class, 'apiKeyPage'])->name('payment.apikey');
Route::post('/aktivasi', [PaymentController::class, 'verifyApiKey'])->name('payment.apikey.verify');
Route::get('/daftar', [AuthController::class, 'registerForm'])->name('register');
Route::post('/daftar', [AuthController::class, 'register'])->name('register.submit');

Route::middleware('auth')->group(function () {
    // Individu Routes
    Route::prefix('individu')->group(function () {
        Route::get('/dasbor', [IndividuController::class, 'dashboard'])->name('individu.dashboard');
        Route::get('/profil', [IndividuController::class, 'profile'])->name('individu.profile');
        Route::get('/analisis', [IndividuController::class, 'analytics'])->name('individu.analytics');
        Route::post('/sesi-baru', [IndividuController::class, 'startSession'])->name('individu.session.start');
        Route::post('/sesi-selesai/{id}', [IndividuController::class, 'endSession'])->name('individu.session.end');
    });

    // Institusi Routes
    Route::prefix('institusi')->group(function () {
        Route::get('/dasbor', [InstitusiController::class, 'dashboard'])->name('institusi.dashboard');
        Route::get('/monitoring', [InstitusiController::class, 'monitoring'])->name('institusi.monitoring');
        Route::get('/deteksi', [InstitusiController::class, 'deteksi'])->name('institusi.deteksi');
        Route::get('/pengaturan', [InstitusiController::class, 'settings'])->name('institusi.settings');
        Route::post('/deteksi/mulai', [InstitusiController::class, 'startDetection'])->name('institusi.deteksi.start');
        Route::post('/deteksi/selesai/{id}', [InstitusiController::class, 'endDetection'])->name('institusi.deteksi.end');
        // Student management
        Route::post('/siswa/tambah', [InstitusiController::class, 'addStudent'])->name('institusi.siswa.tambah');
        Route::post('/siswa/impor', [InstitusiController::class, 'importStudents'])->name('institusi.siswa.impor');
        Route::delete('/siswa/{id}', [InstitusiController::class, 'deleteStudent'])->name('institusi.siswa.hapus');
    });


    // Default dashboard redirect based on role, optional depending on AuthController implementation.
    // For safety, let's keep the old dashboard route as a role-check redirect if someone enters it manually.
    Route::get('/dasbor', function () {
        $user = auth()->user();
        if ($user && $user->role === 'institusi') {
            return redirect()->route('institusi.dashboard');
        }
        return redirect()->route('individu.dashboard');
    })->name('dashboard');
});
