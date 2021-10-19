@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Bouton
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$bouton->btn_slider}}</h5>
            <h5 class="card-title">{{$bouton->btn_about}}</h5>
            <h5 class="card-title">{{$bouton->btn_classes}}</h5>
            <div class="d-flex justify-content-center">
                <a href="{{route('boutons.edit', $bouton->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection