@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un nouveau Slide</h1>
        <br>
        <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf

            
            <div class="mb-3">
                <label for="img" class="form-label">Image de Fond</label>
                <input type="file" value="{{old('img')}}" name="img" id="">
            </div>
            <div class="mb-3">
                <label for="petit_titre" class="form-label">Petit Titre</label>
                <input type="text" value="{{old('petit_titre')}}"  class="form-control" id="petit_titre" name="petit_titre">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" value="{{old('titre')}}"  class="form-control" id="titre" name="titre">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" value="{{old('decription')}}" name="description" class="form-control" id="description">
            </div>
            <div class="mb-3">
                <label for="btn" class="form-label">Texte du Bouton</label>
                <input type="text" value="{{old('btn')}}"  class="form-control" id="btn" name="btn">
            </div>
            <div class="mb-3">
                <label for="prioritaire" class="form-label">Prioritaire</label>
                <select name="prioritaire" id="prioritaire">
                    <option value={{0}}>Non</option> 
                    <option value={{1}}>Oui</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection