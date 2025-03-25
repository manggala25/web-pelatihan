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
    <h1 class="page-header__heading slide-title__heading">Visi & Misi</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Visi & Misi</li>
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

    <!-- Visi Misi Start -->
    <section class="visimisi">
    <div class="container my-5">
    <div class="row">
    <div class="col-12">
    <div class="solution-one__content sec-title">
    <div class="sec-title__top-wrap">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Visi & Misi</p>
    </div>
    <h2 class="solution-one__heading sec-title__heading">Visi & Misi Kami
    </h2>
    <!-- /.olution-one__main-tab-box -->
    </div><!-- /.solution-one__content -->
    </div>
    <div class="col-md-12 mb-3">
    <div class="blog-details__card-desc-three-box">
    <p class="blog-details__card-desc-three">VISI: <br> LEDIKNAS Menghadapi Persaingan dan Perkembangan Sumber Daya Manusia (SDM) Indonesia</p>
    </div><!-- /.blog-details__card-bottom -->
    </div>
    <div class="col-md-12 mb-2">
    <div class="blog-details__card-desc-three-box">
    <p class="blog-details__card-desc-three">MISI: <br><ul><li>Mengusahakan dan turut serta membantu Pemerintah Republik Indonesia dalam memajukan pendidikan umum, kesejahteraan dan
    keamanan, demi kepentingan bangsa dan negara, dalam menuju masyarakat Adil dan Makmur;</li><li>Membantu program pemerintah dalam meningkatkan produktifitas SDM dan mensosialisasikan dan mensikronisasikan antara
    kebijakan pemerintah pusat dan pemerintah daerah.</li></ul></p>
    </div><!-- /.blog-details__card-bottom -->
    </div>
    </div>
    </div>
    </section>
    <!-- Visi Misi End -->

@endsection