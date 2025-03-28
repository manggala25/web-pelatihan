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
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                        aria-expanded="false"><i data-feather="calendar"></i><span class="hide-menu">Blog/ Artikel</span></a>
                </li>

                <li class="nav-small-cap">
                    <i class="nav-small-line"></i> <span class="hide-menu">UI</span>
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
                            <a href="#" class="sidebar-link"><i
                                    class="ri-list-check"></i><span class="hide-menu">Kategori Tema</span></a>
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