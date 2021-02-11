<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boer naar Burger') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Icon -->
    <link rel ="icon" href = '../../img/icon/favicon.ico' type = "image/favicon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:wght@800&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/libhanddis" type="text/css"/>
    <link href='https://fonts.googleapis.com/css2?family=Dosis&family=Montserrat:wght@400&family=Amatic+SC&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nazi-typewriter" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="lightblue-background">
    <div id="page-container-shop">
        <div id="content-wrap-shop">
            <div id="page-container-shop">
                <div id="app">
                        <nav class="p-0 navbar navigation-bar-shop navbar-expand-md justify-content-center">
                            <ul class="pl-1 ml-5 navbar-nav">
                                <li class="mr-5 pr-3 nav-item nav-text">
                                    <a class="nav-link nav-text {{ Route::is('shop.step1') ? 'nav-active' : '' }}" href="/shop/{{ $shop->id }}/step1">{{ __('1. Producten') }}</a>
                                </li>
                                <li class="mr-5 pr-3 nav-item nav-text">
                                    <a class="nav-link nav-text {{ Route::is('shop.step2') ? 'nav-active' : '' }}" href="/shop/{{ $shop->id }}/step2">{{ __('2. Gegevens') }}</a>
                                </li>
                                <li class="mr-5 pr-3 nav-item nav-text">
                                    <a class="nav-link nav-text {{ Route::is('shop.step3') ? 'nav-active' : '' }}" href="/shop/{{ $shop->id }}/step3">{{ __('3. Betaling') }}</a>
                                </li>
                            </ul>
                        </nav>
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
        <footer id="footer-shop">
            <div class="footer-shop-boer d-flex justify-content-center align-text-bottom px-5">
                <div>
                    <a href="/"><img src="../../img/logo Boer naar burger_liggend_wit_color.png" class="footer-shop-logo" alt="logo Boer naar Burger" /></a>
                </div>
                <div class="pl-4 pt-1">
                    <p class="mb-0">
                        Ook zelf online producten verkopen?
                        <a href="{{ route('pages.contact') }}" class="a-footer">
                            Neem contact op!
                        </a>
                    </p>
                </div>
            </div>
        </footer>
  </div>
</body>
</html>
