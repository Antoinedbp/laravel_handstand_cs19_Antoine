@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Classes
        </div>
        <div class="card-body">
            <img height="50px" width="50px" src="{{'img/class/' . $classe->img}}" alt="classe">
            <h5 class="card-title">{{$classe->titre}}</h5>
            <p>{{$classe->trainer_id}}</p>
            <p>{{$classe->time}}</p>
            {{-- <div class="d-flex justify-content-center">
                <a href="{{route('classes.edit', $classe->id)}}" class="btn btn-info">EDIT</a>
            </div> --}}
        </div>
    </div>
</div>
@endsection