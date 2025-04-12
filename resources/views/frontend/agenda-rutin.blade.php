@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    <!-- Page Header Start -->
    <section class="page-header"
        style="background-image: url('{{ asset('storage/' . $latestBanner?->gambar ?? 'template/backend/package/html/main/assets/images/backgrounds/blog-page-bg.jpg') }}');">
    <div class="page-header__vartical-line-wrap">
    <div class="page-header__vartical-line page-header__vartical-line--one"></div>
    <div class="page-header__vartical-line page-header__vartical-line--two"></div>
    <div class="page-header__vartical-line page-header__vartical-line--three"></div>
    </div><!-- /.page-header__vartical-line-wrap -->
    <div class="container">
    <div class="page-header__circle"></div><!-- /.page-header__circle -->
    <div class="page-header__inner slide-title">
    <h1 class="page-header__heading slide-title__heading">Agenda Rutin</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Agenda Rutin</li>
    </ul>
    </div>
    </div><!-- /.page-header__inner --> 
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

    <!-- Agenda Rutin Start -->
    <section class="tujuan-lembaga">
    <div class="container my-5">
    <div class="row">
    <div class="col-12">
    <div class="solution-one__content sec-title">
    <div class="sec-title__top-wrap">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Agenda Rutin</p>
    </div>
    <h2 class="solution-one__heading sec-title__heading">Agenda Rutin
    </h2>
    <!-- /.olution-one__main-tab-box -->
    </div><!-- /.solution-one__content -->
    </div>
    <div class="col-md-12 mb-3">
    <div class="blog-details__card-desc-three-box">
    <p class="blog-details__card-desc-three">Menyelenggarakan Bimtek, Diklat, Workshop dan Study Banding Bagi Aparatur Pemerintah Daerah;
    Menyelenggarakan pelatihan, pendidikan dan peningkatan SDM dalam skala nasional berbasis kompetensi;
    Meningkatkan kompetensi bagi para aparatur daerah legislatif maupun eksekutif untuk perbaikan pelayanan publik dasar;
    Peningkatan Kapasitas fungsi aparatur daerah untuk perbaikan pelayanan publik dasar;
    Untuk memberikan pengetahuan baru kepada aparatur daerah untuk perbaikan pelayanan publik dasar.</p>
    </div><!-- /.blog-details__card-bottom -->
    </div>
    </div>
    </div>
    </section>
    <!-- Agenda Rutin End -->

@endsection