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
    <h1 class="page-header__heading slide-title__heading">Profil</h1>
    <div class="page-header__breadcrumb-wrap">
    <span class="page-header__arrow icon-arrow-right-2"></span>
    <ul class="noile-breadcrumb">
    <li class="noile-breadcrumb__item"><a href="{{ route('home') }}" class="noile-breadcrumb__link">Beranda</a>
    </li>
    <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
    <li class="noile-breadcrumb__item">Profil</li>
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

    <!-- Pengenalan Start -->
    <section class="solution-one">
    <div class="container">
    <div class="row">
    <div class="col-xxl-6 col-xl-7">
    <div class="solution-one__content sec-title">
    <div class="sec-title__top-wrap">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Pengenalan</p>
    </div>
    <h2 class="solution-one__heading sec-title__heading">Lembaga Pelatihan Bimbingan Teknis Nasional.
    </h2>
    <div class="solution-one__main-tab-box tabs-box">
    <p class="solution-one__service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quia nemo facilis, ullam consequatur pariatur animi voluptatibus iste. Cupiditate suscipit iste vel. Explicabo numquam, quo sequi voluptatum vitae porro nam unde molestias repellendus repudiandae eaque saepe reiciendis? Est eveniet corrupti accusantium illo reiciendis ullam fugiat nostrum quas, enim assumenda in explicabo, quibusdam veniam sunt facilis. Quod cupiditate voluptatibus recusandae ratione itaque, atque facere optio ipsa voluptatum iusto, laborum enim sit.</p>
    </div>
    <!-- /.olution-one__main-tab-box -->
    </div><!-- /.solution-one__content -->
    </div>
    <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
    <div class="solution-one__img-col">
    <div class="solution-one__img-wrap">
    <img src="{{ asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="solution" class="solution-one__img">
    <div class="solution-one__icon-wrap">
    <img src="{{ asset('template/frontend/assets/images/solution/solution-icon-1-1.png') }}" alt="solution-icon" class="solution-one__icon">
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
    <!-- Pengenalan End -->

    <!-- Visi Misi Start -->
    <section class="visimisi">
    <div class="container">
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
        <p class="blog-details__card-desc-three fw-bold">Visi:</p>
    <div class="blog-details__card-desc-three-box">
    <p class="blog-details__card-desc-three">LEDIKNAS Menghadapi Persaingan dan Perkembangan Sumber Daya Manusia (SDM) Indonesia</p>
    </div><!-- /.blog-details__card-bottom -->
    </div>
    <div class="col-md-12 mb-2">
        <p class="blog-details__card-desc-three fw-bold">Misi:</p>
    <div class="blog-details__card-desc-three-box">
    <p class="blog-details__card-desc-three">
        <ul class="">
            <li >Menjadi organisasi yang profesional dan berintegritas</li>
            <li>Menjadi organisasi yang berorientasi pada kebutuhan dan kepuasan masyarakat</li>
            <li>Menjadi organisasi yang berorientasi pada kebutuhan dan kepuasan masyarakat</li>
            <li>Menjadi organisasi yang berorientasi pada kebutuhan dan kepuasan masyarakat</li>
            <li>Menjadi organisasi yang berorientasi pada kebutuhan dan kepuasan masyarakat</li>
        </ul>
    </div><!-- /.blog-details__card-bottom -->
    </div>
    </div>
    </div>
    </section>
    <!-- Visi Misi End -->

    <!-- Testimonial Page Start -->
    <section class="testimonial-page testimonial">
    <div class="container">
    <div class="row mb-5">
    <div class="col-12">
    <div class="sec-title__top-wrap justify-content-md-center">
    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
    <p class="sec-title__top">Testimoni</p>
    </div>
    <h2 class="about-one__heading sec-title__heading text-center">Apa Kata Mereka Tentang Kami.</h2>
    </div>
    </div>
    <div class="testimonial-page__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
    "items": 2,
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
    "992":{
    "items": 2
    },
    "1400":{
    "items": 3
    }
    }
    }'>
    <div class="testimonial-page__carousel-item item">
    <div class="testimonial__item">
    <div class="testimonial__info">
    <div class="testimonial__img-box">
    <img src="assets/images/testimonial/testimonial-2-1.png" alt="Nama PIC" class="testimonial__img">
    </div><!-- /.testimonial__img-box -->
    <div class="testimonial__name-box">
    <h3 class="testimonial__name">Nama PIC</h3>
    <div class="testimonial__review-box">
    <p class="testimonial__review-text">Lembaga/ Okupasi</p>
    </div><!-- /.testimonial__review-box -->
    </div><!-- /.testimonial__name-box -->
    </div><!-- /.testimonial__info -->
    <div class="testimonial__text-box">
    <p class="testimonial__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint reiciendis fugit suscipit autem aperiam blanditiis, facilis rem alias doloribus, libero, numquam accusantium omnis eveniet.</p>
    </div><!-- /.testimonial__text-box -->
    <div class="testimonial__footer">
    <span></span>
    <div class="testimonial__quote-box">
    <span class="testimonial__quote-icon icon-quote"></span>
    <span class="testimonial__quote-icon icon-quote"></span>
    </div>
    </div><!-- /.testimonial__footer -->
    <div class="testimonial__shape-box">
    <div class="testimonial__shape-one"></div>
    <div class="testimonial__shape-two"></div>
    <div class="testimonial__shape-three"></div>
    </div><!-- /.testimonial__shape-box -->
    </div><!-- /.testimonial__item -->
    </div><!-- /.testimonial-page__carousel-item-->
    <div class="testimonial-page__carousel-item item">
    <div class="testimonial__item">
    <div class="testimonial__info">
    <div class="testimonial__img-box">
    <img src="assets/images/testimonial/testimonial-2-2.png" alt="Nama PIC" class="testimonial__img">
    </div><!-- /.testimonial__img-box -->
    <div class="testimonial__name-box">
    <h3 class="testimonial__name">Nama PIC</h3>
    <div class="testimonial__review-box">
    <p class="testimonial__review-text">Lembaga/ Okupasi</p>
    </div><!-- /.testimonial__review-box -->
    </div><!-- /.testimonial__name-box -->
    </div><!-- /.testimonial__info -->
    <div class="testimonial__text-box">
    <p class="testimonial__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint reiciendis fugit suscipit autem aperiam blanditiis, facilis rem alias doloribus, libero, numquam accusantium omnis eveniet.</p>
    </div><!-- /.testimonial__text-box -->
    <div class="testimonial__footer">
    <span></span>
    <div class="testimonial__quote-box">
    <span class="testimonial__quote-icon icon-quote"></span>
    <span class="testimonial__quote-icon icon-quote"></span>
    </div>
    </div><!-- /.testimonial__footer -->
    <div class="testimonial__shape-box">
    <div class="testimonial__shape-one"></div>
    <div class="testimonial__shape-two"></div>
    <div class="testimonial__shape-three"></div>
    </div><!-- /.testimonial__shape-box -->
    </div><!-- /.testimonial__item -->
    </div><!-- /.testimonial-page__carousel-item-->
    <div class="testimonial-page__carousel-item item">
    <div class="testimonial__item">
    <div class="testimonial__info">
    <div class="testimonial__img-box">
    <img src="assets/images/testimonial/testimonial-3-1.png" alt="Nama PIC" class="testimonial__img">
    </div><!-- /.testimonial__img-box -->
    <div class="testimonial__name-box">
    <h3 class="testimonial__name">Nama PIC</h3>
    <div class="testimonial__review-box">
    <p class="testimonial__review-text">Lembaga/ Okupasi</p>
    </div><!-- /.testimonial__review-box -->
    </div><!-- /.testimonial__name-box -->
    </div><!-- /.testimonial__info -->
    <div class="testimonial__text-box">
    <p class="testimonial__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint reiciendis fugit suscipit autem aperiam blanditiis, facilis rem alias doloribus, libero, numquam accusantium omnis eveniet.</p>
    </div><!-- /.testimonial__text-box -->
    <div class="testimonial__footer">
    <span></span>
    <div class="testimonial__quote-box">
    <span class="testimonial__quote-icon icon-quote"></span>
    <span class="testimonial__quote-icon icon-quote"></span>
    </div>
    </div><!-- /.testimonial__footer -->
    <div class="testimonial__shape-box">
    <div class="testimonial__shape-one"></div>
    <div class="testimonial__shape-two"></div>
    <div class="testimonial__shape-three"></div>
    </div><!-- /.testimonial__shape-box -->
    </div><!-- /.testimonial__item -->
    </div><!-- /.testimonial-page__carousel-item-->
    <div class="testimonial-page__carousel-item item">
    <div class="testimonial__item">
    <div class="testimonial__info">
    <div class="testimonial__img-box">
    <img src="assets/images/testimonial/testimonial-3-4.png" alt="Nama PIC" class="testimonial__img">
    </div><!-- /.testimonial__img-box -->
    <div class="testimonial__name-box">
    <h3 class="testimonial__name">Nama PIC</h3>
    <div class="testimonial__review-box">
    <p class="testimonial__review-text">Lembaga/ Okupasi</p>
    </div><!-- /.testimonial__review-box -->
    </div><!-- /.testimonial__name-box -->
    </div><!-- /.testimonial__info -->
    <div class="testimonial__text-box">
    <p class="testimonial__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sint reiciendis fugit suscipit autem aperiam blanditiis, facilis rem alias doloribus, libero, numquam accusantium omnis eveniet.</p>
    </div><!-- /.testimonial__text-box -->
    <div class="testimonial__footer">
    <span></span>
    <div class="testimonial__quote-box">
    <span class="testimonial__quote-icon icon-quote"></span>
    <span class="testimonial__quote-icon icon-quote"></span>
    </div>
    </div><!-- /.testimonial__footer -->
    <div class="testimonial__shape-box">
    <div class="testimonial__shape-one"></div>
    <div class="testimonial__shape-two"></div>
    <div class="testimonial__shape-three"></div>
    </div><!-- /.testimonial__shape-box -->
    </div><!-- /.testimonial__item -->
    </div><!-- /.testimonial-page__carousel-item-->
    </div><!-- /.case-study-page__carousel-->
    </div><!-- /.container -->
    </section>

@endsection