@if (Request::url() === 'http://127.0.0.1:8000/about' )
    <section class="banner-area text-left">	
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>{{$headers[0]->nom2}}</h2>
                            <div class="banner-breadcrumb">
                                <ul>
                                    <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                    <li>{{$headers[0]->nom2}}</li>
                                </ul>
                            </div>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </section>
@elseif (Request::url() === 'http://127.0.0.1:8000/classe' )
<section class="banner-area text-left">	
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="banner-content-wrapper">
                <div class="banner-content">
                    <h2>{{$headers[0]->nom3}}</h2>
                    <div class="banner-breadcrumb">
                        <ul>
                            <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                            <li>{{$headers[0]->nom3}}</li>
                        </ul>
                    </div>
                </div>  
            </div> 
        </div>
    </div>
</div>
</section>
@elseif (Request::url() === 'http://127.0.0.1:8000/gallery' )
    <section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>{{$headers[0]->nom4}}</h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>{{$headers[0]->nom4}}</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>
@elseif (Request::url() === 'http://127.0.0.1:8000/contact' )
    <section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>{{$headers[0]->nom5}}</h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>{{$headers[0]->nom5}}</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>
@endif
