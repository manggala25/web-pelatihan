<header class="main-header">
    <div class="topbar">
        <div class="topbar__shape-box">
            <svg class="topbar__shape-one" xmlns="http://www.w3.org/2000/svg" width="48" height="50" viewBox="0 0 48 50"
                fill="none">
                <path d="M10 50L48 0H39L0.5 50H10Z" />
            </svg>
            <svg class="topbar__shape-two" xmlns="http://www.w3.org/2000/svg" width="29" height="25" viewBox="0 0 29 25"
                fill="none">
                <path d="M0.5 25H10L29 0H19.75L0.5 25Z" />
            </svg>
            <svg class="topbar__shape-three" xmlns="http://www.w3.org/2000/svg" width="48" height="50"
                viewBox="0 0 48 50" fill="none">
                <path d="M38.5 0L0.5 50H9.5L48 0H38.5Z" />
            </svg>
            <svg class="topbar__shape-four" xmlns="http://www.w3.org/2000/svg" width="29" height="25"
                viewBox="0 0 29 25" fill="none">
                <path d="M29 0H19.5L0.5 25H9.75L29 0Z" />
            </svg>
        </div><!-- /.topbar-shape-box -->
        <div class="container">
            <div class="topbar__left">
                <div class="topbar__page-list">
                    <a href="about.html" class="topbar__page-link">Terms & Condition</a>
                    <span class="topbar__page-divider">/</span>
                    <a href="about.html" class="topbar__page-link">Privacy Policy</a>
                    <span class="topbar__page-divider">/</span>
                    <a href="contact.html" class="topbar__page-link">Contact Us</a>
                </div><!-- /.topbar__page-list -->
            </div><!-- /.topbar__left -->
            <div class="topbar__right">
                <ul class="topbar__info topbar__right-item">
                    <li class="topbar__info-item">
                        <i class="topbar__info-icon icofont-clock-time"></i>
                        <p class="topbar__info-text">Monday - Friday, 10am - 5pm</p>
                    </li>
                    <li class="topbar__info-item">
                        <i class="topbar__info-icon icon-email"></i>
                        <a href="mailto:noile@envato.com"
                            class="topbar__info-text topbar__info-text--email">noile@envato.com</a>
                    </li>
                </ul><!-- /.topbar__date -->
            </div><!-- /.topbar__left -->

        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <div class="header">
        <div class="container">
            <div class="header__left">
                <div class="header__logo">
                    <a href="index.html">
                        <img src="{{  asset('template/frontend/assets/images/logo-light.png') }}" alt="logo-light">
                    </a>
                </div><!-- /.header-one__logo -->
                <div class="header__info">
                    <div class="header__phone">
                        <div class="header__phone-icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="header__phone-text">
                            <p class="header__phone-title">Phone Number</p>
                            <a href="tel:(1)245-45678" class="header__phone-number">(1)245-45678 Call</a>
                        </div>
                    </div><!-- /.header-one__phone -->
                    <div class="header__email">
                        <div class="header__email-icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="header__email-text">
                            <p class="header__email-title">Quick You Email!</p>
                            <a href="mailto:noile@envato.com" class="header__email-address">noile@envato.com</a>
                        </div>
                    </div><!-- /.header-one__email -->
                </div><!-- /.header-one__info -->
            </div><!-- /.header-one__left -->
            <div class="header__right">
                <a href="about.html" class="header__btn noile-btn">Free consultation +</a>
                <button type="button" class="header__bar mobile-nav__toggler">
                    <span class="mobile-nav__toggler-bars"></span>
                    <span class="mobile-nav__toggler-bars"></span>
                    <span class="mobile-nav__toggler-bars"></span>
                </button><!-- /.mobile-nav__toggler -->
                <button type="button" class="sidebar-btn__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button><!-- /.sidebar-btn__toggler -->
            </div><!-- /.header__right -->
        </div><!-- /.container -->
    </div><!-- /.header -->
    <nav class="main-menu-one main-menu">
        <div class="container">
            <div class="main-menu-one__left">
                <div class="main-menu-one__social social-list">
                    <a href="#" class="main-menu-one__social-link social-link">
                        <i class="icofont-facebook"></i>
                    </a>
                    <a href="#" class="main-menu-one__social-link social-link">
                        <i class="icofont-twitter"></i>
                    </a>
                    <a href="#" class="main-menu-one__social-link social-link">
                        <i class="icofont-instagram"></i>
                    </a>
                </div><!-- /.main-menu-one__social -->
                <div class="main-menu-one__logo">
                    <a href="index.html">
                        <img src="{{  asset('template/frontend/assets/images/logo-dark.png') }}" alt="logo-dark">
                    </a>
                </div><!-- /.main-menu-one__logo -->
                <ul class="main-menu__list">
                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="{{ request()->routeIs('blog') ? 'current' : '' }}">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="dropdown {{ request()->is('tentang-kami*') ? 'current' : '' }}">
                        <a href="#">Tentang Kami <i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li class="{{ request()->routeIs('tentang-kami') ? 'current' : '' }}">
                                <a href="{{ route('tentang-kami') }}">Profil</a>
                            </li>
                            <li class="{{ request()->routeIs('visi-misi') ? 'current' : '' }}">
                                <a href="{{ route('visi-misi') }}">Visi Misi</a>
                            </li>
                            <li class="{{ request()->routeIs('tujuan-lembaga') ? 'current' : '' }}">
                                <a href="{{ route('tujuan-lembaga') }}">Tujuan Lembaga</a>
                            </li>
                            <li class="{{ request()->routeIs('legalitas') ? 'current' : '' }}">
                                <a href="{{ route('legalitas') }}">Legalitas Badan Hukum</a>
                            </li>
                            <li class="{{ request()->routeIs('agenda-rutin') ? 'current' : '' }}">
                                <a href="{{ route('agenda-rutin') }}">Agenda Rutin</a>
                            </li>
                            <li class="{{ request()->routeIs('pengurus') ? 'current' : '' }}">
                                <a href="{{ route('pengurus') }}">Pengurus</a>
                            </li>
                            <li class="{{ request()->routeIs('program-pengalaman-kerja') ? 'current' : '' }}">
                                <a href="{{ route('program-pengalaman-kerja') }}">Program Pengalaman Kerja</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ request()->routeIs('tema-pelatihan') ? 'current' : '' }}">
                        <a href="{{ route('tema-pelatihan') }}">Tema Pelatihan</a>
                    </li>
                    <li class="{{ request()->routeIs('jadwal-pelatihan') ? 'current' : '' }}">
                        <a href="{{ route('jadwal-pelatihan') }}">Jadwal Pelatihan</a>
                    </li>
                    <li class="{{ request()->routeIs('kontak') ? 'current' : '' }}">
                        <a href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="dropdown {{ request()->is('galeri-dll*') ? 'current' : '' }}">
                        <a href="#">Galeri dll <i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li class="{{ request()->routeIs('galeri') ? 'current' : '' }}">
                                <a href="{{ route('galeri') }}">Galeri</a>
                            </li>
                            <li class="{{ request()->routeIs('formulir-pendaftaran') ? 'current' : '' }}">
                                <a href="{{ route('formulir-pendaftaran') }}">Formulir Pendaftaran</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.main-menu-one__left -->
            <div class="main-menu-one__right">
                <button type="button" class="main-menu-one__bar mobile-nav__toggler">
                    <span class="mobile-nav__toggler-bars"></span>
                    <span class="mobile-nav__toggler-bars"></span>
                    <span class="mobile-nav__toggler-bars"></span>
                </button><!-- /.mobile-nav__toggler -->
                {{-- <button type="button" class="sidebar-btn__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button><!-- /.main-menu-one__sidebar-btn --> --}}
            </div><!-- /.main-menu-one__right -->
        </div><!-- /.container -->
    </nav><!-- /.main-menu-one -->
</header><!-- /.main-header -->

<div class="stricky-header stricky-header-one stricked-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155"
                    alt="logo-dark"></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:noile@envato.com">noile@envato.com</a>
            </li>
            <li>
                <i class="fa fa-phone"></i>
                <a href="(1)245-45678">(1)245-45678 Call</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="assets/images/resources/flag-1-1.png" alt="flag">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.mobile-nav__language -->
        </div><!-- /.mobile-nav__top -->
        <div class="mobile-nav__socila main-menu__social">
            <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                <i class="icofont-facebook"></i>
            </a>
            <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                <i class="icofont-twitter"></i>
            </a>
            <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                <i class="icofont-instagram"></i>
            </a>
            <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                <i class="icofont-pinterest"></i>
            </a>
        </div><!-- /.mobile-nav__socila -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="noile-icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->