@props(['kontak'])

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
                    <a href="#" class="topbar__page-link">Terms & Condition</a>
                    <span class="topbar__page-divider">/</span>
                    <a href="#" class="topbar__page-link">Privacy Policy</a>
                    <span class="topbar__page-divider">/</span>
                    <a href="{{ route('kontak') }}" class="topbar__page-link">Contact Us</a>
                </div><!-- /.topbar__page-list -->
            </div><!-- /.topbar__left -->
            <div class="topbar__right">
                <ul class="topbar__info topbar__right-item">
                    <li class="topbar__info-item">
                        <i class="topbar__info-icon icofont-clock-time"></i>
                        <p class="topbar__info-text">Senin - Jumat, 10.00 - 15.00</p>
                    </li>
                    <li class="topbar__info-item">
                        <i class="topbar__info-icon icofont-clock-time"></i>
                        <p class="topbar__info-text">Sabtu - Minggu, Libur</p>
                    </li>
                    @if ($kontak->isEmpty())
                        <li>
                            <i class="topbar__info-icon icon-email"></i>
                            <a href="#" class="topbar__info-text topbar__info-text--email">tidak ada data "Email"</a>
                        </li>
                    @else
                        @foreach ($kontak as $item)
                            @if ($item->nama_kontak === 'Email')
                                <li class="topbar__info-item">
                                    <i class="topbar__info-icon icon-email"></i>
                                    <a href="{{ $item->link }}" class="topbar__info-text topbar__info-text--email">
                                        {{ $item->deskripsi }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul><!-- /.topbar__date -->
            </div><!-- /.topbar__left -->

        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <div class="header">
        <div class="container">
            <div class="header__left">
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{  asset('template/frontend/assets/images/logo-light.png') }}" alt="logo-light">
                    </a>
                </div><!-- /.header-one__logo -->
                <div class="header__info">
                    <div class="header__phone">
                        <div class="header__phone-icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="header__phone-text">
                            @if ($kontak->isNotEmpty())
                                @foreach ($kontak as $item)
                                    @if ($item->nama_kontak === 'WhatsApp')
                                        <p class="header__phone-title">No. Whatsapp</p>
                                        <a href="{{ $item->link }}" class="header__phone-number">{{ $item->deskripsi }}</a>
                                    @endif
                                @endforeach
                            @else
                                <p class="header__phone-title">No. Whatsapp</p>
                                <a href="#" class="header__phone-number">tidak ada data "Whatsapp"</a>
                            @endif
                        </div>
                    </div><!-- /.header-one__phone -->
                    <div class="header__email">
                        <div class="header__email-icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="header__email-text">
                            @if ($kontak->isNotEmpty())
                                @foreach ($kontak as $item)
                                    @if ($item->nama_kontak === 'Email')
                                        <p class="header__email-title">Hubungi Email Kami!</p>
                                        <a href="{{ $item->link }}" class="header__email-address">{{ $item->deskripsi }}</a>
                                    @endif
                                @endforeach
                            @else
                                <p class="header__email-title">Hubungi Email Kami!</p>
                                <a href="#" class="header__email-address">tidak ada data "Email"</a>
                            @endif
                        </div>
                    </div><!-- /.header-one__email -->
                </div><!-- /.header-one__info -->
            </div><!-- /.header-one__left -->
            <div class="header__right">
                <a href="{{ route('kontak') }}" class="header__btn noile-btn">Konsultasi Sekarang +</a>
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
                    @if ($kontak->isNotEmpty())
                        @foreach ($kontak as $item)
                            @if ($item->nama_kontak === 'Facebook' || $item->nama_kontak === 'Twitter' || $item->nama_kontak === 'Instagram')
                                <a href="{{ $item->link }}" class="main-menu-one__social-link social-link" target="_blank">
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
                </div><!-- /.main-menu-one__social -->
                <div class="main-menu-one__logo me-4">
                    <a href="{{ route('home') }}">
                        <img src="{{  asset('template/frontend/assets/images/logo-dark.png') }}" alt="logo-dark">
                    </a>
                </div><!-- /.main-menu-one__logo -->
                <ul class="main-menu__list">
                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                        <a href="{{ route('home') }}">Beranda</a>
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
                            <li class="{{ request()->routeIs('pengurus') ? 'current' : '' }}">
                                <a href="{{ route('pengurus') }}">Pengurus</a>
                            </li>
                            {{-- <li class="{{ request()->routeIs('agenda-rutin') ? 'current' : '' }}">
                                <a href="{{ route('agenda-rutin') }}">Agenda Rutin</a>
                            </li>
                            <li class="{{ request()->routeIs('program-pengalaman-kerja') ? 'current' : '' }}">
                                <a href="{{ route('program-pengalaman-kerja') }}">Program Pengalaman Kerja</a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="{{ request()->routeIs('blog') ? 'current' : '' }}">
                        <a href="{{ route('blog') }}">Blog</a>
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
            <a href="{{ route('home') }}" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155"
                    alt="logo-dark"></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact">
            <li>
                @if ($kontak->isNotEmpty())
                    @foreach ($kontak as $item)
                        @if ($item->nama_kontak === 'Email')
                            <i class="fa fa-envelope"></i>
                            <a href="{{ $item->link }}">{{ $item->deskripsi }}</a>
                        @endif
                    @endforeach
                @else
                    <i class="fa fa-envelope"></i>
                    <a href="#">tidak ada data "Email"</a>
                @endif
            </li>
            <li>
                @if ($kontak->isNotEmpty())
                    @foreach ($kontak as $item)
                        @if ($item->nama_kontak === 'WhatsApp')
                            <i class="fa fa-phone"></i>
                            <a href="{{ $item->link }}">{{ $item->deskripsi }}</a>
                        @endif
                    @endforeach
                @else
                    <i class="fa fa-phone"></i>
                    <a href="#">tidak ada data "WhatsApp"</a>
                @endif
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
        </div><!-- /.mobile-nav__top -->
        <div class="mobile-nav__socila main-menu__social">
            @if ($kontak->isNotEmpty())
                @foreach ($kontak as $item)
                    @if ($item->nama_kontak === 'Facebook' || $item->nama_kontak === 'Twitter' || $item->nama_kontak === 'Instagram')
                        <a href="{{ $item->link }}" class="mobile-nav__socila-link main-menu__social-link" target="_blank">
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
        </div><!-- /.mobile-nav__socila -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->