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
  <h1 class="page-header__heading slide-title__heading">Detail Tema Pelatihan</h1>
  <div class="page-header__breadcrumb-wrap">
  <span class="page-header__arrow icon-arrow-right-2"></span>
  <ul class="noile-breadcrumb">
  <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item"><a href="{{ route('tema-pelatihan') }}" class="noile-breadcrumb__link">Tema Pelatihan</a>
  </li>
  <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
  <li class="noile-breadcrumb__item">Detail Tema Pelatihan</li>
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
    <div class="solution-one__content sec-title">
      <div class="sec-title__top-wrap">
      <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
      <p class="sec-title__top">Bimtek Kepegawaian</p>
      </div>
      <h2 class="solution-one__heading sec-title__heading">Bimtek Manajemen Pegawai Negeri Sipil PP 17 Tahun 2020
      Perubahan PP 11 Tahun 2017.
      </h2>
      <p class="blog-details__card-desc-one">
      Penataan birokrasi merupakan salah satu kebijakan pemerintah yang bertujuan salah satunya adalah untuk
      penyederhanaan
      birokrasi. Kebijakan ini dapat berdampak terhadap perubahan pengaturan manajemen aparatur sipil negara pada
      instansi
      pemerintah maka Presiden dapat menerbitkan Peraturan Presiden. Adalah tugas pemerintah untuk tetap dapat menjamin
      karier
      dan juga hak PNS yang terkena dampak penataan birokrasi dalam penyelenggaraan manajemen. PP Nomor 17 Tahun 2020

      Peraturan Pemerintah Nomor 17 Tahun 2020 Perubahan atas Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen
      Pegawai Negeri Sipil ini berisi ketentuan mengenai beberapa perubahan dalam ketentuan Manajemen PNS yang mengatur
      tentang pendelegasian kewenangan Presiden, kedudukan JF, mutasi JPT, penugasan PNS, pengembangan kompetensi, BUP
      Pejabat
      Fungsional yang diberhentikan sementara, dan ketentuan penyetaraar: jabatan akibat dari penataan birokrasi.
      </p>
      <!-- /.olution-one__main-tab-box -->
    </div><!-- /.solution-one__content -->

    <x-informasipenting />
    </div>
    <!-- Sidebar Start -->
    <x-sidebarfront />
    </div><!-- /.container -->
  </section>
  <!-- Section End -->

@endsection