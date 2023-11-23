<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('vuexy/assets/') }}" data-template="vertical-menu-template">

@include('layout.partials.headerAsset')

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layout.partials.menu')
            <div class="layout-page">
                @include('layout.partials.navbar')
                @yield('content')
            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    @include('layout.partials.footerAsset')
</body>

</html>
