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
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\BentukPelatihanController;
use App\Http\Controllers\Admin\SectionBentukPelatihanController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\TargetPelatihanController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BannerKontakController;
use App\Http\Controllers\Admin\InformasiPendaftaranController;
use App\Http\Controllers\Admin\JadwalPelatihanController;
use App\Http\Controllers\Admin\TabsInformasiController;
use App\Http\Controllers\Admin\SectionTabsInformasiController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;

use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\Frontend\FrontBlogController;
use App\Http\Controllers\Frontend\FrontGaleriController;
use App\Http\Controllers\Frontend\FrontTemaPelatihanController;
use App\Http\Controllers\Frontend\FrontJadwalPelatihanController;
use App\Http\Controllers\Frontend\FrontTentangKamiController;
use App\Http\Controllers\Frontend\FrontKontakController;
use App\Http\Controllers\Frontend\FrontFormulirPendaftaranController;


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

        // Section Routes
        Route::get('/section', [SectionController::class, 'index'])->name('admin.section');
        Route::get('/section/create', [SectionController::class, 'create'])->name('admin.section.create');
        Route::post('/section/store', [SectionController::class, 'store'])->name('admin.section.store');
        Route::get('/admin/section/{id}', [SectionController::class, 'show'])->name('admin.section.show');
        Route::get('/admin/section/{id}/edit', [SectionController::class, 'edit'])->name('admin.section.edit');
        Route::patch('/admin/section/{id}/update', [SectionController::class, 'update'])->name('admin.section.update');
        Route::delete('/admin/section/{id}', [SectionController::class, 'destroy'])->name('admin.section.destroy');

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

        // Bentuk Pelatihan Routes
        Route::get('/bentuk-pelatihan', [BentukPelatihanController::class, 'index'])->name('admin.bentuk-pelatihan');
        Route::get('/bentuk-pelatihan/create', [BentukPelatihanController::class, 'create'])->name('admin.bentuk-pelatihan.create');
        Route::post('/bentuk-pelatihan/store', [BentukPelatihanController::class, 'store'])->name('admin.bentuk-pelatihan.store');
        Route::get('/bentuk-pelatihan/{id}', [BentukPelatihanController::class, 'show'])->name('admin.bentuk-pelatihan.show');
        Route::get('/admin/bentuk-pelatihan/{id}/edit', [BentukPelatihanController::class, 'edit'])->name('admin.bentuk-pelatihan.edit');
        Route::patch('/admin/bentuk-pelatihan/{id}/update', [BentukPelatihanController::class, 'update'])->name('admin.bentuk-pelatihan.update');
        Route::delete('/admin/bentuk-pelatihan/{id}', [BentukPelatihanController::class, 'destroy'])->name('admin.bentuk-pelatihan.destroy');

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

        // Testimoni
        Route::get('/testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni');
        Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('admin.testimoni.create');
        Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('admin.testimoni.store');
        Route::get('/admin/testimoni/{id}', [TestimoniController::class, 'show'])->name('admin.testimoni.show');
        Route::get('/admin/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('admin.testimoni.edit');
        Route::patch('/admin/testimoni/{id}/update', [TestimoniController::class, 'update'])->name('admin.testimoni.update');
        Route::delete('/admin/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('admin.testimoni.destroy');

        // Mitra
        Route::get('/mitra', [MitraController::class, 'index'])->name('admin.mitra');    
        Route::get('/mitra/create', [MitraController::class, 'create'])->name('admin.mitra.create');    
        Route::post('/mitra/store', [MitraController::class, 'store'])->name('admin.mitra.store');       
        Route::get('/admin/mitra/{id}/edit', [MitraController::class, 'edit'])->name('admin.mitra.edit');    
        Route::patch('/admin/mitra/{id}/update', [MitraController::class, 'update'])->name('admin.mitra.update');    
        Route::delete('/admin/mitra/{id}', [MitraController::class, 'destroy'])->name('admin.mitra.destroy');

        //Target Pelatihan
        Route::get('/targetpelatihan', [TargetPelatihanController::class, 'index'])->name('admin.target-pelatihan');      
        Route::get('/targetpelatihan/{id}', [TargetPelatihanController::class, 'show'])->name('admin.target-pelatihan.show');
        Route::get('/admin/targetpelatihan/{id}/edit', [TargetPelatihanController::class, 'edit'])->name('admin.target-pelatihan.edit');    
        Route::patch('/admin/targetpelatihan/{id}/update', [TargetPelatihanController::class, 'update'])->name('admin.target-pelatihan.update');    
        Route::delete('/admin/targetpelatihan/{id}', [TargetPelatihanController::class, 'destroy'])->name('admin.target-pelatihan.destroy');

        // Section Bentuk Pelatihan
        Route::get('/section-bentuk-pelatihan', [SectionBentukPelatihanController::class, 'index'])->name('admin.section-bentuk-pelatihan');
        Route::get('/admin/section-bentuk-pelatihan/{id}/edit', [SectionBentukPelatihanController::class, 'edit'])->name('admin.section-bentuk-pelatihan.edit');
        Route::patch('/admin/section-bentuk-pelatihan/{id}/update', [SectionBentukPelatihanController::class, 'update'])->name('admin.section-bentuk-pelatihan.update');

        // Route Banner
        Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner');    
        Route::get('/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('admin.banner.store');
        Route::get('/admin/banner/{id}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::patch('/admin/banner/{id}/update', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::delete('/admin/banner/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');

        // Route Banner Kontak
        Route::get('/bannerkontak', [BannerKontakController::class, 'index'])->name('admin.bannerkontak');    
        Route::get('/bannerkontak/create', [BannerKontakController::class, 'create'])->name('admin.bannerkontak.create');
        Route::post('/bannerkontak/store', [BannerKontakController::class, 'store'])->name('admin.bannerkontak.store');
        Route::get('/admin/bannerkontak/{id}/edit', [BannerKontakController::class, 'edit'])->name('admin.bannerkontak.edit');
        Route::patch('/admin/bannerkontak/{id}/update', [BannerKontakController::class, 'update'])->name('admin.bannerkontak.update');
        Route::delete('/admin/bannerkontak/{id}', [BannerKontakController::class, 'destroy'])->name('admin.bannerkontak.destroy');

        // Route Informasi Pendaftaran
        Route::get('/informasipendaftaran', [InformasiPendaftaranController::class, 'index'])->name('admin.informasipendaftaran');
        Route::get('/informasipendaftaran/{id}/show', [InformasiPendaftaranController::class, 'show'])->name('admin.informasipendaftaran.show');
        Route::get('/informasipendaftaran/create', [InformasiPendaftaranController::class, 'create'])->name('admin.informasipendaftaran.create');
        Route::post('/informasipendaftaran/store', [InformasiPendaftaranController::class, 'store'])->name('admin.informasipendaftaran.store');
        Route::get('/admin/informasipendaftaran/{id}/edit', [InformasiPendaftaranController::class, 'edit'])->name('admin.informasipendaftaran.edit');
        Route::patch('/admin/informasipendaftaran/{id}/update', [InformasiPendaftaranController::class, 'update'])->name('admin.informasipendaftaran.update');
        Route::delete('/admin/informasipendaftaran/{id}', [InformasiPendaftaranController::class, 'destroy'])->name('admin.informasipendaftaran.destroy');

        // Jadwal Pelatihan
        Route::get('/jadwal-pelatihan', [JadwalPelatihanController::class, 'index'])->name('admin.jadwal-pelatihan');
        Route::get('/jadwal-pelatihan/{id}/show', [JadwalPelatihanController::class, 'show'])->name('admin.jadwal-pelatihan.show');
        Route::get('/jadwal-pelatihan/create', [JadwalPelatihanController::class, 'create'])->name('admin.jadwal-pelatihan.create');
        Route::post('/jadwal-pelatihan/store', [JadwalPelatihanController::class, 'store'])->name('admin.jadwal-pelatihan.store');
        Route::get('/admin/jadwal-pelatihan/{id}/edit', [JadwalPelatihanController::class, 'edit'])->name('admin.jadwal-pelatihan.edit');
        Route::patch('/admin/jadwal-pelatihan/{id}/update', [JadwalPelatihanController::class, 'update'])->name('admin.jadwal-pelatihan.update');
        Route::delete('/admin/jadwal-pelatihan/{id}', [JadwalPelatihanController::class, 'destroy'])->name('admin.jadwal-pelatihan.destroy');

        // Route Tabs Informasi
        Route::get('/tabsinformasi', [TabsInformasiController::class, 'index'])->name('admin.tabsinformasi');
        Route::get('/tabsinformasi/{id}/show', [TabsInformasiController::class, 'show'])->name('admin.tabsinformasi.show');
        Route::get('/tabsinformasi/create', [TabsInformasiController::class, 'create'])->name('admin.tabsinformasi.create');
        Route::post('/tabsinformasi/store', [TabsInformasiController::class, 'store'])->name('admin.tabsinformasi.store');
        Route::get('/admin/tabsinformasi/{id}/edit', [TabsInformasiController::class, 'edit'])->name('admin.tabsinformasi.edit');
        Route::patch('/admin/tabsinformasi/{id}/update', [TabsInformasiController::class, 'update'])->name('admin.tabsinformasi.update');
        Route::delete('/admin/tabsinformasi/{id}', [TabsInformasiController::class, 'destroy'])->name('admin.tabsinformasi.destroy');

        // Route Section Tabs Informasi
        Route::get('/sectiontabsinformasi', [SectionTabsInformasiController::class, 'index'])->name('admin.sectiontabsinformasi');
        Route::get('/sectiontabsinformasi/{id}/show', [SectionTabsInformasiController::class, 'show'])->name('admin.sectiontabsinformasi.show');
        Route::get('/sectiontabsinformasi/create', [SectionTabsInformasiController::class, 'create'])->name('admin.sectiontabsinformasi.create');
        Route::post('/sectiontabsinformasi/store', [SectionTabsInformasiController::class, 'store'])->name('admin.sectiontabsinformasi.store');
        Route::get('/admin/sectiontabsinformasi/{id}/edit', [SectionTabsInformasiController::class, 'edit'])->name('admin.sectiontabsinformasi.edit');
        Route::patch('/admin/sectiontabsinformasi/{id}/update', [SectionTabsInformasiController::class, 'update'])->name('admin.sectiontabsinformasi.update');
        Route::delete('/admin/sectiontabsinformasi/{id}', [SectionTabsInformasiController::class, 'destroy'])->name('admin.sectiontabsinformasi.destroy');
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

// Formulir Pendaftaran
Route::get('/formulir-pendaftaran', [FrontFormulirPendaftaranController::class, 'index'])->name('formulir-pendaftaran');




require __DIR__ . '/auth.php';
