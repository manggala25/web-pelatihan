<?php

use App\Http\Controllers\Admin\blogController;
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

        // Blog/ Artikel
        Route::get('/blog', [blogController::class, 'index'])->name('admin.blog'); 
        Route::get('/blog/create', [blogController::class, 'create'])->name('admin.blog.create');
        Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.edit');
        Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('admin.destroy');
    });
});


//////// Frontend ///////////
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

// Route::get('/blog/{slug}', function ($slug) {
//     return view('frontend.detail-blog', compact('slug'));
// })->name('detail-blog');

Route::get('/blog/detail-blog', function () {
    return view('frontend.detail-blog',);
})->name('detail-blog');

Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

Route::get('/tentang-kami', function () {
    return view('frontend.tentang-kami');
})->name('tentang-kami');

Route::get('/tema-pelatihan', function () {
    return view('frontend.tema-pelatihan');
})->name('tema-pelatihan');

Route::get('/jadwal-pelatihan', function () {
    return view('frontend.jadwal-pelatihan');
})->name('jadwal-pelatihan');






require __DIR__ . '/auth.php';
