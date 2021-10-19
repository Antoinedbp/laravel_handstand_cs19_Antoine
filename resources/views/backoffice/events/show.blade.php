@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Classes
        </div>
        <div class="card-body">
            <h3 class="card-title">{{$event->titre}}</h3>
            <p>{{$event->description}}</p>
            <p>{{$event->date}}</p>
            <p>{{$event->time}}</p>
            <div class="d-flex justify-content-center">
                <a href="{{route('events.edit', $event->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection