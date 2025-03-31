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
    <h1 class="page-header__heading slide-title__heading">Galeri Portofolio</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Galeri Portofolio</li>
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
        <div class="row g-4">
        @if ($portofolio->count() > 0)
      @foreach ($portofolio as $item)
      <div class="col-xl-6 col-lg-12 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
      <div class="case-study__item">
      <div class="case-study__item-img-box">
      <img src="{{ asset('storage/' . $item->cover) }}" alt="{{ $item->judul_portofolio }}"
      class="case-study__item-img">
      <p class="case-study__item-desc">{{ $item->judul_portofolio }}</p>
      <h4 class="case-study__item-title">{{ $item->kategori_tema }}</h4>
      </div>
      <a href="{{ route('detail-galeri', $item->slug) }}" class="case-study__item-btn">
      <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
      </a>
      </div><!-- /.case-study__item -->
      </div>
    @endforeach
    @else
    <div class="col-12 text-center">
      <h4 class="text-muted">Tidak ada Portofolio ditemukan atau masih kosong.</h4>
    </div>
  @endif

        </div><!-- /.row -->

        <div class="pagination-box container-fluid">
        <div class="row gx-4 gy-5">
          <div class="col-md-3">
          @if ($portofolio->onFirstPage())
        <div class="pagination-box__prev-box disabled">
        <span class="pagination-box__prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
          <path d="M7.5 25.0002L7.5 1.00024M7.5 1.00024L1 7.78285M7.5 1.00024L14 7.78285" stroke="#ccc" />
        </svg>
        <p class="pagination-box__text pagination-box__text--prev">Previous</p>
        </span>
        </div>
      @else
      <div class="pagination-box__prev-box">
      <a href="{{ $portofolio->previousPageUrl() }}" class="pagination-box__prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
        <path d="M7.5 25.0002L7.5 1.00024M7.5 1.00024L1 7.78285M7.5 1.00024L14 7.78285" stroke="#1D1D1D" />
      </svg>
      <p class="pagination-box__text pagination-box__text--prev">Previous</p>
      </a>
      </div>
    @endif
          </div>

          <div class="col-md-6">
          <ul class="pagination-box__list">
            @foreach ($portofolio->getUrlRange(1, $portofolio->lastPage()) as $page => $url)
        <li
        class="pagination-box__item {{ $portofolio->currentPage() == $page ? 'pagination-box__item--active' : '' }}">
        <a href="{{ $url }}" class="pagination-box__link">{{ $page }}</a>
        </li>
      @endforeach
          </ul>
          </div>

          <div class="col-md-3">
          @if ($portofolio->hasMorePages())
        <div class="pagination-box__next-box">
        <a href="{{ $portofolio->nextPageUrl() }}" class="pagination-box__next">
        <p class="pagination-box__text pagination-box__text--next">Next</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
          <path d="M7.49023 0L7.49023 24M7.49023 24L0.990234 17.2174M7.49023 24L13.9902 17.2174" stroke="#1D1D1D" />
        </svg>
        </a>
        </div>
      @else
      <div class="pagination-box__next-box disabled">
      <span class="pagination-box__next">
      <p class="pagination-box__text pagination-box__text--next">Next</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
        <path d="M7.49023 0L7.49023 24M7.49023 24L0.990234 17.2174M7.49023 24L13.9902 17.2174" stroke="#ccc" />
      </svg>
      </span>
      </div>
    @endif
          </div>
        </div><!-- /.row -->
        </div><!-- /.pagination-wrapper -->
      </div><!-- /.case-study-sidebar__right -->

      <x-informasipenting />
      </div>
      <!-- Sidebar Start -->
      <x-sidebarfront />
      </div><!-- /.container -->
    </section>
    <!-- Section End -->
@endsection