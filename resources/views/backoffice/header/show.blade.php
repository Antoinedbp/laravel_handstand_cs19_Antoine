@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Headers
        </div>
        <div class="card-body">
            <img height="50px" width="50px" src="{{asset("img/logo/" . $navbar->logo)}}" alt="">
            <h5 style="margin-top: 3px" class="card-title">{{$navbar->nom1}}</h5>
            <h5 class="card-title">{{$navbar->nom2}}</h5>
            <h5 class="card-title">{{$navbar->nom3}}</h5>
            <h5 class="card-title">{{$navbar->nom4}}</h5>
            <h5 class="card-title">{{$navbar->nom5}}</h5>
            <h5 class="card-title">{{$navbar->nom6}}</h5>
            @can('manager')    
                <div class="d-flex justify-content-center">
                    <a href="{{route('navbars.edit', $navbar->id)}}" class="btn btn-info">EDIT</a>
                </div>
            @endcan
        </div>
    </div>
</div>
@endsection