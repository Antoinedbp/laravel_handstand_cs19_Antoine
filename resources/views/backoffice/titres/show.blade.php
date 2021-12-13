@extends('template.back')

@section('contentBO')

    <div class="container d-flex align-items-center justify-content-center" style="margin-top: 5rem; margin-left: 10rem">
        <div class="card text-center w-75">
            <div class="card-header">
              Titres
            </div>
            <div class="card-body">
                <h4 class="card-title">{{$titre->titre}}</h4>
                <p class="card-text">{{$titre->description}}</p>
                @can('manager')    
                    <div class="d-flex justify-content-center">
                        <a href="{{route('titres.edit', $titre->id)}}" class="btn btn-info">EDIT</a>
                    </div>
                @endcan
            </div>
        </div>
    </div>

@endsection