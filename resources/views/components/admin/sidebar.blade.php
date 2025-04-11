
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Dashboards</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false">
                        <i data-feather="pie-chart"></i><span class="hide-menu">Analytical</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="nav-small-line"></i> <span class="hide-menu">Main Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="layout"></i><span class="hide-menu">Section</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.section') }}" class="sidebar-link"><i
                                    class="ri-home-4-line"></i><span class="hide-menu">Homepage</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Blog --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text"></i><span class="hide-menu">Blog/ Artikel</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.blog') }}" class="sidebar-link"><i
                                    class="ri-article-line"></i><span class="hide-menu"> Blog</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Portofolio --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="award"></i><span class="hide-menu">Portofolio</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.portofolio') }}" class="sidebar-link"><i
                                    class="ri-award-line"></i><span class="hide-menu">Portofolio</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Pelatihan --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="anchor"></i><span class="hide-menu">Pelatihan</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.nama-pelatihan') }}" class="sidebar-link"><i
                                    class="ri-user-star-line"></i><span class="hide-menu">Nama Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.kategori-tema') }}" class="sidebar-link"><i
                                    class="ri-bubble-chart-line"></i><span class="hide-menu">Kategori Tema</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.bentuk-pelatihan') }}" class="sidebar-link"><i
                                    class="ri-map-pin-4-line"></i><span class="hide-menu">Bentuk Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.section-bentuk-pelatihan') }}" class="sidebar-link"><i
                                    class="ri-layout-line"></i><span class="hide-menu">Section Bentuk Pelatihan</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.target-pelatihan') }}" class="sidebar-link"><i
                                    class="ri-team-line"></i><span class="hide-menu">Target Pelatihan</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Tentang Kami --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="users"></i><span class="hide-menu">Tentang Kami</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.profil') }}" class="sidebar-link"><i class="ri-shield-user-line"></i><span
                                    class="hide-menu">Profil</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.visimisi') }}" class="sidebar-link"><i class="ri-file-paper-line"></i><span
                                    class="hide-menu">Visi & Misi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.tujuanlembaga') }}" class="sidebar-link"><i class="ri-briefcase-4-line"></i><span
                                    class="hide-menu">Tujuan Lembaga</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.testimoni') }}" class="sidebar-link"><i class="ri-chat-quote-line"></i><span
                                    class="hide-menu">Testimoni</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.mitra') }}" class="sidebar-link"><i class="ri-service-line"></i><span
                                    class="hide-menu">Mitra</span></a>
                        </li>
                    </ul>
                </li>
                {{-- Kontak --}}
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            data-feather="phone-call"></i><span class="hide-menu">Kontak</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ Route('admin.informasikontak') }}" class="sidebar-link"><i class="ri-contacts-book-line"></i><span
                                    class="hide-menu">Informasi Kontak</span></a>
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