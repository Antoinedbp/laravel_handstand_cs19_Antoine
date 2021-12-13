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
            <a href="{{$trainer->linkLogo1}}"></a>
            <i class="{{$trainer->logo2}}"></i>
            <a href="{{$trainer->linkLogo2}}"></a>
            <i class="{{$trainer->logo3}}"></i>
            <a href="{{$trainer->linkLogo3}}"></a>
            <i class="{{$trainer->logo4}}"></i>
            <a href="{{$trainer->linkLogo4}}"></a>
            @can('manager')    
                <div class="d-flex justify-content-center">
                    <a href="{{route('trainers.edit', $trainer->id)}}" class="btn btn-info">EDIT</a>
                </div>
            @endcan
        </div>
    </div>
</div>
@endsection