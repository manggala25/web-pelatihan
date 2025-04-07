@extends('frontend.layouts.app') <!-- Memanggil layout utama -->
@section('content')
        <!-- Main Slider Start -->
        <section class="main-slider">
        <div class="main-slider__carousel noile-owl__carousel owl-carousel owl-theme"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false, "navSpeed": 3000}'>

        @if($portofolio->count())
            @foreach($portofolio as $item)
                {{-- Slide One --}}
                <div class="main-slider__slide main-slider__slide-one item">
                    <div class="main-slider__bg" style="background-image: url('{{ asset('storage/' . $item->cover) }}')">
                        <div class="main-slider__vartical-line-wrap slide-title">
                            <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
                        </div>
                    </div> <!-- /.Slide One BG -->
                    <div class="main-slider__container container">
                        <div class="main-slider__circle"></div>
                        <div class="main-slider__content slide-title">
                            <p class="main-slider__desc">◎ Portofolio Kegiatan</p>
                            <h1 class="main-slider__title slide-title__heading">{{ Str::limit($item->judul_portofolio, 50, '...') }}</h1>
                            <div class="main-slider__desc-wrap slide-title__desc-wrap">
                                <span class="main-slider__arrow icon-arrow-right-2"></span>
                                <p class="main-slider__desc">{{ $item->kategori_tema }}</p>
                            </div>
                            <div class="main-slider__btn-box slide-title__btn-box">
                                <a href="{{ route('detail-galeri', $item->slug) }}" class="main-slider__btn noile-btn">Lihat Detail
                                    +</a>
                            </div>
                        </div>
                        <a href="#" class="main-slider__circle-text">
                            <div class="main-slider__curved-circle curved-circle">
                                <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
                                            "radius": 92,
                                            "forceWidth": true,
                                            "forceHeight": true}'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center py-5">
                <h2>Data portofolio belum dibuat.</h2>
            </div>
        @endif

        </div>
        </section>
        <!-- Main Slider End -->

        <!-- Bentuk Pelatihan Start -->
        <section class="bentuk-pelatihan py-5 my-5">
            <div class="container">
                <div class="row mb-3 text-center justify-content-md-center">
                    <div class="col-lg-8">
                        <div class="sec-title__top-wrap justify-content-md-center">
                            <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                            <p class="sec-title__top">Bentuk Pelatihan</p>
                        </div>
                        <h2 class="about-one__heading sec-title__heading">Bentuk Pelatihan Yang Kami Sediakan</h2>
                        <p class="about-one__desc service-one__bottom-descs">
                            Kami memiliki beberapa bentuk pelatihan, yang menyelenggarakan keahlian seperti:
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gy-4 gy-xl-0 d-flex justify-content-center">
                    @if ($bentuk_pelatihan->count())
                        @foreach ($bentuk_pelatihan as $item)
                        <div href="services.html"
                        class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 service-two__col service-two__col--two wow animated fadeInUp"
                        data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="service-two__item">
                            <div class="service-two__icon-box">
                                <img class="service-two__icon img-fluid" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama_bentuk_pelatihan }}">
                            </div><!-- /.service-two__icon-box -->
                            <h3 class="service-two__title" style="text-transform: uppercase">{{ $item->nama_bentuk_pelatihan }}</h3>
                        </div><!-- /.service-two__item -->
                    </div>
                    @endforeach
                    @else
                    <div class="text-center py-5">
                        <p>Data bentuk pelatihan belum dibuat.</p>
                    </div>
                    @endif
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="service-two__shape-box">
                <svg class="service-two__shape-one" width="476" height="558" viewBox="0 0 476 558" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M365.5 383.5L309.5 457.5L436.555 653.431L537.122 653.089L365.5 383.5Z" />
                    <path d="M440 126H327.333L-3.05176e-05 558H111.5L440 126Z" />
                    <path d="M538.37 -3L40 652H159.808L663 -3H538.37Z" />
                </svg>
            </div><!-- /.service-two__shape-box -->
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
                                    @if ($target_pelatihan) <!-- Memeriksa apakah ada data -->
                                            <img src="{{ asset('storage/' . $target_pelatihan->image_back) }}" alt="about image" class="about-two__img-one">
                                    @else
                                        <p>Konten target peserta pelatihan belum dibuat.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="about-two__img-two-box">
                                <div class="about-two__img-two-box-inner">
                                    @if ($target_pelatihan) <!-- Memeriksa apakah ada data -->
                                        <img src="{{ asset('storage/' . $target_pelatihan->image_front) }}" alt="about image" class="about-two__img-two">
                                    @else
                                        <p>Konten target peserta pelatihan belum dibuat.</p>
                                    @endif
                                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="about image" class="about-two__img-three">
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
                            @if ($target_pelatihan) <!-- Memeriksa apakah ada data -->
                                <div class="sec-title__top-wrap">
                                    <img src="{{ asset('template/frontend/assets/images/resources/top-title-logo.png') }}" alt="top-title-logo">
                                    <p class="sec-title__top">{{ $target_pelatihan->top_title }}</p>
                                </div>
                                <h2 class="about-two__heading sec-title__heading">{{ $target_pelatihan->heading }}</h2>
                                <div class="text-white mt-3">
                                    {!! nl2br($target_pelatihan->content ?? 'Konten belum dibuat.') !!}
                                </div>
                            @else
                                <p>Konten target peserta pelatihan belum dibuat.</p>
                            @endif
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

                    @if($portofolio->isEmpty())
                        <p>Data portofolio belum dibuat.</p>
                    @else
                        @foreach($portofolio as $item)
                            <div class="case-study-one__carousel-item item">
                                <div class="case-study__item">
                                    <div class="case-study__item-img-box">
                                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul_portofolio }}"
                                            class="case-study__item-img">
                                        <p class="case-study__item-desc mb-2">{{ $item->nama_klien }}</p>
                                        <h4 class="case-study__item-title">
                                            {{ Str::words($item->judul_portofolio, 5, '...') }}
                                        </h4>
                                    </div>
                                    <a href="{{ route('detail-galeri', $item->slug) }}" class="case-study__item-btn">
                                        <span class="case-study__item-btn-icon icon-arrow-right-2"></span>
                                    </a>
                                </div><!-- /.case-study__item -->
                            </div><!-- /.case-study-one__carousel-item-->
                        @endforeach
                    @endif

                </div><!-- /.case-study-one__carousel-->
                <div class="row pt-5 d-flex justify-content-center">
                    <div class="col-6 text-center">
                        <a href="{{ route('galeri') }}" class="service-one__btn noile-btn">Lihat Selengkapnya +</a>
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
                                <p class="sec-title__top">{{ $profil ? $profil->title_top : 'Profil Kami' }}</p>
                            </div>
                            <h2 class="solution-one__heading sec-title__heading">{{ $profil ? $profil->heading : 'Kenal Kami Lebih Dalam' }}
                            </h2>
                            <p class="solution-one__service-desc">
                                {!! nl2br(Str::limit(strip_tags($profil->deskripsi), 450)) !!}
                            </p>
                            <a href="{{ route('tentang-kami') }}" class="service-one__btn noile-btn">Baca Selengkapnya +</a>
                            <!-- /.olution-one__main-tab-box -->
                        </div><!-- /.solution-one__content -->
                    </div>
                    <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="solution-one__img-col">
                            <div class="solution-one__img-wrap">
                                <img src="{{ $profil && $profil->img_profil ? asset('storage/' . $profil->img_profil) : asset('template/frontend/assets/images/solution/solution-1-1.jpg') }}" alt="solution" class="solution-one__img">
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
                    @if($blog->isEmpty())
                        <p>Data blog belum dibuat.</p>
                    @else
                        @foreach($blog as $item)
                            <div class="col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1300ms">
                                <div class="blog__card">
                                    <a href="{{ route('detail-blog', $item->slug) }}" class="blog__card-img-box">
                                        <img src="{{  asset($item->thumbnail) ?? asset('template/frontend/assets/images/blog/blog-1-1.jpg') }}" alt="blog" class="blog__card-img">
                                        <p class="blog__card-category">{{ $item->kategori }}</p><!-- /.blog-one__item-category -->
                                    </a><!-- /.blog-one__img-box -->
                                    <a href="{{ route('detail-blog', $item->slug) }}" class="blog__card-title mb-0">{{ Str::limit($item->judul, 700) }}</a>
                                    <ul class="blog__card-comment-box">
                                        <li class="blog__card-comment-item">
                                            <p class="blog__card-comment">{{ \Carbon\Carbon::parse($item->published_at)->format('d F Y') }}</p>
                                        </li>
                                    </ul><!-- /.blog-one__comment -->
                                    <p class="blog__card-desc mt-1 mb-0">
                                        {!! nl2br(Str::limit(strip_tags($item->content), 120)) !!}
                                        </p><!-- /.blog-one__item-desc -->
                                        <a href="{{ route('detail-blog', $item->slug) }}" class="blog__card-link">Selengkapnya <i class="icon-arrow-right-2"></i></a>
                                </div><!-- /.blog-one__item -->
                            </div>
                        @endforeach
                    @endif

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
                <div class="brand-one__sec-title sec-title d-flex justify-content-center mb-4">
                    <h4 class="fw-semibold text-center">Mitra Kami:</h4>
                </div>
                <div class="brand-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 4,
                        "margin": 50,
                        "smartSpeed": 1000,
                        "loop":true,
                        "autoplay": 50,
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
                        @if ($mitra->isNotEmpty())
                        @foreach ($mitra as $item)
                            <div class="brand-one__item item">
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->nama_mitra }}"
                            class="brand-one__item-img">
                    </div><!-- /.brand-one__item-->
                    @endforeach
                        @else
                            <p>Data mitra belum dibuat.</p>
                        @endif

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
                            @if ($kontak->isNotEmpty())
        @foreach ($kontak as $item)
            @if ($item->nama_kontak === 'WhatsApp')
                <a href="{{ ltrim($item->link, '0') }}" class="mini-banner-one__btn noile-btn" target="_blank">
                    Konsultasi Sekarang +
                </a>
            @endif
        @endforeach
    @else
        <a href="{{ route('kontak') }}" class="mini-banner-one__btn noile-btn" target="_blank">
            Konsultasi Sekarang +
        </a>
    @endif
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