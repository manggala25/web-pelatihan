
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                {{-- Dashboard --}}
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Dashboards</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false">
                        <i data-feather="pie-chart"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                {{-- Section --}}
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i> <span class="hide-menu">Main Menu</span>
                </li>

                {{-- Halaman Beranda --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="home"></i><span class="hide-menu">Beranda</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.portofolio') }}" class="sidebar-link"><i class="ri-award-line"></i><span
                                    class="hide-menu">Portofolio</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.profil') }}" class="sidebar-link"><i class="ri-shield-user-line"></i><span
                                    class="hide-menu">Profil</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bentuk-pelatihan') }}" class="sidebar-link"><i class="ri-map-pin-4-line"></i><span
                                    class="hide-menu">Bentuk Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.section-bentuk-pelatihan') }}" class="sidebar-link"><i class="ri-layout-line"></i><span
                                    class="hide-menu">Sect. Bentuk Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.target-pelatihan') }}" class="sidebar-link"><i class="ri-team-line"></i><span
                                    class="hide-menu">Target Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.section') }}" class="sidebar-link"><i class="ri-home-4-line"></i><span
                                    class="hide-menu">Tambah Section</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.blog') }}" class="sidebar-link"><i class="ri-article-line"></i><span
                                    class="hide-menu">Artikel</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.mitra') }}" class="sidebar-link"><i class="ri-service-line"></i><span
                                    class="hide-menu">Mitra</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Profil --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="users"></i><span class="hide-menu">Profil</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.profil') }}" class="sidebar-link"><i   class="ri-shield-user-line"></i><span
                                    class="hide-menu">Profil</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.visimisi') }}" class="sidebar-link"><i   class="ri-file-paper-line"></i><span
                                    class="hide-menu">Visi & Misi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.testimoni') }}" class="sidebar-link"><i   class="ri-chat-quote-line"></i><span
                                    class="hide-menu">Testimoni</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i   class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>

                    </ul>
                </li>

                {{-- Visi Misi --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="book-open"></i><span class="hide-menu">Visi Misi</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.visimisi') }}" class="sidebar-link"><i   class="ri-file-paper-line"></i><span
                                    class="hide-menu">Visi & Misi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i   class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>

                    </ul>
                </li>

                {{-- Tujuan Lembaga --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="book"></i><span class="hide-menu">Tujuan Lembaga</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tujuanlembaga') }}" class="sidebar-link"><i class="ri-briefcase-4-line"></i><span
                                    class="hide-menu">Tujuan Lembaga</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i   class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>

                    </ul>
                </li>

                {{-- Legalitas Badan Hukum --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text"></i><span class="hide-menu">Legalitas Badan Hukum</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.legalitas') }}" class="sidebar-link"><i class="ri-shield-star-line"></i><span
                                    class="hide-menu">Legalitas</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i   class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>

                    </ul>
                </li>

                {{-- Pengurus --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="users"></i><span class="hide-menu">Pengurus</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.pengurus') }}" class="sidebar-link"><i class="ri-team-line"></i><span
                                    class="hide-menu">Pengurus</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i   class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>

                    </ul>
                </li>

                {{-- Blog --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="file-text"></i><span class="hide-menu">Blog/ Artikel</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.blog') }}" class="sidebar-link"><i class="ri-article-line"></i><span
                                    class="hide-menu">Blog</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.kategoriblog') }}" class="sidebar-link"><i class="ri-newspaper-line"></i><span
                                    class="hide-menu">Kategori Blog</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Tema Pelatihan --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="anchor"></i><span class="hide-menu">Tema Pelatihan</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.nama-pelatihan') }}" class="sidebar-link"><i class="ri-user-star-line"></i><span
                                    class="hide-menu">Nama Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.kategori-tema') }}" class="sidebar-link"><i class="ri-bubble-chart-line"></i><span
                                    class="hide-menu">Kategori Tema</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Jadwal Pelatihan --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="clock"></i><span class="hide-menu">Jadwal Pelatihan</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.jadwal-pelatihan') }}" class="sidebar-link"><i class="ri-map-pin-time-line"></i><span
                                    class="hide-menu">Jadwal Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Kontak --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="phone-call"></i><span class="hide-menu">Kontak</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasikontak') }}" class="sidebar-link"><i
                                    class="ri-contacts-book-line"></i><span class="hide-menu">Informasi Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Galeri --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="award"></i><span class="hide-menu">Galeri</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.portofolio') }}" class="sidebar-link"><i class="ri-award-line"></i><span
                                    class="hide-menu">Portofolio</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i
                                    class="ri-information-line"></i><span class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                {{-- Lain Lain --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i                        
                            data-feather="archive"></i><span class="hide-menu">Lain Lain</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.asset') }}" class="sidebar-link"><i class="ri-flag-line"></i><span class="hide-menu">Asset
                                    Logo</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tabsinformasi') }}" class="sidebar-link"><i class="ri-information-line"></i><span
                                    class="hide-menu">Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.sectiontabsinformasi') }}" class="sidebar-link"><i
                                    class="ri-information-line"></i><span class="hide-menu">Section Tabs Informasi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasipendaftaran') }}" class="sidebar-link"><i
                                    class="ri-customer-service-2-line"></i><span class="hide-menu">Info Pendaftaran</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bannerkontak') }}" class="sidebar-link"><i class="ri-account-box-line"></i><span
                                    class="hide-menu">Banner Kontak</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.banner') }}" class="sidebar-link"><i class="ri-image-line"></i><span
                                    class="hide-menu">Banner</span></a>
                        </li>
                    </ul>
                </li>

                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer px-3 py-4">
        <div class="bg-light-info buynow-card mb-0 mt-3 w-100">
            <img src="{{ asset('template/backend/package/html/main/../../assets/images/background/sidebar-buynow.png') }}" class="mt-n5 buynow-img" alt="flexy" />
            <div class="sidebar-footer-text">
                <h4 class="fw-bold">Selamat</h4>
                <h4 class="fw-bold">Bekerja</h4>
            </div>
        </div>
    </div>
    <!-- End Bottom points-->
</aside>