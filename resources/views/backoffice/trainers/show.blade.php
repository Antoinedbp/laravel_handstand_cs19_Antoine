@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Titres
        </div>
        <div class="card-body">
            <img src="{{$trainer->img}}" alt="trainer">
            <h5 class="card-title">{{$trainer->nom}}</h5>
            <i class="{{$trainer->logo1}}"></i>
            <i class="{{$trainer->logo2}}"></i>
            <i class="{{$trainer->logo3}}"></i>
            <i class="{{$trainer->logo4}}"></i>
            <div class="d-flex justify-content-center">
                <a href="{{route('trainers.edit', $trainer->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection