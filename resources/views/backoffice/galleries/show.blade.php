@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Gallery
        </div>
        <div class="card-body">
            <img height="50px" width="50px" src="{{$gallery->img}}" alt="gallery">
            @can('manager')    
                <div class="d-flex justify-content-center">
                    <a href="{{route('galleries.edit', $gallery->id)}}" class="btn btn-info">EDIT</a>
                </div>
            @endcan
        </div>
    </div>
</div>
@endsection