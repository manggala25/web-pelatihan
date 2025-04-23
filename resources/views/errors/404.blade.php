<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
  

  {{-- backgroun section dari google --}}
  <section class="error-page" style="background-image: url('https://images.unsplash.com/photo-1643346173514-74a489cedccf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; width: 100%;">
    <div class="error-page__vartical-line-wrap">
      <div class="error-page__vartical-line error-page__vartical-line--one"></div>
      <div class="error-page__vartical-line error-page__vartical-line--two"></div>
      <div class="error-page__vartical-line error-page__vartical-line--three"></div>
    </div><!-- /.error-page__vartical-line-wrap -->
    <div class="container">
      <div class="error-page__content">
        <div class="error-page__sec-title">
          <h1 class="error-page__heading">4<span>0</span>4</h1>
          <img src="{{ asset('template/frontend/assets/images/resources/error-cartoon.png') }}" alt="error-cartoon" class="error-page__cartoon">
          <img src="{{ asset('template/frontend/assets/images/shapes/error-shape-1-1.png') }}" alt="error-shape" class="error-page__shape-img">
        </div><!-- /.error-page__sec-title -->
        <div class="error-page__link-wrap">
          <span class="error-page__arrow icon-arrow-right-2"></span>
          <a href="{{ route('beranda') }}" class="error-page__text-link">Kembali Ke Beranda</a>
        </div><!-- /.error-page__link-wrap -->
        <h3 class="error-page__desc">Maaf, halaman yang Anda cari tidak ditemukan.</h3>
      </div><!-- /.error-page__content -->
    </div><!-- /.container -->
    <div class="error-page__shape-box">
      <svg class="error-page__shape-one" width="389" height="556" viewBox="0 0 389 556" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M460.4 600L0 0L162.2 20L610.5 600H460.4Z" />
        <path d="M460.699 600H310.799L2.99936 195H152.849L460.699 600Z" />
      </svg>
      <img src="{{ asset('template/frontend/assets/images/resources/error-n-letter.png') }}" alt="n-letter" class="error-page__letter-one">
    </div><!-- /.error-page__shape-box -->
  </section>

  <x-script />
</body>

</html>