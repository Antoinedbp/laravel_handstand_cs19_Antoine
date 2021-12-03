<!-- Header Area Start -->
<header class="top">
    <div class="header-area ptb-18 header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    @foreach ($headers as $header)
                        <div class="logo">
                            <a href=""><img src="{{asset("img/logo/" . $header->logo)}}" alt="COFFEE" /></a>
                        </div>     
                    @endforeach
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
                                    <li><a href="{{ route('profils.index', $profil) }}">{{$headers[0]->nom6}}</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="header-contact text-right">
                        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth 
                                <a href="{{route('hombo')}}" class="banner-btn text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                <a href="{{route('logout')}}">
                                    <!-- Authentication -->
          
                                    <form style=" margin-left:0; width:100%" method="POST" action="{{ route('logout') }}">
                                    
                                        @csrf
                                        <x-dropdown-link  class="banner-btn text-sm text-gray-700 dark:text-gray-500 underline" style="width: 100%; padding-left: 0 !important;" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                            <i class='bx bx-log-out' ></i>
                                            <span class="links_name">Log Out</span>
                                        </x-dropdown-link>
                                    </form>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="banner-btn text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="banner-btn ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->