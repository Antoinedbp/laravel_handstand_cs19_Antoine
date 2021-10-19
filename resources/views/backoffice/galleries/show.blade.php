@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Gallery
        </div>
        <div class="card-body">
            <img src="{{$gallery->img}}" alt="gallery">
            <div class="d-flex justify-content-center">
                <a href="{{route('galleries.edit', $gallery->id)}}" class="btn btn-info">EDIT</a>
            </div>
        </div>
    </div>
</div>
@endsection