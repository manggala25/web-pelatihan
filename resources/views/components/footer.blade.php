@props(['kontak'])

<!-- Footer One Start -->
<footer class="footer-one @@extraClassName">
    <div class="container">
        <div class="footer-one__row-one row gx-4 gy-5">
            <div class="col-xxl-4 col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s"
                data-wow-duration="1500ms">
                <div class="footer-one__about">
                    <div class="footer-one__logo-box">
                        <a href="index.html">
                            <img src="{{ asset('template/frontend/assets/images/logo-dark.png') }}" alt="logo-dark"
                                class="footer-one__logo">
                        </a>
                    </div>
                    <p class="footer-one__about-text">
                        "Memberikan pelayanan terbaik dalam pelatihan dengan profesional" atau "Terlatih, Kompeten, Siap Kerja"
                    </p>
                    <div class="mfooter-social__social social-list">
                        @if ($kontak->isNotEmpty())
                            @foreach ($kontak as $item)
                                @if ($item->nama_kontak === 'Facebook' || $item->nama_kontak === 'Twitter' || $item->nama_kontak === 'Instagram')
                                    <a href="{{ $item->link }}" class="main-menu__social-link social-link" target="_blank">
                                        @if ($item->nama_kontak === 'Facebook')
                                            <i class="icofont-facebook"></i>
                                        @elseif ($item->nama_kontak === 'Twitter')
                                            <i class="icofont-twitter"></i>
                                        @elseif ($item->nama_kontak === 'Instagram')
                                            <i class="icofont-instagram"></i>
                                        @endif
                                    </a>
                                @endif
                            @endforeach
                        @else
                            <p>Tidak ada media sosial yang tersedia.</p>
                        @endif
                    </div>
                </div><!-- /.footer-one__about -->
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 wow animated fadeInUp" data-wow-delay="0.3s"
                data-wow-duration="1500ms">
                <div class="footer-one__link-wrap">
                    <h4 class="footer-one__title">Menu</h4>
                    <ul class="footer-one__link-list">
                        <li class="footer-one__link-item">
                            <a href="{{ route('home') }}" class="footer-one__link">Beranda</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('tentang-kami') }}" class="footer-one__link">Tentang Kami</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('blog') }}" class="footer-one__link">Blog</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('galeri') }}" class="footer-one__link">Galeri</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('tema-pelatihan') }}" class="footer-one__link">Tema Pelatihan</a>
                        </li>
                    </ul>
                </div><!-- /.footer-one__link -->
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 wow animated fadeInUp" data-wow-delay="0.5s"
                data-wow-duration="1500ms">
                <div class="footer-one__link-wrap">
                    <h4 class="footer-one__title"></h4>
                    <ul class="footer-one__link-list">
                        <li class="footer-one__link-item">
                            <a href="{{ route('jadwal-pelatihan') }}" class="footer-one__link">Jadwal pelatihan</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('legalitas') }}" class="footer-one__link">Legalitas Hukum</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('formulir-pendaftaran') }}" class="footer-one__link">Formulir Pendaftaran</a>
                        </li>
                        <li class="footer-one__link-item">
                            <a href="{{ route('kontak') }}" class="footer-one__link">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.footer-one__link -->
            </div>
            <div class="col-xl-3 col-lg-7 col-md-4 ms-xxl-auto wow animated fadeInUp" data-wow-delay="0.7s"
                data-wow-duration="1500ms">
                <div class="footer-one__info-wrap">
                    <h4 class="footer-one__title">Information</h4>
                    <ul class="footer-one__info-list">
                        @if ($kontak->isNotEmpty())
                            @foreach ($kontak as $item)
                                @if ($item->nama_kontak === 'Alamat')
                                    <li class="footer-one__info-item">
                                        <address class="footer-one__address">
                                            <p class="footer-one__info">{{ $item->deskripsi }}</p>
                                        </address>
                                    </li>
                                @elseif ($item->nama_kontak === 'WhatsApp')
                                    <li class="footer-one__info-item">
                                        <p class="footer-one__info">Hubungi Kami: <a href="{{ $item->link }}"
                                                class="footer-one__info-link">{{ $item->deskripsi }}</a></p>
                                    </li>
                                @endif
                            @endforeach
                        @else
                            <p>Tidak ada informasi kontak yang tersedia.</p>
                        @endif
                    </ul>
                </div><!-- /.footer-one__link -->
            </div>
        </div><!-- /.row -->
        <div class="footer-one__bottom container-fluid">
            <div class="footer-one__row-two row g-0 g-sm-4">
                <div class="col-sm-10">
                    <div class="footer-one__copyright">
                        <p class="footer-one__copyright-text">&copy; Copyright 2025 | PUSPEKOM</p>
                    </div><!-- /.footer-one__copyright -->
                </div>
                <div class="col-sm-2">
                    <a href="#" class="noile-scroll-up-btn">
                        <span class="icon-arrow-right-2"></span>
                    </a>
                </div>
            </div><!-- /.footer-one__bottom -->
        </div><!-- /.container-fluid -->
        <svg class="footer-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="793" height="603"
            viewBox="0 0 793 603" fill="none">
            <path d="M439.616 429.192L371.826 517.348L522.077 753L642.277 752.592L439.616 429.192Z" fill="white"
                fill-opacity="0.03" />
            <path d="M525.762 124.819H392.029L6.10352e-05 639.4L136.094 636.454L525.762 124.819Z" fill="white"
                fill-opacity="0.03" />
            <path d="M643.674 -30L47.6423 752.592H190.928L792.726 -30H643.674Z" fill="#282828" />
        </svg><!-- /.footer-one__shape-one-->
    </div><!-- /.container -->
</footer>
<!-- Footer One End -->