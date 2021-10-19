@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Slider
        </div>
        <div class="card-body">
            <img src="{{asset({{$slider->img}})}}" alt="">
            <h5 class="card-title">{{$slider->petit_titre}}</h5>
            <h2>{{$slider->titre}}</h2>
            <p>{{$slider->description}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection