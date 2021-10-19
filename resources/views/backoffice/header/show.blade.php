@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Headers
        </div>
        <div class="card-body">
            <img src="{{asset({{$header->logo}})}}" alt="">
            <h5 class="card-title">{{$header->nom1}}</h5>
            <h5 class="card-title">{{$header->nom2}}</h5>
            <h5 class="card-title">{{$header->nom3}}</h5>
            <h5 class="card-title">{{$header->nom4}}</h5>
            <h5 class="card-title">{{$header->nom5}}</h5>
            <div class="d-flex justify-content-center">
                <a href="{{route('headers.edit', $header->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection