@props(['title'])
<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border default">
    <div class="container-fluid navbar-inner">
        <a href="{{ route('dashboards') }}" class="navbar-brand">
            <x-logo />
            <h4 class="logo-title d-none d-sm-block" >Arran Weather</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon d-flex">
                <svg width="20px" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div>
        <div class="d-flex align-items-center justify-content-between product-offcanvas">
            <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                <small class="mb-0 text-capitalize">{{ $title }}</small>
            </div>
            <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                id="offcanvasBottom">
                <div class="offcanvas-body">
                    <ul class="iq-nav-menu list-unstyled">
                        @include(('vendor.laravel-menu.custom-menu-items'), ['items' => $HopeUIHorizontalMenu->roots()])
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">

            <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-bar bar1 mt-1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
        </div>
</div>
</nav>
