<?php

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\KategoriTemaController;
use App\Http\Controllers\Admin\NamaPelatihanController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\TujuanLembagaController;
use App\Http\Controllers\Admin\InformasiKontakController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;

use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\FrontBlogController;
use App\Http\Controllers\Frontend\FrontGaleriController;
use App\Http\Controllers\Frontend\FrontTemaPelatihanController;
use App\Http\Controllers\Frontend\FrontJadwalPelatihanController;
use App\Http\Controllers\Frontend\FrontTentangKamiController;
use App\Http\Controllers\Frontend\FrontKontakController;


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
        Route::patch('/admin/portofolio/{portofolio}/update', [PortofolioController::class, 'update'])->name('admin.portofolio.update');
        Route::delete('/admin/portofolio/{id}', [PortofolioController::class, 'destroy'])->name('admin.portofolio.destroy');

        // Kategori Tema Routes
        Route::get('/kategori-tema', [KategoriTemaController::class, 'index'])->name('admin.kategori-tema');
        Route::get('/kategori-tema/create', [KategoriTemaController::class, 'create'])->name('admin.kategori-tema.create');
        Route::post('/kategori-tema/store', [KategoriTemaController::class, 'store'])->name('admin.kategori-tema.store');
        Route::get('/admin/kategori-tema/{slug}', [KategoriTemaController::class, 'show'])->name('admin.kategori-tema.show');
        Route::get('/admin/kategori-tema/{id}/edit', [KategoriTemaController::class, 'edit'])->name('admin.kategori-tema.edit');
        Route::patch('/admin/kategori-tema/{kategori_tema}/update', [KategoriTemaController::class, 'update'])->name('admin.kategori-tema.update');
        Route::delete('/admin/kategori-tema/{id}', [KategoriTemaController::class, 'destroy'])->name('admin.kategori-tema.destroy');

        // Nama Pelatihan Routes
        Route::get('/nama-pelatihan', [NamaPelatihanController::class, 'index'])->name('admin.nama-pelatihan');
        Route::get('/nama-pelatihan/create', [NamaPelatihanController::class, 'create'])->name('admin.nama-pelatihan.create');
        Route::post('/nama-pelatihan/store', [NamaPelatihanController::class, 'store'])->name('admin.nama-pelatihan.store');
        Route::get('/nama-pelatihan/{slug}', [NamaPelatihanController::class, 'show'])->name('admin.nama-pelatihan.show');
        Route::get('/admin/nama-pelatihan/{id}/edit', [NamaPelatihanController::class, 'edit'])->name('admin.nama-pelatihan.edit');
        Route::patch('/admin/nama-pelatihan/{id}/update', [NamaPelatihanController::class, 'update'])->name('admin.nama-pelatihan.update');
        Route::delete('/admin/nama-pelatihan/{id}', [NamaPelatihanController::class, 'destroy'])->name('admin.nama-pelatihan.destroy');

        // Profil
        Route::get('/profil', [ProfilController::class, 'index'])->name('admin.profil');
        Route::get('/profil/create', [ProfilController::class, 'create'])->name('admin.profil.create');
        Route::post('/profil/store', [ProfilController::class, 'store'])->name('admin.profil.store');
        Route::get('/admin/profil/{id}', [ProfilController::class, 'show'])->name('admin.profil.show');
        Route::get('/admin/profil/{id}/edit', [ProfilController::class, 'edit'])->name('admin.profil.edit');
        Route::patch('/admin/profil/{id}/update', [ProfilController::class, 'update'])->name('admin.profil.update');
        Route::delete('/admin/profil/{id}', [ProfilController::class, 'destroy'])->name('admin.profil.destroy');

        // Visi Misi
        Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('admin.visimisi');
        Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('admin.visimisi.create');
        Route::post('/visimisi/store', [VisiMisiController::class, 'store'])->name('admin.visimisi.store');
        Route::get('/admin/visimisi/{id}', [VisiMisiController::class, 'show'])->name('admin.visimisi.show');
        Route::get('/admin/visimisi/{id}/edit', [VisiMisiController::class, 'edit'])->name('admin.visimisi.edit');
        Route::patch('/admin/visimisi/{id}/update', [VisiMisiController::class, 'update'])->name('admin.visimisi.update');
        Route::delete('/admin/visimisi/{id}', [VisiMisiController::class, 'destroy'])->name('admin.visimisi.destroy');

        // Tujuan Lembaga
        Route::get('/tujuanlembaga', [TujuanLembagaController::class, 'index'])->name('admin.tujuanlembaga');
        Route::get('/tujuanlembaga/create', [TujuanLembagaController::class, 'create'])->name('admin.tujuanlembaga.create');
        Route::post('/tujuanlembaga/store', [TujuanLembagaController::class, 'store'])->name('admin.tujuanlembaga.store');
        Route::get('/admin/tujuanlembaga/{id}', [TujuanLembagaController::class, 'show'])->name('admin.tujuanlembaga.show');
        Route::get('/admin/tujuanlembaga/{id}/edit', [TujuanLembagaController::class, 'edit'])->name('admin.tujuanlembaga.edit');
        Route::patch('/admin/tujuanlembaga/{id}/update', [TujuanLembagaController::class, 'update'])->name('admin.tujuanlembaga.update');
        Route::delete('/admin/tujuanlembaga/{id}', [TujuanLembagaController::class, 'destroy'])->name('admin.tujuanlembaga.destroy');

        // Informasi Kontak
        Route::get('/informasikontak', [InformasiKontakController::class, 'index'])->name('admin.informasikontak');
        Route::get('/informasikontak/create', [InformasiKontakController::class, 'create'])->name('admin.informasikontak.create');
        Route::post('/informasikontak/store', [InformasiKontakController::class, 'store'])->name('admin.informasikontak.store');
        Route::get('/admin/informasikontak/{id}', [InformasiKontakController::class, 'show'])->name('admin.informasikontak.show');
        Route::get('/admin/informasikontak/{id}/edit', [InformasiKontakController::class, 'edit'])->name('admin.informasikontak.edit');
        Route::patch('/admin/informasikontak/{id}/update', [InformasiKontakController::class, 'update'])->name('admin.informasikontak.update');
        Route::delete('/admin/informasikontak/{id}', [InformasiKontakController::class, 'destroy'])->name('admin.informasikontak.destroy');
    });
});


