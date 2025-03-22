<!DOCTYPE html>
<html dir="ltr" lang="en">

<x-admin.head />

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
        stroke="#fec80e" stroke-width="2"></path>
      <path
        d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
        stroke="#fec80e" stroke-width="2"></path>
      <path id="teabag" fill="#fec80e" fill-rule="evenodd" clip-rule="evenodd"
        d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
      </path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" stroke="#fec80e"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#fec80e" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <x-admin.topbar />
    <!-- ============================================================= -->
    <!-- End Topbar header -->
    <!-- ============================================================= -->
    <!-- ============================================================= -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================= -->
    <x-admin.sidebar />
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-titles">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-12 align-self-center">
            <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4>
            <h1 class="mb-0 fw-bold">Analytical Dashboard</h1>
          </div>
          <div class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              ">
            <select class="form-select theme-select border-0" aria-label="Default select example">
              <option value="1">Today 23 March</option>
              <option value="2">Today 24 March</option>
              <option value="3">Today 25 March</option>
            </select>
            <a href="javascript:void(0)" class="btn btn-info d-flex align-items-center ms-2">
              <i class="ri-add-line me-1"></i>
              Add New
            </a>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-6">
            <div class="card welcome-card overflow-hidden bg-light-info border-0">
              <div class="card-body">
                <h3 class="text-primary position-relative">Hey John,</h3>
                <h3 class="text-primary position-relative">
                  Download latest report
                </h3>
                <a href="#" class="btn btn-info mb-4 mt-3 position-relative">Download</a>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 d-flex align-items-stretch">
                <!-- earnings card -->
                <div class="card bg-primary w-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title text-white">Earnings</h4>
                      <div class="ms-auto">
                        <span class="
                              btn btn-lg btn-info btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            ">
                          <i data-feather="dollar-sign"></i>
                        </span>
                      </div>
                    </div>
                    <div class="mt-3">
                      <h2 class="fs-8 text-white mb-0">$93,438.78</h2>
                      <span class="text-white op-5">Monthly revenue</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 d-flex align-items-stretch">
                <!-- monthly sales card -->
                <div class="card w-100 overflow-hidden">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div>
                        <h5 class="fw-normal mb-0 text-muted">
                          Monthly Sales
                        </h5>
                        <h2 class="mb-0">3246</h2>
                      </div>
                      <div class="ms-auto">
                        <span class="
                              btn btn-lg btn-warning btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            ">
                          <i data-feather="shopping-bag"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- chart -->
                  <div id="monthly-sales"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-md-flex align-items-center">
                  <div>
                    <h3 class="card-title">Sales Overview</h3>
                    <h6 class="card-subtitle">Ample admin Vs Pixel admin</h6>
                  </div>
                  <div class="ms-auto">
                    <ul class="list-style-none">
                      <li class="list-inline-item text-primary">
                        <i class="ri-checkbox-blank-circle-fill fs-1 me-1"></i>
                        Ample
                      </li>
                      <li class="list-inline-item text-info">
                        <i class="ri-checkbox-blank-circle-fill fs-1 me-1"></i>Pixel Admin
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="sales-overview" class="mt-4"></div>
              </div>
            </div>
          </div>
          <!-- column -->
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-flex align-items-center pb-3 border-bottom">
                  <div>
                    <h3 class="card-title">Total Sales</h3>
                    <h6 class="card-subtitle mb-0">Overview of Years</h6>
                  </div>
                  <div class="ms-auto">
                    <select class="form-select theme-select border-0" aria-label="Default select example">
                      <option value="1">March 2021</option>
                      <option value="2">March 2022</option>
                      <option value="3">March 2023</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <h5 class="text-muted fw-normal mb-0">Sales Yearly</h5>
                  <div class="ms-auto">
                    <h2 class="fw-bold mb-0">8,364,398</h2>
                  </div>
                </div>
                <div class="position-relative">
                  <div id="total-sales" class="mt-4 pt-2"></div>
                  <i data-feather="shopping-cart" class="total-sales-icon text-muted-lite feather-xl"></i>
                </div>
                <ul class="list-style-none d-flex justify-content-between mt-5">
                  <li class="list-inline-item">
                    <i class="
                          ri-checkbox-blank-circle-fill
                          text-info
                          fs-1
                          me-1
                        "></i>
                    2021
                  </li>
                  <li class="list-inline-item">
                    <i class="
                          ri-checkbox-blank-circle-fill
                          text-primary
                          fs-1
                          me-1
                        "></i>2020
                  </li>
                  <li class="list-inline-item">
                    <i class="
                          ri-checkbox-blank-circle-fill
                          text-warning
                          fs-1
                          me-1
                        "></i>2019
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- column -->
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-md-flex align-items-center">
                  <div>
                    <h3 class="card-title">Products Performance</h3>
                    <h6 class="card-subtitle mb-0">
                      Ample Admin Vs Pixel Admin
                    </h6>
                  </div>
                  <div class="ms-auto mt-3 mt-md-0">
                    <select class="form-select theme-select border-0" aria-label="Default select example">
                      <option value="1">March 2021</option>
                      <option value="2">March 2022</option>
                      <option value="3">March 2023</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive mt-4">
                  <table class="
                        table
                        mb-0
                        text-nowrap
                        varient-table
                        align-middle
                        fs-3
                      ">
                    <thead>
                      <tr>
                        <th scope="col" class="px-0 text-muted">Assigned</th>
                        <th scope="col" class="px-0 text-muted">Name</th>
                        <th scope="col" class="px-0 text-muted">Priority</th>
                        <th scope="col" class="px-0 text-muted text-end">
                          Budget
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="px-0">
                          <div class="d-flex align-items-center">
                            <img src="../../assets/images/users/1.jpg" class="rounded-circle" width="35" alt="flexy" />
                            <div class="ms-3">
                              <h6 class="mb-0 fw-bold">Sunil Joshi</h6>
                              <span class="text-muted fs-9">Web Designer</span>
                            </div>
                          </div>
                        </td>
                        <td class="px-0">Elite Admin</td>
                        <td class="px-0">
                          <span class="badge bg-info">Low</span>
                        </td>
                        <td class="px-0 text-dark font-weight-medium text-end">
                          $3.9K
                        </td>
                      </tr>
                      <tr>
                        <td class="px-0">
                          <div class="d-flex align-items-center">
                            <img src="../../assets/images/users/2.jpg" class="rounded-circle" width="35" alt="flexy" />
                            <div class="ms-3">
                              <h6 class="mb-0 fw-bold">Andrew McDownland</h6>
                              <span class="text-muted fs-9">Project Manager</span>
                            </div>
                          </div>
                        </td>
                        <td class="px-0">Real Homes WP Theme</td>
                        <td class="px-0">
                          <span class="badge bg-primary">Medium</span>
                        </td>
                        <td class="px-0 text-dark font-weight-medium text-end">
                          $24.5K
                        </td>
                      </tr>
                      <tr>
                        <td class="px-0">
                          <div class="d-flex align-items-center">
                            <img src="../../assets/images/users/3.jpg" class="rounded-circle" width="35" alt="flexy" />
                            <div class="ms-3">
                              <h6 class="mb-0 fw-bold">Christopher Jamil</h6>
                              <span class="text-muted fs-9">SEO Manager</span>
                            </div>
                          </div>
                        </td>
                        <td class="px-0">MedicalPro WP Theme</td>
                        <td class="px-0">
                          <span class="badge bg-warning">Hight</span>
                        </td>
                        <td class="px-0 text-dark font-weight-medium text-end">
                          $12.8K
                        </td>
                      </tr>
                      <tr>
                        <td class="px-0">
                          <div class="d-flex align-items-center">
                            <img src="../../assets/images/users/4.jpg" class="rounded-circle" width="35" alt="flexy" />
                            <div class="ms-3">
                              <h6 class="mb-0 fw-bold">Nirav Joshi</h6>
                              <span class="text-muted fs-9">Frontend Engineer</span>
                            </div>
                          </div>
                        </td>
                        <td class="px-0">Hosting Press HTML</td>
                        <td class="px-0">
                          <span class="badge bg-danger">Low</span>
                        </td>
                        <td class="px-0 text-dark font-weight-medium text-end">
                          $2.4K
                        </td>
                      </tr>
                      <tr>
                        <td class="px-0">
                          <div class="d-flex align-items-center">
                            <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="35" alt="flexy" />
                            <div class="ms-3">
                              <h6 class="mb-0 fw-bold">Micheal Doe</h6>
                              <span class="text-muted fs-9">Content Writer</span>
                            </div>
                          </div>
                        </td>
                        <td class="px-0">Helping Hands WP Theme</td>
                        <td class="px-0">
                          <span class="badge bg-success">Low</span>
                        </td>
                        <td class="px-0 text-dark font-weight-medium text-end">
                          $9.3K
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- column -->
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <img src="../../assets/images/background/blog-bg.jpg" class="card-img-top blog-img" alt="..." />
              <div class="card-body">
                <div class="d-flex align-items-center text-muted-lite">
                  <i data-feather="clock" class="feather-lg me-1"></i>
                  22 March, 2021
                </div>
                <h3 class="card-title mt-4">
                  Super awesome, Angular 12 is coming soon!
                </h3>
                <ul class="list-style-none mt-3 pt-1 pb-4">
                  <li class="list-inline-item">
                    <span class="badge bg-primary">Medium</span>
                  </li>
                  <li class="list-inline-item">
                    <span class="badge bg-danger">Low</span>
                  </li>
                </ul>
                <div class="border-top pt-4 d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="John Deo">
                      <img src="../../assets/images/users/1.jpg" class="rounded-circle" width="35" alt="flexy" />
                    </a>
                    <a href="#" class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Micheal Doe">
                      <img src="../../assets/images/users/2.jpg" class="rounded-circle" width="35" alt="flexy" />
                    </a>
                    <a href="#" class="
                          me-1
                          round-md
                          rounded-circle
                          d-flex
                          align-items-center
                          justify-content-center
                          bg-light-success
                          text-success
                        " data-bs-toggle="tooltip" data-bs-placement="top" title="Add new"><i data-feather="plus"
                        class="feather-sm"></i></a>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:void(0)" class="text-muted-lite">
                      <i data-feather="message-circle" class=""></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- column -->
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100 overflow-hidden">
              <div class="card-body pb-0">
                <div class="d-flex align-items-start">
                  <div>
                    <h3 class="card-title">Weekly Stats</h3>
                    <h6 class="card-subtitle mb-0">Average sales</h6>
                  </div>
                  <div class="ms-auto">
                    <div class="dropdown">
                      <a href="#" class="text-muted-lite" id="year1-dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i data-feather="more-horizontal"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="year1-dropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="mt-5 pb-3 d-flex align-items-center">
                  <span class="btn btn-primary btn-circle">
                    <i data-feather="shopping-cart"></i>
                  </span>
                  <div class="ms-3">
                    <h5 class="mb-0 fw-bold">Top Sales</h5>
                    <span class="text-muted fs-9">Johnathan Doe</span>
                  </div>
                  <div class="ms-auto">
                    <span class="badge bg-light-secondary text-muted">+68%</span>
                  </div>
                </div>
                <div class="py-3 d-flex align-items-center">
                  <span class="btn btn-warning btn-circle">
                    <i data-feather="star"></i>
                  </span>
                  <div class="ms-3">
                    <h5 class="mb-0 fw-bold">Best Seller</h5>
                    <span class="text-muted fs-9">MaterialPro Admin</span>
                  </div>
                  <div class="ms-auto">
                    <span class="badge bg-light-secondary text-muted">+68%</span>
                  </div>
                </div>
                <div class="pt-3 d-flex align-items-center">
                  <span class="btn btn-success btn-circle">
                    <i data-feather="message-square"></i>
                  </span>
                  <div class="ms-3">
                    <h5 class="mb-0 fw-bold">Most Commented</h5>
                    <span class="text-muted fs-9">Ample Admin</span>
                  </div>
                  <div class="ms-auto">
                    <span class="badge bg-light-secondary text-muted">+68%</span>
                  </div>
                </div>
              </div>
              <div id="weekly-stats"></div>
            </div>
          </div>
          <!-- column -->
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-flex align-items-start">
                  <div>
                    <h3 class="card-title">Daily Activities</h3>
                    <h6 class="card-subtitle mb-0">Overview of Years</h6>
                  </div>
                  <div class="ms-auto">
                    <div class="dropdown">
                      <a href="#" class="text-muted-lite" id="year1-dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i data-feather="more-horizontal"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="year1-dropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- timeline -->
                <div class="position-relative mt-5 scrollable" style="height: 300px">
                  <ul class="timeline-widget">
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-primary
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        Payment received from John Doe of $385.90
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-info flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        Project Meeting
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-warning
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        New Sale recorded
                        <a href="javascript:void(0)" class="text-info">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-danger flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        Payment was made of $64.95 to Michael Anderson
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-success
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        New payment receipt created for Alphanso Golvo
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-primary
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        New Sale recorded
                        <a href="javascript:void(0)" class="text-info">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-info flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        Project Meeting
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-primary
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        Payment received from John Doe of $385.90
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-info flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        Project Meeting
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-warning
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        New Sale recorded
                        <a href="javascript:void(0)" class="text-info">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-danger flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        Payment was made of $64.95 to Michael Anderson
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-success
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-muted mt-n1">
                        New payment receipt created for Alphanso Golvo
                      </div>
                    </li>
                    <li class="timeline-item mb-4">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="
                            timeline-badge
                            me-3
                            badge-primary
                            flex-shrink-0
                          "></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        New Sale recorded
                        <a href="javascript:void(0)" class="text-info">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item">
                      <div class="timeline-time fw-bold text-dark fs-2 mt-n1">
                        09.46
                      </div>
                      <span class="timeline-badge me-3 badge-info flex-shrink-0"></span>
                      <div class="timeline-desc fs-3 text-dark fw-bold mt-n1">
                        Project Meeting
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer">Admin Website Pelatihan✨</footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <aside class="nav-customizer" id="shopping-cart">
    <div class="nav-customizer-body">
      <div class="rounded-top d-flex p-30 bg-white pb-3 align-items-center">
        <h3 class="card-title mb-0">Shopping Cart</h3>
        <div class="ms-auto">
          <a href="javascript:void(0)" class="nav-sidebar text-muted py-0">
            <i data-feather="x-circle"></i>
          </a>
        </div>
      </div>
      <!-- items -->
      <div class="p-30 pt-0 bg-white scrollable position-relative" style="height: calc(100vh - 245px)">
        <ul class="list-style-none">
          <li class="py-4 border-bottom">
            <div class="d-flex align-items-center">
              <div>
                <img src="../../assets/images/product/s-prd1.jpg" class="btn-rounded-lg" alt="product" />
              </div>
              <div class="ms-3 ps-1">
                <h5 class="mb-0">Supreme toys cooker</h5>
                <span class="text-muted fs-3">Kitchenware Item</span>
                <div class="d-flex align-items-center">
                  <h5 class="mb-0">$250</h5>
                  <!-- widget -->
                  <div class="shopping-widget ms-2">
                    <div class="form-group mb-0 pt-1">
                      <input type="text" value="1" name="qtyspin1" id="qtyspin1"
                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                    </div>
                    <div class="decrease-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                        <i data-feather="minus" class="feather-xs"></i>
                      </button>
                    </div>
                    <div class="increase-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                        <i data-feather="plus" class="feather-xs"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="py-4 border-bottom">
            <div class="d-flex align-items-center">
              <div>
                <img src="../../assets/images/product/s-prd2.jpg" class="btn-rounded-lg" alt="product" />
              </div>
              <div class="ms-3 ps-1">
                <h5 class="mb-0">Supreme toys cooker</h5>
                <span class="text-muted fs-3">Kitchenware Item</span>
                <div class="d-flex align-items-center">
                  <h5 class="mb-0">$250</h5>
                  <!-- widget -->
                  <div class="shopping-widget ms-2">
                    <div class="form-group mb-0 pt-1">
                      <input type="text" value="1" name="qtyspin2" id="qtyspin2"
                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                    </div>
                    <div class="decrease-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                        <i data-feather="minus" class="feather-xs"></i>
                      </button>
                    </div>
                    <div class="increase-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                        <i data-feather="plus" class="feather-xs"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="py-4 border-bottom">
            <div class="d-flex align-items-center">
              <div>
                <img src="../../assets/images/product/s-prd3.jpg" class="btn-rounded-lg" alt="product" />
              </div>
              <div class="ms-3 ps-1">
                <h5 class="mb-0">Supreme toys cooker</h5>
                <span class="text-muted fs-3">Kitchenware Item</span>
                <div class="d-flex align-items-center">
                  <h5 class="mb-0">$250</h5>
                  <!-- widget -->
                  <div class="shopping-widget ms-2">
                    <div class="form-group mb-0 pt-1">
                      <input type="text" value="1" name="qtyspin3" id="qtyspin3"
                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                    </div>
                    <div class="decrease-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                        <i data-feather="minus" class="feather-xs"></i>
                      </button>
                    </div>
                    <div class="increase-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                        <i data-feather="plus" class="feather-xs"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="py-4 border-bottom">
            <div class="d-flex align-items-center">
              <div>
                <img src="../../assets/images/product/s-prd4.jpg" class="btn-rounded-lg" alt="product" />
              </div>
              <div class="ms-3 ps-1">
                <h5 class="mb-0">Supreme toys cooker</h5>
                <span class="text-muted fs-3">Kitchenware Item</span>
                <div class="d-flex align-items-center">
                  <h5 class="mb-0">$250</h5>
                  <!-- widget -->
                  <div class="shopping-widget ms-2">
                    <div class="form-group mb-0 pt-1">
                      <input type="text" value="1" name="qtyspin" id="qtyspin"
                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                    </div>
                    <div class="decrease-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                        <i data-feather="minus" class="feather-xs"></i>
                      </button>
                    </div>
                    <div class="increase-btn">
                      <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                        <i data-feather="plus" class="feather-xs"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="p-30 bg-white">
        <div class="d-flex align-items-center py-2">
          <span class="text-muted fs-3">Sub Total</span>
          <div class="ms-auto">
            <span class="text-dark font-weight-medium fs-3">$2530</span>
          </div>
        </div>
        <div class="d-flex align-items-center py-2">
          <span class="text-muted fs-3">Total</span>
          <div class="ms-auto">
            <span class="text-dark font-weight-medium fs-3">$6830</span>
          </div>
        </div>
        <a class="btn btn-info text-white w-100 d-block" href="javascript:void(0);">
          Place order
        </a>
      </div>
    </div>
  </aside>
  <!-- ============================================================= -->
  <!-- customizer Panel -->
  <!-- ============================================================= -->
  <aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin ri-settings-3-line fs-7"></i></a>
    <div class="customizer-body">
      <ul class="nav customizer-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat"
            aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false"><i class="ri-timer-line fs-6"></i></a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <!-- Tab 1 -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="p-3 border-bottom">
            <!-- Sidebar -->
            <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
            <div class="form-check mt-3">
              <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
              <label class="form-check-label" for="theme-view">
                <span>Dark Theme</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar"
                id="collapssidebar" />
              <label class="form-check-label" for="collapssidebar">
                <span>Collapse Sidebar</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
              <label class="form-check-label" for="sidebar-position">
                <span>Fixed Sidebar</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
              <label class="form-check-label" for="header-position">
                <span>Fixed Header</span>
              </label>
            </div>
            <div class="form-check mt-2">
              <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
              <label class="form-check-label" for="boxed-layout">
                <span>Boxed Layout</span>
              </label>
            </div>
          </div>
          <div class="p-3 border-bottom">
            <!-- Logo BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
              </li>
            </ul>
            <!-- Logo BG -->
          </div>
          <div class="p-3 border-bottom">
            <!-- Navbar BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
              </li>
            </ul>
            <!-- Navbar BG -->
          </div>
          <div class="p-3 border-bottom">
            <!-- Logo BG -->
            <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
            <ul class="theme-color m-0 p-0">
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
              </li>
              <li class="theme-item list-inline-item me-1">
                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
              </li>
            </ul>
            <!-- Logo BG -->
          </div>
        </div>
        <!-- End Tab 1 -->
        <!-- Tab 2 -->
        <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
          <ul class="mailbox list-style-none mt-3">
            <li>
              <div class="message-center chat-scroll position-relative">
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle online"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle busy"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle away"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
                <!-- Message -->
                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                  <span class="user-img position-relative d-inline-block">
                    <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100" />
                    <span class="profile-status rounded-circle offline"></span>
                  </span>
                  <div class="w-75 d-inline-block v-middle ps-3">
                    <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                    <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                    <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                  </div>
                </a>
                <!-- Message -->
              </div>
            </li>
          </ul>
        </div>
        <!-- End Tab 2 -->
        <!-- Tab 3 -->
        <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <h6 class="mt-3 mb-3">Activity Timeline</h6>
          <div class="steamline">
            <div class="sl-item">
              <div class="sl-left bg-light-success text-success">
                <i data-feather="user" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Meeting today <span class="sl-date"> 5pm</span>
                </div>
                <div class="desc">you can write anything</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-info text-info">
                <i data-feather="camera" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">Send documents to Clark</div>
                <div class="desc">Lorem Ipsum is simply</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg" />
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Go to the Doctor <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Contrary to popular belief</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg" />
              </div>
              <div class="sl-right">
                <div>
                  <a href="javascript:void(0)">Stephen</a>
                  <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Approve meeting with tiger</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-primary text-primary">
                <i data-feather="user" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Meeting today <span class="sl-date"> 5pm</span>
                </div>
                <div class="desc">you can write anything</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left bg-light-info text-info">
                <i data-feather="send" class="feather-sm fill-white"></i>
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">Send documents to Clark</div>
                <div class="desc">Lorem Ipsum is simply</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg" />
              </div>
              <div class="sl-right">
                <div class="font-weight-medium">
                  Go to the Doctor <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Contrary to popular belief</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-left">
                <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg" />
              </div>
              <div class="sl-right">
                <div>
                  <a href="javascript:void(0)">Stephen</a>
                  <span class="sl-date">5 minutes ago</span>
                </div>
                <div class="desc">Approve meeting with tiger</div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Tab 3 -->
      </div>
    </div>
  </aside>
  <div class="chat-windows"></div>
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <x-admin.script />
</body>

</html>