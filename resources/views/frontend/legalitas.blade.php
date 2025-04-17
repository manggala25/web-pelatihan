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
    <h1 class="page-header__heading slide-title__heading">Legalitas</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Legalitas</li>
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
                    <div class="col-12">
                        <div class="solution-one__content sec-title">
                            <div class="sec-title__top-wrap">
                                @if(!empty($asset->logo_reguler))
                                    <img src="{{ asset('storage/' . $asset->logo_reguler) }}" alt="top-title-logo">
                                @endif
                                <p class="sec-title__top">
                                    {{ $legalitas ? $legalitas->top_title : 'legalitas' }}
                                </p>
                            </div>
                            <h2 class="solution-one__heading sec-title__heading">
                                {{ $legalitas ? $legalitas->heading : 'Heading..' }}
                            </h2>
                            <!-- /.olution-one__main-tab-box -->
                        </div><!-- /.solution-one__content -->
                    </div>
                    <div class="col-md-12 mb-3">
                        <p class="blog-details__card-desc-three">
                            {!! nl2br(htmlspecialchars_decode(e($legalitas->content ?? 'konten masih kosong...'))) !!}
                        </p>
                    </div>
                    {{-- Informasi Penting --}}
                    <x-informasipenting :tabs="$tabs" :sectiontabsinformasi="$sectiontabsinformasi" />
                </div>

                <!-- Sidebar Start -->
                <x-sidebarfront :kategoriTema="$kategori_tema" :kontak="$kontak"
                    :informasipendaftaran="$informasipendaftaran" :bannerKontak="$bannerKontak" />

            </div>
        </div>
    </section>
    <!-- Section End -->

@endsection