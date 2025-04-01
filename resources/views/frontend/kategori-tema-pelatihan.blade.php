@extends('frontend.layouts.app')

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
    <h1 class="page-header__heading slide-title__heading">{{ $kategori->nama_kategori }}</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item"><a href="{{ route('tema-pelatihan') }}" class="noile-breadcrumb__link">Tema Pelatihan</a></li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Kategori Tema Pelatihan</li>
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
    <div class="solution-one__content sec-title wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="sec-title__top-wrap">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Kategori Tema Pelatihan</p>
    </div>
    <h2 class="solution-one__heading sec-title__heading">{{ $kategori->nama_kategori }}</h2>
    <p class="solution-one__desc">Di bawah ini adalah daftar nama-nama materi atau pelatihan yang tersedia dalam kategori ini:</p>
    </div>
    </div>
    <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="blog__card">
    <div class="table-responsive">
    <table id="pelatihanTable" class="table table-bordered table-striped">
    <thead class="table-dark">
    <tr>
    <th class="text-center">No</th>
    <th>Nama Pelatihan</th>
    <th class="text-center">Detail</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pelatihan as $key => $item)
    <tr>
    <td class="text-center">{{ $key + 1 }}</td>
    <td>{{ $item->nama_pelatihan }}</td>
    <td class="text-center">
    <a href="{{ route('detail-pelatihan', ['slug' => $item->slug]) }}" class="btn btn-sm btn-primary">Detail</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div><!-- /.blog-one__item -->
    </div>
    </div>
    <x-informasipenting />
    </div>
    </div>
    <x-sidebarfront :kategoriTema="$kategori_tema" />
    </div>
    </div>
    </section>
    <!-- Section End -->

@endsection