@extends('template.back')

@section('contentBO')

    <div class="container d-flex align-items-center justify-content-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
              Titres
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$titre->titre}}</h5>
                <p class="card-text">{{$titre->description}}</p>
                
                <div class="d-flex justify-content-center">
                    <a href="{{route('titres.edit', $titre->id)}}" class="btn btn-info">EDIT</a>
                </div>
                
               
            </div>
        </div>
    </div>

@endsection