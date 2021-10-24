<!-- Header Area Start -->
<header class="top">
    <div class="header-area ptb-18 header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div class="logo">
                        <a href=""><img src="{{asset($headers[0]->logo)}}" alt="COFFEE" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="content-wrapper">
                        <!-- Main Menu Start -->
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">{{$headers[0]->nom1}}</a></li>
                                    <li><a href="{{ route('about') }}">{{$headers[0]->nom2}}</a></li>
                                    <li><a href="{{ route('classe') }}">{{$headers[0]->nom3}}</a></li>
                                    <li><a href="{{ route('gallery') }}">{{$headers[0]->nom4}}</a></li>
                                    <li><a href="{{ route('contact') }}">{{$headers[0]->nom5}}</a></li>
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
                                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
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