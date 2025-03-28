@extends('frontend.layouts.app')

@section('content')

  <!-- Page Header Start -->
  <section class="page-header" style="background-image: url('{{ asset('template/backend/package/html/main/assets/images/backgrounds/blog-page-bg.jpg') }}');">
    <div class="page-header__vartical-line-wrap">
    <div class="page-header__vartical-line page-header__vartical-line--one"></div>
    <div class="page-header__vartical-line page-header__vartical-line--two"></div>
    <div class="page-header__vartical-line page-header__vartical-line--three"></div>
    </div><!-- /.page-header__vartical-line-wrap -->
    <div class="container">
    <div class="page-header__circle"></div><!-- /.page-header__circle -->
    <div class="page-header__inner slide-title">
    <h1 class="page-header__heading slide-title__heading">Blog</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
      <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a></li>
      <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
      <li class="noile-breadcrumb__item">Blog</li>
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

  <section class="blog-page blog">
  <div class="container">
  <div class="row g-4">
    @if($blogs->count() > 0)
    @foreach ($blogs as $blog)
    <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="blog__card">
    <a href="{{ route('detail-blog', $blog->slug) }}" class="blog__card-img-box">
    @if (!empty($blog->thumbnail) && file_exists(public_path($blog->thumbnail)))
    @if (!empty($blog->thumbnail) && file_exists(storage_path('app/public/uploads/thumbnails/' . basename($blog->thumbnail))))
    <img src="{{ asset('storage/uploads/thumbnails/' . basename($blog->thumbnail)) }}" alt="{{ $blog->judul }}"
    class="blog__card-img">
    @else
    <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="Thumbnail Default" class="blog__card-img">
    @endif

    @else
    <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="Thumbnail Default" class="blog__card-img">
    @endif
    <p class="blog__card-category">{{ $blog->kategori }}</p>
    </a>
    <ul class="blog__card-comment-box">
    <li class="blog__card-comment-item">
    <p class="blog__card-comment">Diupload pada</p>
    </li>
    <li class="blog__card-comment-item blog__card-comment-item-divider">
    <p class="blog__card-comment">:</p>
    </li>
    <li class="blog__card-comment-item">
    <p class="blog__card-comment">{{ \Carbon\Carbon::parse($blog->published_at)->format('d F Y') }}</p>
    </li>
    </ul>
    <a href="{{ route('detail-blog', parameters: $blog->slug) }}" class="blog__card-title">
    {{ Str::limit($blog->judul, 50) }}
    </a>
    </div>
    </div>
  @endforeach
  @else
    <div class="col-12 text-center">
    <h4 class="text-muted">Tidak ada blog ditemukan atau masih kosong.</h4>
    </div>
  @endif
  </div>

  <!-- Pagination -->
  <div class="pagination-box container-fluid">
    <div class="row gx-4 gy-5">
    <div class="col-md-3">
    @if ($blogs->onFirstPage())
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
  <a href="{{ $blogs->previousPageUrl() }}" class="pagination-box__prev">
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
    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
    <li class="pagination-box__item {{ $blogs->currentPage() == $page ? 'pagination-box__item--active' : '' }}">
    <a href="{{ $url }}" class="pagination-box__link">{{ $page }}</a>
    </li>
  @endforeach
    </ul>
    </div>

    <div class="col-md-3">
    @if ($blogs->hasMorePages())
    <div class="pagination-box__next-box">
    <a href="{{ $blogs->nextPageUrl() }}" class="pagination-box__next">
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
    </div>
  </div>

  </section>

@endsection