//////// Frontend ///////////
//home
Route::get('/', [FrontHomeController::class, 'index'])->name('home');

//blog
Route::get('/blog', [FrontBlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [FrontBlogController::class, 'show'])->name('detail-blog');

//galeri
Route::get('/galeri', [FrontGaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/{slug}', [FrontGaleriController::class, 'show'])->name('detail-galeri');

//kontak
Route::get('/kontak', [FrontkontakController::class, 'index'])->name('kontak');

//tentang kami
Route::get('/tentang-kami', [FrontTentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/visi-misi', [FrontTentangKamiController::class, 'visiMisi'])->name('visi-misi');
Route::get('/tujuan-lembaga', [FrontTentangKamiController::class, 'tujuanLembaga'])->name('tujuan-lembaga');


Route::get('/legalitas', function () {
    return view('frontend.legalitas');
})->name('legalitas');

Route::get('/agenda-rutin', function () {
    return view('frontend.agenda-rutin');
})->name('agenda-rutin');

Route::get('/pengurus', function () {
    return view('frontend.pengurus');
})->name('pengurus');

Route::get('/program-pengalaman-kerja', function () {
    return view('frontend.program-pengalaman-kerja');
})->name('program-pengalaman-kerja');

// Tema Pelatihan
Route::get('/tema-pelatihan', [FrontTemaPelatihanController::class, 'index'])->name('tema-pelatihan');
Route::get('/tema-pelatihan/{slug}', [FrontTemaPelatihanController::class, 'showKategoriTema'])->name('kategori-tema-pelatihan');
Route::get('/detail-pelatihan/{slug}', [FrontTemaPelatihanController::class, 'showPelatihan'])->name('detail-pelatihan');
Route::get('/cari-pelatihan', [FrontTemaPelatihanController::class, 'cariPelatihan'])->name('cari-pelatihan');

// Jadwal Pelatihan
Route::get('/jadwal-pelatihan', [FrontJadwalPelatihanController::class, 'index'])->name('jadwal-pelatihan');


Route::get('/formulir-pendaftaran', function () {
    return view('frontend.formulir-pendaftaran');
})->name('formulir-pendaftaran');




require __DIR__ . '/auth.php';
