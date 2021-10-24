@extends('template.back')

@section('contentBO')
    
    <h1 class="text-center mt-5">Modifier Slider</h1>
    <br>
       
        <form class="container" action="{{route('sliders.update', $slider->id)}}" method="POST">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @csrf
            @method('PUT')
            <h5>Image en Background:</h5>
            <input type="file" name="img" value="{{$slider->img}}">
            <h5 class="mt-4">Petit Titre:</h5>
            <input type="text" class="text-center" style="width: 15rem" name="petit_titre" value="{{$slider->petit_titre}}">
            <h5 class="mt-4">Titre:</h5>
            <input type="text" class="text-center" style="width: 20rem" name="titre" value="{{$slider->titre}}">
            <h5 class="mt-4">Description:</h5>
            <textarea name="description" class="text-center" id="" cols="37" rows="5">{{$slider->description}}</textarea>
            <button type="submit" style="height:2.5rem;" class="btn btn-success mt-4 text-center">Submit</button>
        </form>
    

@endsection

