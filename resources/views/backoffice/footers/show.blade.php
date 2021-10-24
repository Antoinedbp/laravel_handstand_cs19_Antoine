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
                <img src="{{asset($item->img_video)}}" alt="">
                <a class="video-popup" href={{$item->video}}></a>
                <div class="d-flex justify-content-center">
                    <a href="{{route('abouts.edit', $about->id)}}" class="btn btn-info">EDIT</a>
                </div>
            </div>
        </div>
    </div>
@endsection