<!-- Header Area Start -->
<header class="top">
    <div class="header-area ptb-18 header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div class="logo">
                        <a href=""><img src="{{asset('img/logo/logo.png')}}" alt="COFFEE" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="content-wrapper">
                        <!-- Main Menu Start -->
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('classes') }}">Classes</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="header-contact text-right">
                        <a class="banner-btn" data-text="contact" href="">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->