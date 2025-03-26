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
  <h1 class="page-header__heading slide-title__heading">Jadwal Pelatihan</h1>
  <div class="page-header__breadcrumb-wrap">
  <span class="page-header__arrow icon-arrow-right-2"></span>
  <ul class="noile-breadcrumb">
  <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item">Jadwal Pelatihan</li>
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

  <!-- Pilihan Jadwal Start -->
  <section class="pilihan-jadwal py-5">
  <div class="container">
  <div class="row">
  <div class="col-12 mb-4">
  <div class="solution-one__content sec-title">
    <div class="sec-title__top-wrap">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Tema Pelatihan</p>
    </div>
    <h2 class="solution-one__heading sec-title__heading">Pilihan Jadwal Pelatihan
    </h2>
    <p class="solution-one__desc">Berikut adalah jadwal pelatihan yang tersedia dalam berbagai bulan.</p>
    <!-- /.olution-one__main-tab-box -->
  </div><!-- /.solution-one__content -->
  </div>

  <div class="col-12">
  <!-- Navigation Tabs -->
  <ul class="nav nav-tabs justify-content-center border-bottom" id="jadwalTabs" role="tablist"
  style="border-bottom: 2px dashed #ccc;">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="jan-tab" data-bs-toggle="tab" data-bs-target="#januari" type="button"
    role="tab">Januari</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="feb-tab" data-bs-toggle="tab" data-bs-target="#februari" type="button"
    role="tab">Februari</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="mar-tab" data-bs-toggle="tab" data-bs-target="#maret" type="button"
    role="tab">Maret</button>
  </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content mt-4" id="jadwalTabsContent">
  <!-- Januari -->
  <div class="tab-pane fade show active" id="januari" role="tabpanel">
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
    <tr>
    <th>No</th>
    <th>Waktu</th>
    <th>Lokasi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Senin, 15 Januari 2025</td>
    <td>Jakarta</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Rabu, 31 Januari 2025</td>
    <td>Bandung</td>
    </tr>
    </tbody>
    </table>
  </div>

  <!-- Februari -->
  <div class="tab-pane fade" id="februari" role="tabpanel">
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
    <tr>
    <th>No</th>
    <th>Waktu</th>
    <th>Lokasi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Jumat, 9 Februari 2025</td>
    <td>Surabaya</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Sabtu, 24 Februari 2025</td>
    <td>Yogyakarta</td>
    </tr>
    </tbody>
    </table>
  </div>

  <!-- Maret -->
  <div class="tab-pane fade" id="maret" role="tabpanel">
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
    <tr>
    <th>No</th>
    <th>Waktu</th>
    <th>Lokasi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Senin, 12 Maret 2025</td>
    <td>Medan</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Jumat, 29 Maret 2025</td>
    <td>Bali</td>
    </tr>
    </tbody>
    </table>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- Pilihan Jadwal End -->


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