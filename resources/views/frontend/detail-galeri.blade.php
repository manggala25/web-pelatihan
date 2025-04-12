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

    <!-- Section Page Start -->
    <section class="case-study-details">
    <div class="container">
    <div class="row g-4">
    <div class="col-12 wow animated fadeInUp" data-wow-duration="1500ms">
    <div class="case-study-details__img-box">
    <img src="{{ asset('storage/' . $portofolio->cover) }}"
    alt="{{ $portofolio->judul_portofolio ?? 'Portofolio' }}" class="case-study-details__img">
    <p class="case-study-details__card-category">{{ $portofolio->kategori_tema ?? '-' }}</p>
    </div>
    </div>

    <div class="col-xl-8 col-lg-7">
    <div class="case-study-details__content">
    <div class="case-study-details__text-one-box case-study-details__item">
    <h3 class="case-study-details__md-title">
    {{ $portofolio->judul_portofolio ?? 'Judul Tidak Tersedia' }}
    </h3>
    <p class="case-study-details__desc-one case-study-details__desc">
    {!! nl2br(htmlspecialchars_decode(e($portofolio->content ?? 'Konten tidak tersedia.'))) !!}
    </p>
    </div>
    </div>
    </div>

    <div class="col-xl-4 col-lg-5">
    <div class="case-study-details__info-box">
    <div class="case-study-details__info case-study-details__info-item wow animated fadeInRight" data-wow-delay="0.1s"
    data-wow-duration="1500ms">
    <ul class="case-study-details__info-list">
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Nama Klien:</p>
    <p class="case-study-details__info-title">{{ $portofolio->nama_klien ?? '-' }}</p>
    </li>
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Tema Pelatihan:</p>
    <p class="case-study-details__info-title">{{ $portofolio->kategori_tema ?? '-' }}</p>
    </li>
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Nama Pelatihan:</p>
    <p class="case-study-details__info-title">{{ $portofolio->nama_pelatihan ?? '-' }}</p>
    </li>
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Waktu:</p>
    <p class="case-study-details__info-title">
    {{ $portofolio->waktu_awal ? date('d F Y', strtotime($portofolio->waktu_awal)) : '-' }} -
    {{ $portofolio->waktu_akhir ? date('d F Y', strtotime($portofolio->waktu_akhir)) : '-' }}
    </p>
    </li>
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Nama Tempat:</p>
    <p class="case-study-details__info-title">{{ $portofolio->nama_tempat ?? '-' }}</p>
    </li>
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top">Kabupaten/Kota:</p>
    <p class="case-study-details__info-title">
    {{ $portofolio->kota_kabupaten ?? '-' }}, {{ $portofolio->provinsi ?? '-' }}
    </p>
    </li>
    @if(!empty($portofolio->link_klien))
    <li class="case-study-details__info-item">
    <p class="case-study-details__info-top"> Website Link:</p>
    <a href="{{ $portofolio->link_klien ?? '#' }}"
    class="case-study-details__info-title case-study-details__info--link">{{ $portofolio->link_klien ?? '-' }}"</a>
    </li>
    @endif
    </ul>
    <svg class="case-study-details__info-shape" xmlns="http://www.w3.org/2000/svg" width="222" height="230"
    viewBox="0 0 222 230" fill="none">
    <path d="M98.55 91.9998L75.0334 109.136L145.728 218.98L179 219L98.55 91.9998Z" />
    <path d="M164.16 42.9998H109.44L0.000167847 187H53.2802L164.16 42.9998Z" />
    <path d="M179.691 -0.000244141L13.2508 219H52.6708L221.301 -0.000244141H179.691Z" />
    </svg>
    </div>
    </div>
    </div>
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Section Page End -->


@endsection