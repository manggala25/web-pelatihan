<?php

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Frontend\FrontBlogController;



//////// Administrator /////////
// Ambil prefix dari .env, default ke '/admin' jika tidak diset
$adminPrefix = env('ADMIN_PREFIX', '/admin');

Route::prefix($adminPrefix)->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth'])->group(function () {
        // Dashboard Route
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');


        // Blog Routes
        Route::get('/blog', [blogController::class, 'index'])->name('admin.blog');
        Route::get('/blog/create', [blogController::class, 'create'])->name('admin.blog.create');
        Route::post('/blog/store', [blogController::class, 'store'])->name('admin.blog.store');
        Route::get('/admin/blog/{slug}', [blogController::class, 'show'])->name('admin.blog.show');
        Route::post('/upload-image', [blogController::class, 'uploadImage'])->name('upload.image');
        Route::get('/admin/blog/{slug}/edit', [blogController::class, 'edit'])->name('admin.blog.edit');
        Route::patch('/admin/blog/{id}/update', [blogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/admin/blog/{id}', [blogController::class, 'destroy'])->name('admin.blog.destroy');    

        // Portofolio Routes
        Route::get('/portofolio', [PortofolioController::class, 'index'])->name('admin.portofolio');
        Route::get('/portofolio/create', [PortofolioController::class, 'create'])->name('admin.portofolio.create');
        Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('admin.portofolio.store');
        Route::get('/admin/portofolio/{judul_portofolio}', [PortofolioController::class, 'show'])->name('admin.portofolio.show');
        Route::post('/upload-image', [PortofolioController::class, 'uploadImage'])->name('upload.image');
        Route::get('/admin/portofolio/{id}/edit', [PortofolioController::class, 'edit'])->name('admin.portofolio.edit');
        Route::patch('/admin/portofolio/{id}/update', [PortofolioController::class, 'update'])->name('admin.portofolio.update');
        Route::delete('/admin/portofolio/{id}', [PortofolioController::class, 'destroy'])->name('admin.portofolio.destroy');
    });
});


//////// Frontend ///////////
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/blog', [FrontBlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [FrontBlogController::class, 'show'])->name('detail-blog');


Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

Route::get('/tentang-kami', function () {
    return view('frontend.tentang-kami');
})->name('tentang-kami');

Route::get('/visi-misi', function () {
    return view('frontend.visi-misi');
})->name('visi-misi');

Route::get('/legalitas', function () {
    return view('frontend.legalitas');
})->name('legalitas');

Route::get('/tujuan-lembaga', function () {
    return view('frontend.tujuan-lembaga');
})->name('tujuan-lembaga');

Route::get('/agenda-rutin', function () {
    return view('frontend.agenda-rutin');
})->name('agenda-rutin');

Route::get('/pengurus', function () {
    return view('frontend.pengurus');
})->name('pengurus');

Route::get('/program-pengalaman-kerja', function () {
    return view('frontend.program-pengalaman-kerja');
})->name('program-pengalaman-kerja');

Route::get('/tema-pelatihan', function () {
    return view('frontend.tema-pelatihan');
})->name('tema-pelatihan');

Route::get('/detail-tema-pelatihan', function () {
    return view('frontend.detail-tema-pelatihan');
})->name('detail-tema-pelatihan');

Route::get('/kategori-tema-pelatihan', function () {
    return view('frontend.kategori-tema-pelatihan');
})->name('kategori-tema-pelatihan');

Route::get('/jadwal-pelatihan', function () {
    return view('frontend.jadwal-pelatihan');
})->name('jadwal-pelatihan');

Route::get('/galeri', function () {
    return view('frontend.galeri');
})->name('galeri');

Route::get('/detail-galeri', function () {
    return view('frontend.detail-galeri');
})->name('detail-galeri');

Route::get('/formulir-pendaftaran', function () {
    return view('frontend.formulir-pendaftaran');
})->name('formulir-pendaftaran');




require __DIR__ . '/auth.php';
