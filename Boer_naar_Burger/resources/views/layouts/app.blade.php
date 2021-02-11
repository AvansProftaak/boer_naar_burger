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
        <div id="page-container">
            <div id="content-wrap">
                <div id="app">
                    <nav class="p-0 navbar navigation-bar navbar-expand-md navbar-light shadow-sm">
                        <div class="container">
                            <a class="navbar-brand p-0" href="{{ url('/') }}">
                                <div><img src="../../img/logo Boer naar burger_liggend_wit_color.png" class="navlogo"></div>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="pl-5 ml-5 navbar-nav">
                                    <li class="mr-5 pr-3 nav-item nav-text">
                                        <a class="nav-link nav-text" href="/">{{ __('HOME') }}</a>
                                    </li>
                                    <li class="mr-5 pr-3 nav-item nav-text">
                                        <a class="nav-link nav-text" href="{{ route('pages.about') }}">{{ __('WIE ZIJN WIJ') }}</a>
                                    </li>
                                    <li class="mr-5 pr-3 nav-item nav-text">
                                        <a class="nav-link nav-text" href="{{ route('pages.contact') }}">{{ __('CONTACT') }}</a>
                                    </li>
                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item nav-text-login">
                                                <a class="nav-link nav-text" href="{{ route('login') }}">{{ __('Log in') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item nav-text-login">
                                                <a class="nav-link nav-text" href="{{ route('register') }}">{{ __('Registreer') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item nav-text-login nav-text dropdown">
                                            <a id="navbarDropdown" class="nav-text-login nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->email }}
                                            </a>

                                            <div class="dropdown-menu dropdown-right dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item dropdown-right-item" href="{{ route('account.show') }}">
                                                    {{ __('Accountoverview') }}
                                                </a>

                                                <a class="dropdown-item dropdown-right-item" href="{{ route('account.edit') }}">
                                                    {{ __('Mijn Gegevens') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                <a class="dropdown-item dropdown-right-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Uitloggen') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
            <footer id="footer">
                <div>
                    <img class="footerimage" src="../../img/footer_b2b.jpg">
                </div>
                <div class="container-fluid footer">
                    <div class="row mb-3">
                        <div class="px-5 mx-5 col footer-content">
                            <h2 class="h2-footer">Over ons</h2>
                            <div>
                                <p>
                                    Boer naar Burger biedt een platform waarop producten aangeboden worden, die in de huidige maatschappij verloren gaan.
                                    Door deze producten te verhandelen helpen wij boeren van hun overproductie af, en ondersteunen wij onze medemens in moeilijkere tijden.
                                    Daarnaast bieden wij consumenten, producten met een verhaal; (h)eerlijk en betrouwbaar.
                                </p>
                                <div class="social">
                                    <a href="https://facebook.com/" target="_blank"><span class="a-footer a-icons p-2 fab fa-facebook-f"></span></a>
                                    <a href="https://instagram.com" target="_blank"><span class="a-footer a-icons p-2 fab fa-instagram"></span></a>
                                    <a href="https://twitter.com" target="_blank"><span class="a-footer a-icons p-2 fab fa-twitter"></span></a>
                                    <a href="https://linkedin.com" target="_blank"><span class="a-footer a-icons p-2 fab fa-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 mx-5 col footer-content larger-font">
                            <img src="../../img/logo Boer naar burger_liggend_wit_color.png" width=100%>
                            <div>
                                <div class="place">
                                    <span class="fas fa-map-marker-alt"></span>
                                    <span class="text">Burgerkinglaan 232, Breda</span>
                                </div>
                                <div class="phone">
                                    <span class="fas fa-phone-alt"></span>
                                    <span class="text">+31 (0)76 - 123 456 78</span>
                                </div>
                                <div class="email">
                                    <span class="fas fa-envelope"></span>
                                    <span class="mail"><a href="mailto:info@boernaarburger.ml" class="a-footer">info@boernaarburger.ml</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 pt-3 mx-5 col footer-content">
                            <div>
                                <h2 class="h2-footer">Service</h2>
                                <li><a href="#" class="a-footer">Sitemap</a> </li>
                                <li><a href="#" class="a-footer">Veelgestelde vragen</a></li>
                                <li><a href="#" class="a-footer">Contact</a></li>
                                <br/>
                                <button type="button" class="btn btn-pink">
                                    {{ __('Meld je aan als klant') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">© 2020 Copyright: groep 4A - Deeltijdopleiding Informatica aan Avans Hogeschool Breda</div>
            </footer>
        </div>
    </div>
</body>
</html>
