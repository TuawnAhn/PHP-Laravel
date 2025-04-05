<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Vineta - Multipurpose eCommerce')</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Themesflat Vineta - A modern and versatile eCommerce template designed for various online stores, including fashion, furniture, electronics, and more. SEO-friendly, fast-loading, and highly customizable.">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('client/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('client/fonts/font-icons.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/styles.css') }}">

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset('client/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('client/images/logo/favicon.png') }}">
</head>

<body>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right"></span>
    </button>

    <!-- Preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Top Bar and Header -->
        @include('client.partials.header')

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('client.partials.footer')

        <!-- Modals -->
        @include('client.partials.modals')
    </div>

    <!-- Scripts -->
    @include('client.partials.scripts')
</body>

</html>
