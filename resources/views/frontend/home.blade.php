@extends('frontend.layouts.app') <!-- Memanggil layout utama -->

@section('content')
    <!-- Main Slider Start -->
    <section class="main-slider">
    <div class="main-slider__carousel noile-owl__carousel owl-carousel owl-theme"
    data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false, "navSpeed": 3000}'>

    {{-- Slide One --}}
    <div class="main-slider__slide main-slider__slide-one item">
    <div class="main-slider__bg" style="background-image: url('https://img.freepik.com/free-photo/idyllic-shot-huge-mountain-covered-vegetation-with-body-water-its-base_181624-21444.jpg?t=st=1742673839~exp=1742677439~hmac=50973426614eeffb9c55dd7710467fb54712cca4844343f44877a7fdffe0bdda&w=1380')">
    <div class="main-slider__vartical-line-wrap slide-title">

    <span class="main-slider__vartical-text slide-title__vartical-text">Pelatihan Dinas Pemerintahan</span>
    <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
    </div><!-- /.main-slider__vartical-line-wrap -->
    </div> <!-- /.Slide One BG -->
    <div class="main-slider__container container">
    <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
    <div class="main-slider__content slide-title">
    {{-- Judul --}}
    <h1 class="main-slider__title slide-title__heading">Pelatihan Bersama Dinas Kehutanan.</h1>
    <div class="main-slider__desc-wrap slide-title__desc-wrap">
    <span class="main-slider__arrow icon-arrow-right-2"></span>
    {{-- Paragraf --}}
    <p class="main-slider__desc">Bimtek Tata Ruang</p>
    </div>
    <div class="main-slider__btn-box slide-title__btn-box">
    <a href="about.html" class="main-slider__btn noile-btn">Free consultation +</a>
    </div>
    </div>
    <a href='#' class="main-slider__circle-text">
    <div class="main-slider__circle-text-bg"
    style="background-image: url('https://img.freepik.com/free-vector/colorful-bird-illustration-gradient_343694-1741.jpg?t=st=1742675062~exp=1742678662~hmac=b1772663c9c4057c1472997db568bdc5d34e85f2e8e6b3c8c53a09f5e044ff01&w=900');"></div>
    <div class="main-slider__curved-circle curved-circle">
    <!-- curved-circle start-->
    <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
     "radius": 92,
     "forceWidth": true,
     "forceHeight": true}'>
    . design for your digital products
    </div>
    </div><!-- curved-circle end-->
    </a><!-- /.main-slider__circle-text -->
    </div>
    </div>

    {{-- Slide Two --}}
    <div class="main-slider__slide main-slider__slide-one item">
    <div class="main-slider__bg" style="background-image: url('https://img.freepik.com/free-photo/idyllic-shot-huge-mountain-covered-vegetation-with-body-water-its-base_181624-21444.jpg?t=st=1742673839~exp=1742677439~hmac=50973426614eeffb9c55dd7710467fb54712cca4844343f44877a7fdffe0bdda&w=1380')">
    <div class="main-slider__vartical-line-wrap slide-title">

    <span class="main-slider__vartical-text slide-title__vartical-text">Pelatihan Dinas Pemerintahan</span>
    <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
    <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
    </div><!-- /.main-slider__vartical-line-wrap -->
    </div> <!-- /.Slide One BG -->
    <div class="main-slider__container container">
    <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
    <div class="main-slider__content slide-title">
    {{-- Judul --}}
    <h1 class="main-slider__title slide-title__heading">Pelatihan Bersama Dinas Kehutanan.</h1>
    <div class="main-slider__desc-wrap slide-title__desc-wrap">
    <span class="main-slider__arrow icon-arrow-right-2"></span>
    {{-- Paragraf --}}
    <p class="main-slider__desc">Bimtek Tata Ruang</p>
    </div>
    <div class="main-slider__btn-box slide-title__btn-box">
    <a href="about.html" class="main-slider__btn noile-btn">Free consultation +</a>
    </div>
    </div>
    <a href='#' class="main-slider__circle-text">
    <div class="main-slider__circle-text-bg"
    style="background-image: url('https://img.freepik.com/free-vector/colorful-bird-illustration-gradient_343694-1741.jpg?t=st=1742675062~exp=1742678662~hmac=b1772663c9c4057c1472997db568bdc5d34e85f2e8e6b3c8c53a09f5e044ff01&w=900');"></div>
    <div class="main-slider__curved-circle curved-circle">
    <!-- curved-circle start-->
    <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
     "radius": 92,
     "forceWidth": true,
     "forceHeight": true}'>
    . design for your digital products
    </div>
    </div><!-- curved-circle end-->
    </a><!-- /.main-slider__circle-text -->
    </div>
    </div>



    </div>
    </section>
    <!-- Main Slider End -->

    <!-- Bentuk Pelatihan Start -->
    <section class="service-three service-two service-one">
    <div class="container">
    <div class="row mb-3 text-center justify-content-md-center">
    <div class="col-lg-10">
    <div class="sec-title__top-wrap justify-content-md-center">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Bentuk Pelatihan</p>
    </div>
    <h2 class="about-one__heading sec-title__heading">Tingkatkan Kompetensi & Profesionalisme Bersama Kami.</h2>
    <p class="about-one__desc service-one__bottom-descs">Investasi Terbaik adalah Pengembangan Diri! Kami menghadirkan berbagai program <span>BIMTEK, DIKLAT, WORKSHOP, SEMINAR, dan STUDY BANDING</span> yang dirancang khusus untuk meningkatkan keterampilan dan wawasan Anda.</p>
    </div>
    </div>
    <div class="service-three__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
    "items": 4,
    "margin": 24,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":true,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
    "0":{
    "items": 1
    },
    "768":{
    "items": 2
    },
    "992":{
    "items": 3
    },
    "1200":{
    "items": 4
    }
    }
    }'>
    <div class="service-three__carousel-item item">
    <a href="services.html" class="service-three__col service-two__col">
    <div class="service-three__item service-two__item">
    <div class="service-two__icon-box">
    <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="100"
    height="101" viewBox="0 0 100 101" fill="none">
    <circle cx="50" cy="50.0066" r="49.5" />
    <path
    d="M67.5 50.0066C67.5 63.7267 63.7175 76.1258 57.6282 85.0808C51.537 94.0384 43.1743 99.5066 34 99.5066C24.8257 99.5066 16.463 94.0384 10.3718 85.0808C4.28248 76.1258 0.5 63.7267 0.5 50.0066C0.5 36.2864 4.28248 23.8873 10.3718 14.9324C16.463 5.97483 24.8257 0.506592 34 0.506592C43.1743 0.506592 51.537 5.97483 57.6282 14.9324C63.7175 23.8873 67.5 36.2864 67.5 50.0066Z" />
    <path
    d="M46.5 50.0066C46.5 63.757 43.8794 76.1813 39.6645 85.1492C35.431 94.1566 29.6816 99.5066 23.5 99.5066C17.3184 99.5066 11.569 94.1566 7.3355 85.1492C3.12057 76.1813 0.5 63.757 0.5 50.0066C0.5 36.2561 3.12057 23.8319 7.3355 14.8639C11.569 5.85657 17.3184 0.506592 23.5 0.506592C29.6816 0.506592 35.431 5.85657 39.6645 14.8639C43.8794 23.8319 46.5 36.2561 46.5 50.0066Z" />
    <path
    d=" M22.5 50.0066C22.5 63.7875 21.2148 76.2482 19.1445 85.2499C18.1083 89.7547
    16.8817 93.3658 15.5371 95.8385C14.8646 97.0751 14.1752 98.0034 13.4853 98.6172C12.7985
    99.2283 12.1367 99.5066 11.5 99.5066C10.8633 99.5066 10.2015 99.2283 9.5147
    98.6172C8.8248 98.0034 8.13539 97.0751 7.46294 95.8385C6.11834 93.3658 4.89167 89.7547
    3.85555 85.2499C1.78516 76.2482 0.5 63.7875 0.5 50.0066C0.5 36.2257 1.78516 23.765
    3.85555 14.7633C4.89167 10.2585 6.11834 6.64739 7.46294 4.1747C8.13539 2.93808 8.8248
    2.00977 9.5147 1.39597C10.2015 0.784908 10.8633 0.506592 11.5 0.506592C12.1367 0.506592
    12.7985 0.784908 13.4853 1.39597C14.1752 2.00977 14.8646 2.93808 15.5371 4.1747C16.8817
    6.64739 18.1083 10.2585 19.1445 14.7633C21.2148 23.765 22.5 36.2257 22.5 50.0066Z" />
    </svg>
    </div><!-- /.service-two__icon-box -->
    <h3 class="service-three__title service-two__title">1. Bimtek</h3>
    </div><!-- /.service-one__item -->
    </a>
    </div><!-- /.service-three__carousel-item-->
    <div class="service-three__carousel-item item">
    <a href="services.html" class="service-three__col service-two__col">
    <div class="service-three__item service-two__item">
    <div class="service-two__icon-box">
    <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="102"
    height="102" viewBox="0 0 102 102" fill="none">
    <path
    d="M1 46.7931L23.1488 36.3483C23.4525 36.2051 23.8077 36.2238 24.0946 36.3981L31.4054 40.8402M1 46.7931L20.9324 56.0628M1 46.7931V74.565C1 74.9337 1.20288 75.2725 1.52791 75.4466L20.9324 85.8381M41.2027 46.7931L20.9324 56.0628M41.2027 46.7931L31.4054 40.8402M41.2027 46.7931V65.3012M20.9324 56.0628V85.8381M20.9324 85.8381L33.0946 80.0796M51.3378 58.5909V21.2313M51.3378 58.5909L63.5 65.8381M51.3378 58.5909L41.2027 65.3012M33.0946 70.6695L51.3378 78.5347M33.0946 70.6695V80.0796M33.0946 70.6695L41.2027 65.3012M51.3378 101.007L33.5608 89.784C33.2706 89.6008 33.0946 89.2816 33.0946 88.9384V80.0796M51.3378 101.007L71.0545 91.1704C71.3937 91.0012 71.6081 90.6547 71.6081 90.2756V80.7819M51.3378 101.007V78.5347M71.6081 70.6695L51.3378 78.5347M71.6081 70.6695L63.5 65.8381M71.6081 70.6695V80.7819M31.4054 12.8043L50.8327 1.30555C51.1446 1.12097 51.5319 1.11955 51.8451 1.30184L71.6081 12.8043M31.4054 12.8043L51.3378 21.2313M31.4054 12.8043V40.8402M71.6081 12.8043L51.3378 21.2313M71.6081 12.8043V32.1864M71.6081 32.1864L63.5 37.5234M71.6081 32.1864L81.5629 25.5113C81.88 25.2987 82.2906 25.2852 82.621 25.4765L101 36.119M63.5 37.5234L82.0811 46.7931M63.5 37.5234V65.8381M82.0811 46.7931L101 36.119M82.0811 46.7931V84.1527M101 36.119V74.5319C101 74.9179 100.778 75.2695 100.429 75.4351L82.0811 84.1527M82.0811 84.1527L71.6081 80.7819" />
    </svg>
    </div><!-- /.service-two__icon-box -->
    <h3 class="service-three__title service-two__title">2. Diklat</h3>
    </div><!-- /.service-two__item -->
    </a>
    </div><!-- /.service-three__carousel-item-->
    <div class="service-three__carousel-item item">
    <a href="services.html" class="service-three__col service-two__col">
    <div class="service-three__item service-two__item">
    <div class="service-two__icon-box">
    <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="101"
    height="102" viewBox="0 0 101 102" fill="none">
    <path
    d="M0.5 55.0909V1.18101C0.5 0.808539 0.801947 0.506592 1.17442 0.506592H36.645C37.0174 0.506592 37.3194 0.808538 37.3194 1.18101V41.602C37.3194 41.7813 37.2479 41.9533 37.1208 42.0799L23.5724 55.5689C23.446 55.6947 23.2749 55.7654 23.0965 55.7654H1.17442C0.801948 55.7654 0.5 55.4634 0.5 55.0909ZM0.5 99.8322V64.5275C0.5 64.155 0.801946 63.8531 1.17442 63.8531H40.449C40.6273 63.8531 40.7984 63.9237 40.9248 64.0496L55.3631 78.4245C55.4902 78.5511 55.5617 78.7231 55.5617 78.9025V99.8322C55.5617 100.205 55.2597 100.507 54.8873 100.507H1.17442C0.80195 100.507 0.5 100.205 0.5 99.8322ZM63.4343 58.9333L78.3175 44.1154C78.4439 43.9895 78.615 43.9189 78.7933 43.9189H99.8256C100.198 43.9189 100.5 44.2208 100.5 44.5933V99.8322C100.5 100.205 100.198 100.507 99.8256 100.507H63.9101C63.5376 100.507 63.2357 100.205 63.2357 99.8322V59.4112C63.2357 59.2318 63.3071 59.0599 63.4343 58.9333ZM100.5 1.18101V36.4857C100.5 36.8581 100.198 37.1601 99.8256 37.1601H60.1061C59.9277 37.1601 59.7566 37.0894 59.6303 36.9636L45.192 22.5887C45.0649 22.4621 44.9934 22.2901 44.9934 22.1107V1.18101C44.9934 0.80854 45.2953 0.506592 45.6678 0.506592H99.8256C100.198 0.506592 100.5 0.808542 100.5 1.18101ZM21.814 28.1926C21.814 30.511 19.9346 32.3903 17.6163 32.3903C15.298 32.3903 13.4186 30.511 13.4186 28.1926C13.4186 25.8743 15.298 23.995 17.6163 23.995C19.9346 23.995 21.814 25.8743 21.814 28.1926ZM17.6163 33.3903C20.4869 33.3903 22.814 31.0632 22.814 28.1926C22.814 25.322 20.4869 22.995 17.6163 22.995C14.7457 22.995 12.4186 25.322 12.4186 28.1926C12.4186 31.0632 14.7457 33.3903 17.6163 33.3903ZM79.3605 18.7973C79.3605 21.1156 77.4811 22.995 75.1628 22.995C72.8445 22.995 70.9651 21.1156 70.9651 18.7973C70.9651 16.479 72.8445 14.5996 75.1628 14.5996C77.4811 14.5996 79.3605 16.479 79.3605 18.7973ZM75.1628 23.995C78.0334 23.995 80.3605 21.6679 80.3605 18.7973C80.3605 15.9267 78.0334 13.5996 75.1628 13.5996C72.2922 13.5996 69.9651 15.9267 69.9651 18.7973C69.9651 21.6679 72.2922 23.995 75.1628 23.995ZM88.7558 77.5182C88.7558 79.8365 86.8764 81.7159 84.5581 81.7159C82.2398 81.7159 80.3605 79.8365 80.3605 77.5182C80.3605 75.1999 82.2398 73.3205 84.5581 73.3205C86.8764 73.3205 88.7558 75.1999 88.7558 77.5182ZM84.5581 82.7159C87.4287 82.7159 89.7558 80.3888 89.7558 77.5182C89.7558 74.6476 87.4287 72.3205 84.5581 72.3205C81.6875 72.3205 79.3605 74.6476 79.3605 77.5182C79.3605 80.3888 81.6875 82.7159 84.5581 82.7159ZM26.5116 82.2159C26.5116 84.5342 24.6323 86.4136 22.314 86.4136C19.9956 86.4136 18.1163 84.5342 18.1163 82.2159C18.1163 79.8976 19.9956 78.0182 22.314 78.0182C24.6323 78.0182 26.5116 79.8976 26.5116 82.2159ZM22.314 87.4136C25.1845 87.4136 27.5116 85.0865 27.5116 82.2159C27.5116 79.3453 25.1845 77.0182 22.314 77.0182C19.4434 77.0182 17.1163 79.3453 17.1163 82.2159C17.1163 85.0865 19.4434 87.4136 22.314 87.4136Z" />
    </svg>
    </div><!-- /.service-two__icon-box -->
    <h3 class="service-three__title service-two__title">3. workshop</h3>
    </div><!-- /.service-two__item -->
    </a>
    </div><!-- /.service-three__carousel-item-->
    <div class="service-three__carousel-item item">
    <a href="services.html" class="service-three__col service-two__col">
    <div class="service-three__item service-two__item">
    <div class="service-three__icon service-two__icon-box">
    <svg class="service-two__icon" xmlns="http://www.w3.org/2000/svg" width="99" height="101"
    viewBox="0 0 99 101" fill="none">
    <path
    d="M70.3618 34.6154C70.3618 53.4526 54.9508 68.7308 35.9309 68.7308C16.9109 68.7308 1.5 53.4526 1.5 34.6154C1.5 15.7783 16.9109 0.5 35.9309 0.5C54.9508 0.5 70.3618 15.7783 70.3618 34.6154Z"
    stroke="#1D1D1D" />
    <path
    d="M21.0699 33.9337L11.3486 51.2822C28.2359 41.8094 51.1597 47.3352 60.5106 51.2822C46.9563 33.2177 28.5692 32.1897 21.0699 33.9337Z"
    stroke="#1D1D1D" />
    <path
    d="M54.0421 38.4616C38.2485 25.0743 27.6241 24.0667 24.2861 25.2363L33.4418 7.69238L54.0421 38.4616Z"
    stroke="#1D1D1D" />
    <path
    d="M25.5801 72.5961C33.7466 64.8455 35.7882 55.1573 35.7882 51.282C36.4687 59.6969 43.0662 68.9976 46.2799 72.5961L43.1607 87.5437L46.2799 100H26.7143L28.6992 87.5437L25.5801 72.5961Z"
    fill="white" />
    <path
    d="M28.6992 87.5437L25.5801 72.5961C33.7466 64.8455 35.7882 55.1573 35.7882 51.282C36.4687 59.6969 43.0662 68.9976 46.2799 72.5961L43.1607 87.5437M28.6992 87.5437L26.7143 100H46.2799L43.1607 87.5437M28.6992 87.5437H35.93M43.1607 87.5437H35.93M35.93 87.5437L35.7882 80.3467"
    stroke="#1D1D1D" stroke-width="2" />
    <ellipse cx="35.933" cy="76.282" rx="3.88121" ry="4.48718" fill="#1D1D1D" />
    <path d="M74.099 7.21972C81.4049 14.3468 92.2892 33.591 77.379 53.5507" stroke="black" />
    <path
    d="M73.2999 7.2869C72.2033 8.31444 70.4741 8.26625 69.4376 7.18001C68.4012 6.09378 68.4493 4.38021 69.5459 3.35267C70.6425 2.32513 72.3716 2.37332 73.4081 3.45956C74.4446 4.54579 74.3965 6.25936 73.2999 7.2869Z"
    stroke="#1D1D1D" />
    <path
    d="M77.3536 58.1859C76.257 59.2135 74.5278 59.1653 73.4914 58.0791C72.4549 56.9928 72.503 55.2793 73.5996 54.2517C74.6962 53.2242 76.4253 53.2724 77.4618 54.3586C78.4983 55.4448 78.4502 57.1584 77.3536 58.1859Z"
    stroke="#1D1D1D" />
    <path d="M13.9374 80.7693H1L8.5468 91.0257L13.9374 80.7693Z" stroke="#1D1D1D" />
    </svg>
    </div><!-- /.service-two__icon-box -->
    <h3 class="service-three__title service-two__title">4. Seminar</h3>
    </div><!-- /.service-two__item -->
    </a>
    </div><!-- /.service-three__carousel-item-->
    <div class="service-three__carousel-item item">
    <a href="services.html" class="service-three__col service-two__col">
    <div class="service-three__item service-two__item">
    <div class="service-three__icon service-two__icon-box">
    <svg class="service-two__icon" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
    viewBox="0 0 100 100" fill="none">
    <path d="M1 1.00659V91.1666L24.7097 64.5106V26.8786H62.6452L81.6129 1.00659H1Z" />
    <path d="M37.3548 73.9186L17.5968 99.0066H99V8.84659L74.5 34.7186V73.9186H37.3548Z" />
    <path d="M37.3548 37.0706V60.5906H62.6452V37.0706H37.3548Z" />
    </svg>
    </div><!-- /.service-two__icon-box -->
    <h3 class="service-three__title service-two__title">5. Layanan Studi Banding</h3>
    </div><!-- /.service-two__item -->
    </a>
    </div><!-- /.service-three__carousel-item-->
    </div><!-- /.service-three__carousel-->
    </div><!-- /.container -->
    </section>
    <!-- Bentuk Pelatihan End -->

    <!-- Target Peserta Pelatihan Start -->
    <section class="about-two about-two-one">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 order-lg-0 order-1 wow animated fadeInLeft" data-wow-delay="0.1s"
                    data-wow-duration="1500ms">
                    <div class="about-two__img-wrap">
                        <div class="about-two__img-one-box">
                            <div class="about-two__img-one-box-inner">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-1.jpg') }}" alt="about image" class="about-two__img-one">
                            </div>
                        </div>
                        <div class="about-two__img-two-box">
                            <div class="about-two__img-two-box-inner">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-2.jpg') }}" alt="about image" class="about-two__img-two">
                                <img src="{{ asset('template/frontend/assets/images/about/about-2-3.png') }}" alt="about image" class="about-two__img-three">
                            </div>
                            <div class="about-two__shape-box about-two__shape-box-two"></div>
                            <div class="about-two__shape-box about-two__shape-box-three"></div>
                            <div class="about-two__shape-box about-two__shape-box-four"></div>
                            <div class="about-two__shape-box about-two__shape-box-five"></div>
                        </div>
                        <div class="about-two__shape-box-wrap">
                            <div class="about-two__shape-box about-two__shape-box-one"></div>
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-2-2.png') }}" alt="about-shape"
                                class="about-two__shape-one">
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-1-2.png') }}" alt="about-shape"
                                class="about-two__shape-two">
                            <img src="{{ asset('template/frontend/assets/images/shapes/about-shape-2-1.png') }}" alt="about-shape"
                                class="about-two__shape-three">
                        </div><!-- /.about-one__shape-box-wrap -->
                    </div><!-- /.about-one__img-box -->
                </div>
                <div class="col-lg-6 order-lg-1 order-0">
                    <div class="about-two__content sec-title">
                        <div class="sec-title__top-wrap">
                            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                            <p class="sec-title__top">Target Peserta Pelatihan</p>
                        </div>
                        <h2 class="about-two__heading sec-title__heading">Tingkatkan Keahlian, Maksimalkan Potensi.</h2>
                        <p class="about-two__desc">dirancang khusus untuk profesional, praktisi, dan akademisi yang ingin meningkatkan keterampilan dan memperdalam
                        pemahaman di bidangnya. Target peserta yang dapat mengikuti pelatihan ini antara lain:
                        </p>
                        <div class="about-two__bottom">
                            <ul class="list about-two__list">
                                <li class="about-two__consulting-title mb-1">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">Aparatur Perangkat SETDA, SKPD/OPD</h3>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">Anggota DPRD/SETWAN</h3>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">Aparatur Perangkat Kecamatan/Desa</h3>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">RSU, RSP, RSUD</h3>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">Instansi Lembaga Pemerintah</h3>
                                    </div>
                                </li>
                                <li class="about-two__consulting-title mb-3">
                                    <div class="about-two__consulting-text">
                                        <h3 class="about-two__consulting-title">Perusahaan/Swasta</h3>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.about-two__bottom -->
                    </div><!-- /.about-one__content -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Target Peserta Pelatihan End -->

    <!-- Portfolio Kegiatan Start -->
    <section class="case-study-one case-study">
        <div class="container">
            <div class="case-study-one__sec-title sec-title">
                <div class="case-study-one__top-wrap sec-title__top-wrap">
                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                    <p class="sec-title__top">Portofolio Kegiatan</p>
                </div>
                <h2 class="case-study-one__heading sec-title__heading">Kegiatan Pelatihan Terbaru</h2>
            </div><!-- /.portfolio-one__sec-title -->
            <div class="case-study-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 4,
                "margin": 24,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1,
                        "dots":true
                    },
                    "768":{
                        "items": 2
                    },
                    "992":{
                        "items": 3
                    },
                    "1400":{
                        "items": 4
                    }
                }
                }'>

                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
                <div class="case-study-one__carousel-item item">
                    <div class="case-study__item">
                        <div class="case-study__item-img-box">
                            <img src="{{  asset('template/frontend/assets/images/case-study/case-study-1-1.jpg') }}" alt="case-study"
                                class="case-study__item-img">
                            <p class="case-study__item-desc">Bimtek Bidang Desa</p>
                            <h4 class="case-study__item-title">Desa Haurgeulis Bandung</h4>
                        </div>
                        <a href="case-study.html" class="case-study__item-btn">
                            <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                        </a>
                    </div><!-- /.case-study__item -->
                </div><!-- /.case-study-one__carousel-item-->
            </div><!-- /.case-study-one__carousel-->
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-6 text-center">
                    <a href="#" class="service-one__btn noile-btn">Lihat Portofolio Lainnya +</a>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
    <!-- Portfolio Kegiatan End -->

    <!-- Tentang Kami Start -->
    <section class="solution-one">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7">
                    <div class="solution-one__content sec-title">
                        <div class="sec-title__top-wrap">
                            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                            <p class="sec-title__top">Tentang Kami</p>
                        </div>
                        <h2 class="solution-one__heading sec-title__heading">mitra terbaik dalam pengembangan keahlian profesionalisme.
                        </h2>
                        <div class="solution-one__main-tab-box tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#MarketingSolution" class="tab-btn active-btn"><span>Marketing
                                        Solution</span></li>
                                <li data-tab="#BusinessSolution" class="tab-btn"><span>Business Solution</span></li>
                                <li data-tab="#Business-Growth" class="tab-btn"><span>Business Growth</span></li>
                            </ul><!-- solution-tab -->
                            <div class="tabs-content">
                                <!--Marketing Solution-tab-start-->
                                <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="MarketingSolution"
                                    style="display: block;">
                                    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
                                        Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
                                        feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
                                    <div class="solution-one__service-wrap">
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--one">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">Advertising and marketing</p>
                                        </div>
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--two">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">IT Ideation & Evaluation</p>
                                        </div>
                                    </div><!-- /.solution-one__service-wrap -->
                                </div>
                                <!--Marketing Solution-tab-end-->
                                <!--Business Solution-tab-start-->
                                <div class="tab fadeInUp animated" data-wow-delay="200ms" id="BusinessSolution"
                                    style="display: none;">
                                    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
                                        Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
                                        feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
                                    <div class="solution-one__service-wrap">
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--one">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">Advertising and marketing</p>
                                        </div>
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--two">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">IT Ideation & Evaluation</p>
                                        </div>
                                    </div><!-- /.solution-one__service-wrap -->
                                </div>
                                <!--Business Solution-tab-end-->
                                <!--Business Growth-tab-start-->
                                <div class="tab fadeInUp animated" data-wow-delay="200ms" id="Business-Growth"
                                    style="display: none;">
                                    <p class="solution-one__service-desc">Mauris ut enim sit amet lacus ornare ullamcorper.
                                        Praesent placerat neque eu purus rhoncus, vel tincidunt odio ultrices. Sedodau
                                        feugiat feugiat felis. Curabitur posuere tristique mauris non blandit.</p>
                                    <div class="solution-one__service-wrap">
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--one">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">Advertising and marketing</p>
                                        </div>
                                        <div class="solution-one__service">
                                            <div class="solution-one__service-icon solution-one__service-icon--two">
                                                <i class="icofont-ui-check"></i>
                                            </div>
                                            <p class="solution-one__service-title">IT Ideation & Evaluation</p>
                                        </div>
                                    </div><!-- /.solution-one__service-wrap -->
                                </div>
                                <!--Business Growth-tab-end-->
                            </div>
                        </div>
                        <!-- /.olution-one__main-tab-box -->
                    </div><!-- /.solution-one__content -->
                </div>
                <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="solution-one__img-col">
                        <div class="solution-one__img-wrap">
                            <img src="{{ asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="solution" class="solution-one__img">
                            <div class="solution-one__icon-wrap">
                                <img src="{{ asset('template/frontend/assets/images/solution/solution-icon-1-1.png') }}" alt="solution-icon"
                                    class="solution-one__icon">
                            </div>
                            <div class="solution-one__border-box">
                                <div class="solution-one__border solution-one__border--one"></div>
                                <div class="solution-one__border solution-one__border--two"></div>
                                <div class="solution-one__border solution-one__border--three"></div>
                                <div class="solution-one__border solution-one__border--four"></div>
                                <div class="solution-one__border solution-one__border--five"></div>
                                <div class="solution-one__border solution-one__border--six"></div>
                                <div class="solution-one__border solution-one__border--seven"></div>
                                <div class="solution-one__border solution-one__border--eight"></div>
                                <div class="solution-one__border solution-one__border--nine"></div>
                                <div class="solution-one__border solution-one__border--ten"></div>
                            </div><!-- /.solution-one__border-box -->
                            <div class="solution-one__shape-box">
                                <div class="solution-one__shape solution-one__shape-one"></div>
                                <div class="solution-one__shape solution-one__shape-two"></div>
                                <div class="solution-one__shape solution-one__shape-three"></div>
                                <div class="solution-one__shape solution-one__shape-four"></div>
                                <div class="solution-one__shape solution-one__shape-five"></div>
                                <div class="solution-one__shape solution-one__shape-six"></div>
                                <div class="solution-one__shape solution-one__shape-seven"></div>
                            </div><!-- /.solution-one__shape-box -->
                        </div>
                    </div><!-- /.solution-one__img-wrap -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Tentang Kami End -->

    <!-- Blog One Start -->
    <section class="blog-one blog @@extraClassName">
        <div class="container">
            <div class="blog-one__sec-title sec-title">
                <div class="blog-one__top-wrap sec-title__top-wrap">
                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                    <p class="sec-title__top">Blog</p>
                </div>
                <h2 class="blog-one__heading sec-title__heading">Artikel Terbaru</h2>
            </div><!-- /.blog-one__sec-title -->
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-1.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">02 Comments</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">/</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                        <div class="blog__card-author">
                            <div class="blog__card-author-img-box">
                                <img src="{{  asset('template/frontend/assets/images/blog/blog-author-1-1.png') }}" alt="blog-author"
                                    class="blog__card-author-img">
                            </div>
                            <p class="blog__card-author-name">by
                                <span class="blog__card-author-name-highlight">Noile Mohsin</span>
                            </p>
                        </div><!-- /.blog-one__author -->
                    </div><!-- /.blog-one__item -->
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-2.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">02 Comments</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">/</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                        <div class="blog__card-author">
                            <div class="blog__card-author-img-box">
                                <img src="{{  asset('template/frontend/assets/images/blog/blog-author-1-2.png') }}" alt="blog-author"
                                    class="blog__card-author-img">
                            </div>
                            <p class="blog__card-author-name">by
                                <span class="blog__card-author-name-highlight">Noile Mohsin</span>
                            </p>
                        </div><!-- /.blog-one__author -->
                    </div><!-- /.blog-one__item -->
                </div>
                <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1300ms">
                    <div class="blog__card">
                        <a href="blog-details.html" class="blog__card-img-box">
                            <img src="{{  asset('template/frontend/assets/images/blog/blog-1-3.jpg') }}" alt="blog" class="blog__card-img">
                            <p class="blog__card-category">Business</p><!-- /.blog-one__item-category -->
                        </a><!-- /.blog-one__img-box -->
                        <ul class="blog__card-comment-box">
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">02 Comments</p>
                            </li>
                            <li class="blog__card-comment-item blog__card-comment-item-divider">
                                <p class="blog__card-comment">/</p>
                            </li>
                            <li class="blog__card-comment-item">
                                <p class="blog__card-comment">22 Aug 2023</p>
                            </li>
                        </ul><!-- /.blog-one__comment -->
                        <a href="blog-details.html" class="blog__card-title">Fusce tincidunt commodo saie quis
                            porttitor.</a>
                        <div class="blog__card-author">
                            <div class="blog__card-author-img-box">
                                <img src="{{  asset('template/frontend/assets/images/blog/blog-author-1-3.png') }}" alt="blog-author"
                                    class="blog__card-author-img">
                            </div>
                            <p class="blog__card-author-name">by
                                <span class="blog__card-author-name-highlight">Noile Mohsin</span>
                            </p>
                        </div><!-- /.blog-one__author -->
                    </div><!-- /.blog-one__item -->
                </div>
            </div><!-- /.row -->
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-6 text-center">
                    <a href="#" class="service-one__btn noile-btn">Lihat Blog Lainnya +</a>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
    <!-- Blog One End -->

    <!-- Logo Mitra/ Partner Start -->
    <div class="brand-one">
        <div class="container">
            <div class="brand-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 4,
                    "margin": 50,
                    "smartSpeed": 1000,
                    "loop":true,
                    "autoplay": 200,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items": 2
                        },
                        "430":{
                            "items": 3,
                            "margin": 30
                        },
                        "500":{
                            "items": 3,
                            "margin": 40
                        },
                        "768":{
                            "items": 4,
                            "margin": 50
                        },
                        "992":{
                            "items": 5
                        },
                        "1200":{
                            "items": 6
                        }
                    }
                    }'>
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-1.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-2.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-3.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-4.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-5.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
                <div class="brand-one__item item">
                    <img src="{{  asset('template/frontend/assets/images/brand/brand-1-6.png') }}" alt="brand"
                        class="brand-one__item-img">
                </div><!-- /.brand-one__item-->
            </div><!-- /.brand-one__carousel -->
        </div><!-- /.container -->
    </div>
    <!-- Logo Mitra/ Partner End -->

    <!-- Mini Banner One Start -->
    <section class="mini-banner-one">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mini-banner-one__content sec-title">
                        <h2 class="mini-banner-one__heading sec-title__heading">Daftar sekarang untuk raih keterampilan terbaik Anda</h2>
                    </div><!-- /.mini-banner-one__content -->
                </div>
                <div class="col-lg-4">
                    <div class="mini-banner-one__btn-wrap">
                        <a href="about.html" class="mini-banner-one__btn noile-btn">Free consultation +</a>
                    </div><!-- /.mini-banner-one__btn-wrap -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="mini-banner-one__shape-box">
            <svg class="mini-banner-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="747" height="255"
                viewBox="0 0 747 255" fill="none">
                <path d="M393.616 160.808L325.826 72.6515L476.077 -163L596.277 -162.592L393.616 160.808Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M479.762 465.181H346.029L-46 -49.3997L90.0943 -46.454L479.762 465.181Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M597.674 620L1.64221 -162.592H144.928L746.726 620H597.674Z" fill="#282828" />
            </svg>
            <svg class="mini-banner-one__shape-two" xmlns="http://www.w3.org/2000/svg" width="273" height="255"
                viewBox="0 0 273 255" fill="none">
                <path d="M439.616 -15.8078L371.826 72.3485L522.077 308L642.277 307.592L439.616 -15.8078Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M525.762 -320.181H392.029L6.10352e-05 194.4L136.094 191.454L525.762 -320.181Z" fill="white"
                    fill-opacity="0.1" />
                <path d="M643.674 -475L47.6423 307.592H190.928L792.726 -475H643.674Z" fill="#282828" />
            </svg>
        </div><!-- /.mini-banner-one__shape-box -->
    </section>
    <!-- Mini Banner One End -->
@endsection