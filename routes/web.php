<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;

//////// Administrator /////////
// Ambil prefix dari .env, default ke '/admin' jika tidak diset
$adminPrefix = env('ADMIN_PREFIX', '/admin');

Route::prefix($adminPrefix)->group(function () {
    // Login Admin
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // Halaman Dashboard (Hanya untuk Admin)
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('backend.dashboard.index');
        })->name('admin.dashboard');
    });
});


//////// Frontend ///////////
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

Route::get('/tentang-kami', function () {
    return view('frontend.tentang-kami');
})->name('tentang-kami');






require __DIR__ . '/auth.php';
