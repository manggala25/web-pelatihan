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
  <h1 class="page-header__heading slide-title__heading">Detail Kegiatan</h1>
  <div class="page-header__breadcrumb-wrap">
  <span class="page-header__arrow icon-arrow-right-2"></span>
  <ul class="noile-breadcrumb">
  <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item"><a href="{{ route('galeri') }}" class="noile-breadcrumb__link">Galeri</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item">Detail Kegiatan</li>
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

  <!-- Team Page Start -->
  <section class="case-study-details">
  <div class="container">
    <div class="row g-4">
    <div class="col-12 wow animated fadeInUp" data-wow-duration="1500ms">
    <div class="case-study-details__img-box">
    <img src="{{ ('template/frontend/assets/images/case-study-details/case-study-details-1-1.jpg') }}" alt="case-study-details"
      class="case-study-details__img">
    <p class="case-study-details__card-category">Bimtek Bidang Keuangan</p>
    </div><!-- /.case-study-details__img-box -->
    </div>
    <div class="col-xl-8 col-lg-7">
    <div class="case-study-details__content">
    <div class="case-study-details__text-one-box case-study-details__item">
      <h3 class="case-study-details__md-title">
      PERENCANAAN DAN PELAPORAN PERTANGGUNGJAWABAN ADMINISTRASI KEUANGAN DAERAH BAGI BENDAHARA
      </h3>

      <p class="case-study-details__desc-one case-study-details__desc">
      Panitia mengundang narasumber dari Kemendagri membahas Aspek pengelolaan keuangan sesuai Permendagri nomor 77 tahun
      2020, narasumber dari kemenkeu membahas kewajiban perpajakan bendahara pemerintah dan Tata Cara Perhitungan Pelaporan
      Pajak Pada Pelaksanaan Belanja APBD dan APBDes serta Tarif dan Cara Perhitungan Pajak Barang

      Foto Bimtek Nasional | Bimtek Pajak Bendahara Keuangan Paniai
      </p>
    </div><!-- /.case-study-details__text-one-box -->
    </div><!-- /.case-study-details__content -->
    </div>
    <div class="col-xl-4 col-lg-5">
    <div class="case-study-details__info-box">
    <div class="case-study-details__info case-study-details__info-item wow animated fadeInRight"
      data-wow-delay="0.1s" data-wow-duration="1500ms">
      <ul class="case-study-details__info-list">
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Nama Klien:</p>
      <p class="case-study-details__info-title">MD Towkib Tanvir (MG)</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Tema Pelatihan:</p>
      <p class="case-study-details__info-title">Pengelolaan Keuangan</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Nama Pelatihan:</p>
      <p class="case-study-details__info-title">Bimtek Bidang Keuangan</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Waktu:</p>
      <p class="case-study-details__info-title">12 Januari 2022 - 15 Januari 2022</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Nama tempat:</p>
      <p class="case-study-details__info-title">Pusat Pendidikan Nasional</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Kabupaten/ Kota:</p>
      <p class="case-study-details__info-title">Bandung, Jawa Barat</p>
      </li>
      <li class="case-study-details__info-item">
      <p class="case-study-details__info-top">Website Link:</p>
      <a href="www.creativemela.com"
      class="case-study-details__info-title case-study-details__info--link">www.creativemela.com</a>
      </li>
      </ul>
      <svg class="case-study-details__info-shape" xmlns="http://www.w3.org/2000/svg" width="222" height="230"
      viewBox="0 0 222 230" fill="none">
      <path d="M98.55 91.9998L75.0334 109.136L145.728 218.98L179 219L98.55 91.9998Z" />
      <path d="M164.16 42.9998H109.44L0.000167847 187H53.2802L164.16 42.9998Z" />
      <path d="M179.691 -0.000244141L13.2508 219H52.6708L221.301 -0.000244141H179.691Z" />
      </svg>
    </div><!-- /.case-study-details__inf0 -->
    </div><!-- /.case-study-details__info-box -->
    </div>
    </div><!-- /.row -->
    <div class="pagination-box container-fluid">
    <div class="row gx-4 gy-5">
    <div class="col-md-3">
    <div class="pagination-box__prev-box">
      <a href="#" class="pagination-box__prev">
      <!-- <span class="pagination-box__icon icon-arrow-up"></span> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
      <path d="M7.5 25.0002L7.5 1.00024M7.5 1.00024L1 7.78285M7.5 1.00024L14 7.78285" stroke="#1D1D1D" />
      </svg>
      <p class="pagination-box__text pagination-box__text--prev">Previous</p>
      </a>
    </div>
    <!-- /.pagination-box__prev-box -->
    </div>
    <div class="col-md-6">
    <ul class="pagination-box__list">
      <li class="pagination-box__item">
      <a href="#" class="pagination-box__link">1</a>
      </li>
      <li class="pagination-box__item pagination-box__item--active">
      <a href="#" class="pagination-box__link">2</a>
      </li>
      <li class="pagination-box__item">
      <a href="#" class="pagination-box__link">3</a>
      </li>
    </ul><!-- /.pagination-box__list -->
    </div>
    <div class="col-md-3">
    <div class="pagination-box__next-box">
      <a href="#" class="pagination-box__next">
      <p class="pagination-box__text pagination-box__text--next">Next</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
      <path d="M7.49023 0L7.49023 24M7.49023 24L0.990234 17.2174M7.49023 24L13.9902 17.2174"
      stroke="#1D1D1D" />
      </svg>
      <!-- <span class="pagination-box__icon icon-arrow-up"></span> -->
      </a>
    </div>
    <!-- /.pagination-box__next-box -->
    </div>
    </div><!-- /.row -->
    </div><!-- /.pagination-wrapper -->
  </div><!-- /.container -->
  </section>
  <!-- Team Page End -->

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
  <h4 class="solution-one__heading sec-title__heading text-center">Informasi Pendaftaran dan Biaya Kontribusi
  Mengikuti Bimbingan Teknis.
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