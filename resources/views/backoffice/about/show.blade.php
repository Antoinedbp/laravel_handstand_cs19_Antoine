@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            About
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$about->titre}}</h5>
                <p class="card-text">{{$about->description_1}}</p>
                <p class="card-text">{{$about->description_2}}</p>
                <p class="card-text">{{$about->btn}}</p>
                <img src="{{asset('img/about/' . $about->img_video)}}" alt="">
                <a class="video-popup" href={{$about->video}}></a>
                @can('manager')    
                    <div class="d-flex justify-content-center">
                        <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-info">EDIT</a>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection