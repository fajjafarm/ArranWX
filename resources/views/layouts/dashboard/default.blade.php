@props(['dir', 'title', 'description', 'isNavbar', 'isTour'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ $title }} | Arran Weather</title>
    <meta name="description"
        content="Long range  weather forecasts and data from Arran">
    <meta name="keywords"
        content="Ferry, Forecast,  Isle of Arran">
    <meta name="author" content="Arran Weather ">
    <meta name="DC.title" content="{{ $title }} | Arran Weather">
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
</head>

<body class="">
    <!-- Loader Start -->
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <!-- Loader End -->

    <!-- Sidebar Start-->
    @include('components.partials._body_sidebar')
    <!-- Sidebar End-->

    <!-- Wrapper Start-->
    <main class="main-content">
        <div class="position-relative {{ $isBanner ? 'iq-banner' : '' }} default">
            <!-- Header Start-->
            @include('components.partials.pro.header')
            <!-- Header End-->

            @if ($isBanner)
                <!-- Header Banner Start-->
                <x-partials.sub-header :title="$title ?? []" :description="$description ?? []" />
                <!-- Header Banner End-->
            @endif
        </div>

        <!-- Page Content Start-->
        <div class="conatiner-fluid content-inner">
            {{ $slot }}
        </div>
        <!-- Page Content End-->

        <!-- Footer Start-->
        <x-partials._body_footer />
        <!-- Footer End-->

        @if ($modalJs)
            <!-- Ajax Modal Html-->
            <x-widgets.modal-view />
        @endif
    </main>
    <!-- Wrapper End-->

    <!-- Live Customizer start -->
    <x-widgets.setting-offcanvas />
    <!-- Live Customizer end -->

    <x-modal-pop />

    <!-- Script Link start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->
    <!-- Script End -->

</body>

</html>
