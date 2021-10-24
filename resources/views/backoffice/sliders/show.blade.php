@extends('template.back')

@section('contentBO')

    <div class="container d-flex justify-content-center mt-5 text-center" style="margin-left: 10rem">
        <div class="card" style="width: 32rem;">
            <img src="{{asset($slider->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$slider->petit_titre}}</h5>
              <h2>{{$slider->titre}}</h2>
              <p class="card-text">{{$slider->description}}</p>
              <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>

@endsection