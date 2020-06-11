<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <header class="header">
        <a class="header__logo" href="#"><img src="" alt="logo"></a>
        <nav class="nav">
            <a class="nav__link" href="">Listings</a>
            <a class="nav__link" href="#">Agents</a>
            <a class="nav__link" href="#">Contact</a>
            @guest
                <a class="nav__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="nav__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a href="#">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            @endguest
            <a class="nav__link nav__link--create-listing-btn" href="#"><i class="fa fa-plus nav__link-icon"></i>Create Listing</a>
        </nav>
        <button class="nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__col">
            <h3 class="footer__col-header">About</h3>
            <p class="footer__col-text">Lorem ipsum  adipisicing elit. Suscipit sit recusandae odit rerum in eos debitis itaque.</p>
        </div>

        <div class="footer__col">
            <h3 class="footer__col-header">Quick Links</h3>
            <ul class="footer__col-list">
                <li class="footer__col-item"><a class="footer__col-link" href="#">About Us</a></li>
                <li class="footer__col-item"><a class="footer__col-link" href="#">Terms & Conditions</a></li>
                <li class="footer__col-item"><a class="footer__col-link" href="#">Support Center</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h3 class="footer__col-header">Contact Us</h3>
            <ul class="footer__col-list">
                <li class="footer__col-item"><a href="#" class="footer__col-link">info@findhouse.com</a></li>
                <li class="footer__col-item"><a href="#" class="footer__col-link">Collins St West Virginia, 8007, Australlia</a></li>
                <li class="footer__col-item"><a href="#" class="footer__col-link">246-345-0699</a></li>
                <li class="footer__col-item"><a href="#" class="footer__col-link">246-345-0695</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h3 class="footer__col-header">Follow Us</h3>
            <ul class="footer__col-social-list">
                <li class="footer__col-social-item"><a href="#" class="footer__col-social-link"><i class="fa fa-facebook footer__col-social-icon"></i></a></li>
                <li class="footer__col-social-item"><a href="#" class="footer__col-social-link"><i class="fa fa-twitter footer__col-social-icon"></i></a></li>
                <li class="footer__col-social-item"><a href="#" class="footer__col-social-link"><i class="fa fa-instagram footer__col-social-icon"></i></a></li>
            </ul>

            <h3 class="footer__col-header">Subscribe</h3>
            <form class="footer__col-form">
                <input type="text" placeholder="Your email" class="footer__col-input"/>
                <button class="footer__col-submit-btn"><i class="fa fa-chevron-right footer__col-submit-icon"></i></button>
            </form>
        </div>

    </footer>

    <div class="sub-footer">
        <ul class="sub-footer__list">
            <li class="sub-footer__item"><a href="#" class="sub-footer__link">Home</a></li>
            <li class="sub-footer__item"><a href="#" class="sub-footer__link">Listings</a></li>
            <li class="sub-footer__item"><a href="#" class="sub-footer__link">Agents</a></li>
            <li class="sub-footer__item"><a href="#" class="sub-footer__link">Contact</a></li>
        </ul>
        <p class="sub-footer__copyright">&copy; 2020 Find House, Inc.</p>
    </div>

    <script>
        const hamburgerBtn = document.querySelector('.nav-btn');
        const nav = document.querySelector('.nav');
        hamburgerBtn.addEventListener('click', function() {            
            nav.classList.toggle('nav--open')
        });
    </script>
</body>
</html>
