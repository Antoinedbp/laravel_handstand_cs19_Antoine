@php
$first = Str::before($sliders[0]->titre, '(');
$middle = Str::between($sliders[0]->titre, '(', ')');
$last = Str::after($sliders[0]->titre, ')');
@endphp
<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        @foreach ($sliders as $slider)
            <div class="single-slide" style="background-image: url('{{asset('img/slider/' . $slider->img)}}');">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-left">
                                        <h5>{{$slider->petit_titre}}</h5>
                                        @if ($first == $middle && $middle == $last)
                                            <h1>{{$first}}</h1>
                                        @else
                                            <h1>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h1>
                                        @endif
                                        <p>{{$slider->description}}</p>
                                        <a class="banner-btn" href="" data-text="read more"><span>{{$slider->btn}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Background Area End -->