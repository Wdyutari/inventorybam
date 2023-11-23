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
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/" class="menu-link">
                        <div data-i18n="Input Data">Input Data</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('cetak-data') ? 'active' : '' }}">
                    <a href="/cetak-data" class="menu-link">
                        <div data-i18n="Cetak Data">Cetak Data</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('referensi') ? 'active' : '' }}">
                    <a href="/referensi" class="menu-link">
                        <div data-i18n="Tambah Referensi">Tambah Referensi</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Reports -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>
        <li class="menu-item {{ request()->is('reports/head-office') ? 'active' : '' }}">
            <a href="/reports/head-office" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Head Office">Head Office</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('reports/klinik') ? 'active' : '' }}">
            <a href="/reports/klinik" class="menu-link">
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
        <!-- Master Data -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>
        <li class="menu-item {{ request()->is('master-data/unit-kerja') ? 'active' : '' }}">
            <a href="/master-data/unit-kerja" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Unit Kerja">Unit Kerja</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Unit Bisnis">Unit Bisnis</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Jenis Inventori">Jenis Inventori</div>
            </a>
            {{-- <ul class="menu-sub">
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
            </ul> --}}
        </li>
</aside>
<!-- / Menu -->
