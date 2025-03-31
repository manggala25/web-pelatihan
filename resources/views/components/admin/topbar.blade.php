<header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ri-close-line ri-menu-2-line fs-6"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="{{ asset('template/backend/package/html/main/../../assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
              <!-- Light Logo icon -->
              <img src="{{ asset('template/backend/package/html/main/../../assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <img src="{{ asset('template/backend/package/html/main/../../assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
              <!-- Light Logo text -->
              <img src="{{ asset('template/backend/package/html/main/../../assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
            </span>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ri-more-line fs-6"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav me-auto">
            <!-- This is  -->
            <li class="nav-item">
              <a class="nav-link sidebartoggler d-none d-md-block" href="javascript:void(0)"><i
                  data-feather="menu"></i></a>
            </li>
            <!-- search -->
            <li class="nav-item search-box">
              <a class="nav-link" href="javascript:void(0)">
                <i data-feather="search"></i>
              </a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control border-0" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i data-feather="x-circle" class="feather-sm text-muted"></i></a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
        </div>
      </nav>
    </header>