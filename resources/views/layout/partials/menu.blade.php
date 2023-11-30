<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('vuexy/assets/img/BAM/bam.png') }}" height="30" />
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
        <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Input Inventoris -->
        <li class="menu-item {{ request()->is('admin/input-data') ? 'active' : '' }}">
            <a href="{{ route('admin.input-data') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-keyboard"></i>
                <div data-i18n="Input Data">Input Data</div>
            </a>
        </li>
        <!-- //Input Inventori-->


        <!-- Reports -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>
        <li class="menu-item {{ request()->is('admin/reports/head-office') ? 'active' : '' }}">
            <a href="{{ route('admin.reports-head-office') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-house-laptop fa-xs"></i>
                <div data-i18n="Head Office">Head Office</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/reports/klinik') ? 'active' : '' }}">
            <a href="{{ route('admin.reports-klinik') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-house-chimney-medical fa-xs"></i>
                <div data-i18n="Klinik">Klinik</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/reports/rs') ? 'active' : '' }}">
            <a href="{{ route('admin.rs') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-hospital fa-xs"></i>
                <div data-i18n="Rumah Sakit">Rumah Sakit</div>
            </a>
        </li>

        <!-- Master Data -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>
        <li class="menu-item {{ request()->is('admin/master-data/m-inventori') ? 'active' : '' }}">
            <a href="{{ route('admin.minventori') }}" class="menu-link">
                <i class="menu-icon fa fa-database fa-xs"></i>
                <div data-i18n="Master Inventori">Master Inventori</div>
            </a>
        </li>
</aside>
<!-- / Menu -->
