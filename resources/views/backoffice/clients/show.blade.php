@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Avis Client
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$client->avis}}</h5>
            <img src="{{$client->signature}}" alt="signature">
            <p class="{{$client->description}}"></p>
            <div class="d-flex justify-content-center">
                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection