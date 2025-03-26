@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    <!-- Page Header Start -->
    <section class="page-header"
    style="background-image: url('{{ asset('template/frontend/assets/images/backgrounds/blog-page-bg.jpg') }}');">
    <div class="page-header__vartical-line-wrap">
    <div class="page-header__vartical-line page-header__vartical-line--one"></div>
    <div class="page-header__vartical-line page-header__vartical-line--two"></div>
    <div class="page-header__vartical-line page-header__vartical-line--three"></div>
    </div><!-- /.page-header__vartical-line-wrap -->
    <div class="container">
    <div class="page-header__circle"></div><!-- /.page-header__circle -->
    <div class="page-header__inner slide-title">
    <h1 class="page-header__heading slide-title__heading">Kategori Tema Pelatihan</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item"><a href="{{ route('tema-pelatihan') }}" class="noile-breadcrumb__link">Tema Pelatihan</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Kategori Tema Pelatihan</li>
    </ul>
    </div>
    </div><!-- /.page-header__inner -->
    <a href='#' class="page-header__circle-text">
    <div class="page-header__circle-text-bg"
    style="background-image: url('assets/images/resources/circle-text-bg.png');"></div>
    <div class="page-header__curved-circle curved-circle">
    <!-- curved-circle start-->
    <div class="page-header__curved-circle--item curved-circle--item" data-circle-text-options='{
     "radius": 92,
     "forceWidth": true,
     "forceHeight": true}'>
    . design for your digital products
    </div>
    </div><!-- curved-circle end-->
    </a><!-- /.page-header__circle-text -->
    </div><!-- /.container -->
    <div class="page-header__shape-box">
    <svg class="page-header__shape-one" width="389" height="319" viewBox="0 0 389 319" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path d="M460.4 600L0 0L162.2 20L610.5 600H460.4Z" />
    <path d="M460.699 600H310.799L2.99936 195H152.849L460.699 600Z" />
    </svg>
    </div><!-- /.page-header__shape-box -->
    </section>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <section class="blog-sidebar blog">
    <div class="container">
    <div class="row g-4">
    <div class="col-xl-8 col-lg-7">
    <div class="blog-sidebar__right container-fluid">
    <div class="row g-4">

    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="blog__card">
    <div class="table-responsive">
      <h1 class="fw-semibold mb-4">Bimtek Tata Ruang Perpajakan </h1>
      <table id="pelatihanTable" class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
        <th>No</th>
        <th>Nama Pelatihan</th>
        <th>Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>1</td>
        <td>Pelatihan Manajemen Proyek</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>2</td>
        <td>Pelatihan Digital Marketing</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>3</td>
        <td>Pelatihan Desain Grafis</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>4</td>
        <td>Pelatihan Public Speaking</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>1</td>
        <td>Pelatihan Manajemen Proyek</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>2</td>
        <td>Pelatihan Digital Marketing</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>3</td>
        <td>Pelatihan Desain Grafis</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>4</td>
        <td>Pelatihan Public Speaking</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>1</td>
        <td>Pelatihan Manajemen Proyek</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>2</td>
        <td>Pelatihan Digital Marketing</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>3</td>
        <td>Pelatihan Desain Grafis</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
        <tr>
        <td>4</td>
        <td>Pelatihan Public Speaking</td>
        <td><a href="{{ route('detail-tema-pelatihan') }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>
      </tbody>
      </table>
    </div>
    </div><!-- /.blog-one__item -->
    </div>
    <hr>
    </div><!-- /.row -->
    </div><!-- /.blog-sidebar__right -->
    </div>

    <div class="col-xl-4 col-lg-5">
    <div class="blog-sidebar__left page-sidebar">

    <div class="page-sidebar__social page-sidebar__single wow animated fadeInRigh text-center" data-wow-delay="0.1s"
    data-wow-duration="1500ms">
    <h3 class="page-sidebar__title">Informasi Pendaftaran</h3>
    <p class="page-sidebar__text text-center">
    PENDAFTARAN PESERTA BIMTEK

    Telp. 021-21478758
    Call-Sms-WA. 082112366662-0811180721 a/n. Arifin
    Email: lediknas@gmail.com

    Request kegiatan bimtek anda dengan menentukan materi bimtek, tanggal dan lokasi disesuaikan dengan permintaan calon
    peserta
    </p>
    </div><!-- /.page-sidebar__social -->
    <div class="page-sidebar__service page-sidebar__single wow animated fadeInRight" data-wow-delay="0.1s"
    data-wow-duration="1500ms">
    <h3 class="page-sidebar__title">Tema Pelatihan:</h3>
    <ul class="page-sidebar__service-list">
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Manajemen Pegawai Negeri Sipil</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Kepegawaian</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Perpajakan</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Bidang Keuangan</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Bidang Umum</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Humas Protokol MC</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Produk Hukum</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Bidang Tata Ruang</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Bidang Desa</a>
    </li>
    <li class="page-sidebar__service-item">
    <a href="#" class="page-sidebar__service-link">Bimtek Bidang Pertahanan</a>
    </li>

    </ul>
    </div><!-- /.blog-sidebar__service -->
    <div class="page-sidebar__contact page-sidebar__single wow animated fadeInRight" data-wow-delay="0.1s"
    data-wow-duration="1500ms"
    style="background-image: url('{{ asset('template/frontend/assets/images/resources/sidebar-contact-bg.jpg') }}');">
    <div class="page-sidebar__contact-wrap">
    <h3 class="page-sidebar__contact-title mb-0">Hubung Kami:</h3>
    <p class="page-sidebar__contact-text mb-3">Cari tau informasi lebih lanjut!</p>
    <a href="tel:(1)245-45678" class="page-sidebar__contact-btn">
    <span class="page-sidebar__contact-icon icon-phone"></span>
    <h4 class="page-sidebar__contact-text">(62) 8245-45678</h4>
    </a>
    </div>
    </div><!-- /.page-sidebar__contact -->

    </div><!-- /.page-sidebar -->
    </div>
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Detail End -->

    <!-- Prosedur Start -->
    <section class="solution-one">
    <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-12">
    <div class="solution-one__content sec-title">
    <div class="sec-title__top-wrap d-flex justify-content-center">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Informasi Penting!</p>
    </div>
    <h4 class="solution-one__heading sec-title__heading text-center">Informasi Pendaftaran dan Biaya Kontribusi Mengikuti Bimbingan Teknis.
    </h4>
    <div class="solution-one__main-tab-box tabs-box mt-5">
    <ul class="tab-buttons justify-content-center">
    <li data-tab="#MarketingSolution" class="tab-btn active-btn"><span>Prosedur Pendaftaran</span></li>
    <li data-tab="#BusinessSolution" class="tab-btn"><span>Keuntungan Peserta</span></li>
    <li data-tab="#Business-Growth" class="tab-btn"><span>Syarat dan Ketentuan</span></li>
    </ul><!-- solution-tab -->
    <div class="tabs-content">
    <!--Marketing Solution-tab-start-->
    <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="MarketingSolution"
    style="display: block;">
    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
    Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
    feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
    <div class="solution-one__service-wrap">
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--one">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">Advertising and marketing</p>
    </div>
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--two">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">IT Ideation & Evaluation</p>
    </div>
    </div><!-- /.solution-one__service-wrap -->
    </div>
    <!--Marketing Solution-tab-end-->
    <!--Business Solution-tab-start-->
    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="BusinessSolution" style="display: none;">
    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
    Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
    feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
    <div class="solution-one__service-wrap">
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--one">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">Advertising and marketing</p>
    </div>
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--two">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">IT Ideation & Evaluation</p>
    </div>
    </div><!-- /.solution-one__service-wrap -->
    </div>
    <!--Business Solution-tab-end-->
    <!--Business Growth-tab-start-->
    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="Business-Growth" style="display: none;">
    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
    Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
    feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
    <div class="solution-one__service-wrap">
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--one">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">Advertising and marketing</p>
    </div>
    <div class="solution-one__service">
    <div class="solution-one__service-icon solution-one__service-icon--two">
    <i class="icofont-ui-check"></i>
    </div>
    <p class="solution-one__service-title">IT Ideation & Evaluation</p>
    </div>
    </div><!-- /.solution-one__service-wrap -->
    </div>
    <!--Business Growth-tab-end-->
    </div>
    </div>
    <!-- /.olution-one__main-tab-box -->
    </div><!-- /.solution-one__content -->
    </div>
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Prosedur End -->

@endsection