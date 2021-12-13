@extends('template.back')

@section('contentBO')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
            Footer
            </div>
            <div class="card-body">
                <img src="{{asset('img/logo/' . $footer->logo)}}" alt=""> 
                <p class="card-text">{{$footer->description}}</p>
                <p class="card-text">{{$footer->mail}}</p>
                <p class="card-text">{{$footer->tel}}</p>
                <p class="card-text">{{$footer->map->rue}} {{$footer->map->numero}}, {{$footer->map->cp}} {{$footer->map->ville}}</p>
                <p class="card-text">{{$footer->titre_1}}</p>
                <p class="card-text">{{$footer->tweet_1}}</p>
                <p class="card-text">{{$footer->site_1}}</p>
                <p class="card-text">{{$footer->tweet_2}}</p>
                <p class="card-text">{{$footer->site_2}}</p>
                <p class="card-text">{{$footer->btn}}</p>
                <p class="card-text">{{$footer->copyright}}</p>
                @can('manager')    
                    <div class="d-flex justify-content-center">
                        <a href="{{route('footers.edit', $footer->id)}}" class="btn btn-info">EDIT</a>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection