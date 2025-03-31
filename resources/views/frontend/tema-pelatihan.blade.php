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
  <h1 class="page-header__heading slide-title__heading">Tema Pelatihan</h1>
  <div class="page-header__breadcrumb-wrap">
  <span class="page-header__arrow icon-arrow-right-2"></span>
  <ul class="noile-breadcrumb">
  <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item">Tema Pelatihan</li>
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

  <!-- Section Start -->
  <section class="blog-sidebar blog">
  <div class="container">
  <div class="row g-4">
  <div class="col-xl-8 col-lg-7">
  <div class="case-study-sidebar__right container-fluid">
  <div class="row">
  <div class="col-12">
  <div class="solution-one__content sec-title">
  <div class="sec-title__top-wrap">
  <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
  <p class="sec-title__top">Tema Pelatihan</p>
  </div>
  <h2 class="solution-one__heading sec-title__heading">Pilihan Tema Pelatihan
  </h2>
  <p class="solution-one__desc">Di bawah ini adalah daftar Lorem ipsum dolor sit, amet consectetur adipisicing elit.tema pelatihan yang tersedia dalam pelatihan ini antara
  lain:</p>
  <!-- /.olution-one__main-tab-box -->
  </div><!-- /.solution-one__content -->
  </div>
  <div class="col-md-12 my-2 d-flex flex-wrap">
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan & Anak</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan & Anak</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan & Anak</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan & Anak</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  <div class="col-6 p-2">
  <div class="service-one__item">
  <div><span class="service-one__category mb-3">23 Pelatihan tersedia</span></div>
  <img src="{{ asset('template/frontend/assets/images/service/service-1-1.png') }}" alt="service" class="service-one__img">
  <h5 class="fw-bold mb-4">Bidang Gender Pemberdayaan Perempuan & Anak</h5>
  <a href="{{ route('kategori-tema-pelatihan') }}" class="service-one__btn noile-btn">Lihat Materi +</a>
  </div><!-- /.service-one__item -->
  </div>
  </div>
  </div>
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
    <path d="M7.49023 0L7.49023 24M7.49023 24L0.990234 17.2174M7.49023 24L13.9902 17.2174" stroke="#1D1D1D" />
    </svg>
    <!-- <span class="pagination-box__icon icon-arrow-up"></span> -->
    </a>
    </div>
    <!-- /.pagination-box__next-box -->
  </div>
  </div><!-- /.row -->
  </div><!-- /.pagination-wrapper -->
  <x-informasipenting />
  </div><!-- /.case-study-sidebar__right -->
  </div>
  <!-- Sidebar Start -->
  <x-sidebarfront />
  </div><!-- /.container -->
  </section>
  <!-- Section End -->

@endsection