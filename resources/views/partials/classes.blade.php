<!-- Classes Start -->
<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[0]->titre}}</h2>
                    <p>{{$titres[0]->description}}</p>
                </div>  
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-4 col-sm-6 col-xs-12">     
                <div class="single-class">
                    <div class="single-img">
                        <a href=""><img src="{{asset($classes[0]->img)}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{asset($classes[0]->img)}}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    <div class="single-content">
                        <h3><a href="">{{$classes[0]->titre}}</a></h3>
                        <ul>
                            {{-- <li><i class="zmdi zmdi-face"></i>{{$classes->trainer->user->name}}</li> --}}
                            <li><i class="zmdi zmdi-alarm"></i>{{$classes[0]->time}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">     
                <div class="single-class">
                    <div class="single-img">
                        <a href="class.html"><img src="{{asset($classes[1]->img)}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{asset($classes[1]->img)}}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    <div class="single-content">
                        <h3><a href="">{{$classes[1]->titre}}</a></h3>
                        <ul>
                            {{-- <li><i class="zmdi zmdi-face"></i>{{$classes->trainer->user->name}}</li> --}}
                            <li><i class="zmdi zmdi-alarm"></i>{{$classes[0]->time}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">     
                <div class="single-class">
                    <div class="single-img">
                        <a href=""><img src="{{asset($classes[2]->img)}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{asset($classes[2]->img)}}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    <div class="single-content">
                        <h3><a href="">{{$classes[2]->titre}}</a></h3>
                        <ul>
                            {{-- <li><i class="zmdi zmdi-face"></i>{{$classes->trainer->user->name}}</li> --}}
                            <li><i class="zmdi zmdi-alarm"></i>{{$classes[0]->time}}</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a class="banner-btn mt-55" href="" data-text="view all classes"><span>view all classes</span></a>
            </div>
        </div>
    </div>
</section>
<!-- Class Area End -->