@extends('template.back')

@section('contentBO')

        <div class="container d-flex align-items-center justify-content-center">
            <div class="card text-center mt-4 w-75">
                <div class="card-header">
                Mon Profil
                </div>
                <div class="card-body">
                    {{-- <img src="{{$profil->img}}" alt="classe"> --}}
                    <h5 class="card-title">{{$profil->name}}</h5>
                    <p>{{$profil->email}}</p>
                    <p>{{$profil->pricing_id}}</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('profils.edit', $profil->id)}}" class="btn btn-info">EDIT</a>
                    </div>
                </div>
            </div>
        </div>
        
@endsection