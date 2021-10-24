<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        <div class="single-slide" style="background-image: url('{{asset($sliders[0]->img)}}');">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{$sliders[0]->petit_titre}}</h5>
                                    <h1>{{$sliders[0]->titre}}</h1>
                                    <p>{{$sliders[0]->description}}</p>
                                    <a class="banner-btn" href="" data-text="read more"><span>read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide" style="background-image: url('{{asset($sliders[1]->img)}}');">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{$sliders[1]->petit_titre}}</h5>
                                    <h1>{{$sliders[1]->titre}}</h1>
                                    <p>{{$sliders[1]->description}}</p>
                                    <a class="banner-btn" href="" data-text="read more"><span>read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background Area End -->