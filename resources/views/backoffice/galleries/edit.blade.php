@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier IMAGE</h1>
    <br>
  
        <form class="container" action="{{route('galleries.update', $gallery->id)}}" enctype="multipart/form-data" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Image: <input type="file" name="img" value={{"/img/portfolio" . $gallery->img}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

