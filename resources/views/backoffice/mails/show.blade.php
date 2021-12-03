@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Mail-Box
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$email->name}}</h5>
            <p>{{$email->email}}</p>
            <p>{{$email->message}}</p>
        </div>
        <button class="text-black" type="submit" ><a class="btn btn-danger" href="{{route('emails.index')}}">Retour</a></button>
    </div>
</div>
@endsection