@extends('template.back')

@section('contentBO')
    
    <h1 class="text-center mt-5">Modifier Slider</h1>
    <br>
       
        <form class="container" action="{{route('sliders.update', $slider->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            <h5>Image en Background:</h5>
            <input type="file" name="img"  value="{{old('img')}}">
            <h5 class="mt-4">Petit Titre:</h5>
            <input type="text" class="text-center" style="width: 15rem" name="petit_titre" value="{{$slider->petit_titre}}">
            <h5 class="mt-4">Titre:</h5>
            <input type="text" class="text-center" style="width: 20rem" name="titre" value="{{$slider->titre}}">
            <h5 class="mt-4">Description:</h5>
            <textarea name="description" class="text-center" id="" cols="37" rows="5">{{$slider->description}}</textarea>
            <h5 class="mt-4">Texte du Bouton:</h5>
            <input type="text" class="text-center" style="width: 20rem" name="btn" value="{{$slider->btn}}">
            <label for="prioritaire" class="form-label">Prioritaire</label>
            <select name="prioritaire" id="prioritaire" value="{{old('prioritaire')}}">
                <option value={{0}}>Non</option> 
                <option value={{1}}>Oui</option>
            </select>
            <button type="submit" style="height:2.5rem;" class="btn btn-success mt-4 text-center">Submit</button>
        </form>
    

@endsection

