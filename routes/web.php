<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PaymentController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/harga', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/solusi', [HomeController::class, 'solutions'])->name('solutions');

Route::get('/masuk', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/masuk', [AuthController::class, 'login']);
Route::post('/keluar', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dasbor', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profil', [DashboardController::class, 'profile'])->name('profile');

    Route::get('/analisis', [AnalyticsController::class, 'results'])->name('analytics.results');
    Route::get('/institusi/sekolah', [AnalyticsController::class, 'school'])->name('analytics.school');
    Route::get('/institusi/universitas', [AnalyticsController::class, 'university'])->name('analytics.university');

    Route::get('/pembayaran', [PaymentController::class, 'checkout'])->name('checkout');
});
