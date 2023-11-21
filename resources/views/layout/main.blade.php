<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('vuexy/assets/') }}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Input Data</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('vuexy/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('vuexy/assets/vendor/css/pages/cards-advance.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('vuexy/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('vuexy/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('vuexy/assets/img/BAM/bam.png') }}" height="30"/>
                        </span>
                        
                        <span class="app-brand-text demo menu-text fw-bold">Inventaris</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="index.html" class="menu-link">
                                    <div data-i18n="Input Data">Input Data</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="dashboards-crm.html" class="menu-link">
                                    <div data-i18n="Cetak Data">Cetak Data</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="dashboards-ecommerce.html" class="menu-link">
                                    <div data-i18n="Tambah Referensi">Tambah Referensi</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Reports -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Reports</span>
                    </li>
                    <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-mail"></i>
                            <div data-i18n="Head Office">Head Office</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-messages"></i>
                            <div data-i18n="Klinik">Klinik</div>
                        </a>
                    </li>                    
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                            <div data-i18n="Rumah Sakit">Rumah Sakit</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-invoice-list.html" class="menu-link">
                                    <div data-i18n="Layanan Medis">Layanan Medis</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-preview.html" class="menu-link">
                                    <div data-i18n="Penunjang Medis">Penunjang Medis</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-edit.html" class="menu-link">
                                    <div data-i18n="SDM Umum">SDM Umum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                                    href="javascript:void(0);">
                                    <i class="ti ti-search ti-md me-2"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Style Switcher -->
                            <li class="nav-item me-2 me-xl-0">
                                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                    <i class="ti ti-md"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('vuexy/assets/img/avatars/1.png') }}" alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('vuexy/assets/img/avatars/1.png') }}" alt
                                                            class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-help-center-landing.html">
                                            <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="ti ti-help me-2 ti-sm"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-pricing.html">
                                            <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                                            <span class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Website Analytics -->
                            <div class="col-lg-6 mb-4">
                                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg"
                                    id="swiper-with-pagination-cards">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex mb-4 align-items-center">
                                                                        <p
                                                                            class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                            28%</p>
                                                                        <p class="mb-0">Sessions</p>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-2">
                                                                        <p
                                                                            class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                            1.2k</p>
                                                                        <p class="mb-0">Leads</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex mb-4 align-items-center">
                                                                        <p
                                                                            class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                            3.1k</p>
                                                                        <p class="mb-0">Page Views</p>
                                                                    </li>
                                                                    <li class="d-flex align-items-center mb-2">
                                                                        <p
                                                                            class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                            12%</p>
                                                                        <p class="mb-0">Conversions</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                        <img src="{{ asset('vuexy/assets/img/illustrations/card-website-analytics-1.png') }}"
                                                            alt="Website Analytics" width="170"
                                                            class="card-website-analytics-img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        12h</p>
                                                                    <p class="mb-0">Spend</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        127</p>
                                                                    <p class="mb-0">Order</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        18</p>
                                                                    <p class="mb-0">Order Size</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        2.3k</p>
                                                                    <p class="mb-0">Items</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                    <img src="{{ asset('vuexy/assets/img/illustrations/card-website-analytics-2.png') }}"
                                                        alt="Website Analytics" width="170"
                                                        class="card-website-analytics-img" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                                                    <small>Total 28.5% Conversion Rate</small>
                                                </div>
                                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        268</p>
                                                                    <p class="mb-0">Direct</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        62</p>
                                                                    <p class="mb-0">Referral</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-4 align-items-center">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        890</p>
                                                                    <p class="mb-0">Organic</p>
                                                                </li>
                                                                <li class="d-flex align-items-center mb-2">
                                                                    <p
                                                                        class="mb-0 fw-semibold me-2 website-analytics-text-bg">
                                                                        1.2k</p>
                                                                    <p class="mb-0">Campaign</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                                    <img src="{{ asset('vuexy/assets/img/illustrations/card-website-analytics-3.png') }}"
                                                        alt="Website Analytics" width="170"
                                                        class="card-website-analytics-img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!--/ Website Analytics -->

                            <!-- Sales Overview -->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <small class="d-block mb-1 text-muted">Sales Overview</small>
                                            <p class="card-text text-success">+18.2%</p>
                                        </div>
                                        <h4 class="card-title mb-1">$42.5k</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="d-flex gap-2 align-items-center mb-2">
                                                    <span class="badge bg-label-info p-1 rounded"><i
                                                            class="ti ti-shopping-cart ti-xs"></i></span>
                                                    <p class="mb-0">Order</p>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                                <small class="text-muted">6,440</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="divider divider-vertical">
                                                    <div class="divider-text">
                                                        <span class="badge-divider-bg bg-label-secondary">VS</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                                    <p class="mb-0">Visits</p>
                                                    <span class="badge bg-label-primary p-1 rounded"><i
                                                            class="ti ti-link ti-xs"></i></span>
                                                </div>
                                                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                                <small class="text-muted">12,749</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-4">
                                            <div class="progress w-100" style="height: 8px">
                                                <div class="progress-bar bg-info" style="width: 70%"
                                                    role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales Overview -->

                            <!-- Revenue Generated -->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-icon">
                                            <span class="badge bg-label-success rounded-pill p-2">
                                                <i class="ti ti-credit-card ti-sm"></i>
                                            </span>
                                        </div>
                                        <h5 class="card-title mb-0 mt-2">97.5k</h5>
                                        <small>Revenue Generated</small>
                                    </div>
                                    <div id="revenueGenerated"></div>
                                </div>
                            </div>
                            <!--/ Revenue Generated -->

                            <!-- Earning Reports -->
                            <div class="col-lg-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Earning Reports</h5>
                                            <small class="text-muted">Weekly Earnings Overview</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="earningReportsId"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="earningReportsId">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                                                <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                                                    <h1 class="mb-0">$468</h1>
                                                    <div class="badge rounded bg-label-success">+4.2%</div>
                                                </div>
                                                <small class="text-muted">You informed of this week compared to last
                                                    week</small>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div id="weeklyEarningReports"></div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mt-2">
                                            <div class="row gap-4 gap-sm-0">
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-primary p-1">
                                                            <i class="ti ti-currency-dollar ti-sm"></i>
                                                        </div>
                                                        <h6 class="mb-0">Earnings</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$545.69</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-info p-1"><i
                                                                class="ti ti-chart-pie-2 ti-sm"></i></div>
                                                        <h6 class="mb-0">Profit</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$256.34</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="badge rounded bg-label-danger p-1">
                                                            <i class="ti ti-brand-paypal ti-sm"></i>
                                                        </div>
                                                        <h6 class="mb-0">Expense</h6>
                                                    </div>
                                                    <h4 class="my-2 pt-1">$74.19</h4>
                                                    <div class="progress w-75" style="height: 4px">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Earning Reports -->

                            <!-- Support Tracker -->
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="mb-0">Support Tracker</h5>
                                            <small class="text-muted">Last 7 Days</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="supportTrackerMenu"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="supportTrackerMenu">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                                                <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                                                    <h1 class="mb-0">164</h1>
                                                    <p class="mb-0">Total Tickets</p>
                                                </div>
                                                <ul class="p-0 m-0">
                                                    <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                                                        <div class="badge rounded bg-label-primary p-1"><i
                                                                class="ti ti-ticket ti-sm"></i></div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">New Tickets</h6>
                                                            <small class="text-muted">142</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                                                        <div class="badge rounded bg-label-info p-1">
                                                            <i class="ti ti-circle-check ti-sm"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                                                            <small class="text-muted">28</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex gap-3 align-items-center pb-1">
                                                        <div class="badge rounded bg-label-warning p-1"><i
                                                                class="ti ti-clock ti-sm"></i></div>
                                                        <div>
                                                            <h6 class="mb-0 text-nowrap">Response Time</h6>
                                                            <small class="text-muted">1 Day</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                                                <div id="supportTracker"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Support Tracker -->

                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , TIM IT Pengembangan Bisnis & Marketing BAM
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('vuexy/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('vuexy/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('vuexy/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('vuexy/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('vuexy/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('vuexy/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('vuexy/assets/js/dashboards-analytics.js') }}"></script>
</body>

</html>
