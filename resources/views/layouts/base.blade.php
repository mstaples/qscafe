<!DOCTYPE HTML>
<html>
<head>
    <title>Q's Cafe - @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lte IE 8]>
        <script type="text/javascript" src="{{ asset('js/ie/html5shiv.js') }}"></script>
    <![endif]-->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!--[if lte IE 9]>
        <link href="{{ asset('css/ie9.css') }}" rel="stylesheet">
    <![endif]-->
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
        <header id="header" class="container">
            <div class="row">
                <div class="12u">

                    <!-- Logo -->
                    <h1><a href="{{ route('home') }}" id="logo"><img src="{{ asset('images/QsCafe.png') }}" id="logo">'s Cafe</a></h1>

                    <!-- Nav -->
                    <nav id="nav">
                        @include('segment.nav')
                    </nav>

                </div>
            </div>
        </header>
        <div id="banner">
            @yield('banner')
        </div>
    </div>

    <!-- Body -->
    @yield('body')

    <!-- Footer -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="8u 12u(mobile)">

                    <!-- Links -->
                    <section>
                        <h2>Get in Touch or Just Drop By</h2>
                        <div>
                            <div class="row">
                                <div class="3u 12u(mobile)">
                                    222 W. Hickory St<br/>
                                    Suite 103<br/>
                                    Denton, Tx 76021<br/>
                                    <a href="https://goo.gl/maps/32ifVgT9nYy" target="_blank">map</a>
                                </div>
                                <div class="3u 12u(mobile)">
                                    <ul class="link-list last-child">
                                        <li><a href="https://www.instagram.com/qscafesdenton" target="_blank">Instagram</a></li>
                                        <li><a href="https://www.facebook.com/qscafedenton" target="_blank">Facebook</a></li>
                                        <li><a href="https://twitter.com/qscafedenton" target="_blank">Twitter</a></li>
                                        <li>qscafedenton@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="3u 12u(mobile)">
                                    <ul class="link-list last-child">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="4u 12u(mobile)">

                    <!-- Blurb -->
                    <section>
                        <h2>About Q's Cafe</h2>
                        <p>
                            Q's is not just a gay bar. We're a performance space, a café, a coffee shop, a study space, a spot to sober up, and yes, also a gay bar. We provide a community space for everyone, lgbtq or allies, all faiths, all ages, all backgrounds.
                            @guest
                            <a href="{{ route('register') }}">Sign up to receive notifications about shows and specials!</a>
                            @endguest
                        </p>
                    </section>

                </div>
            </div>
        </footer>
    </div>

    <!-- Copyright -->
    @auth
        <div id="copyright">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                &copy; Q's Cafe Denton. All rights reserved
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @endauth
    @guest
        <div id="copyright">
            <a href="{{ route('login') }}">&copy; Q's Cafe Denton. All rights reserved</a>
        </div>
    @endguest

</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/skel.min.js') }}"></script>
<script src="{{ asset('js/skel-viewport.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<!--[if lte IE 8]>
<script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>