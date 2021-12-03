@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un nouveau Cours</h1>
        <br>
        <form action="{{route('classes.store')}}" method="POST" enctype="multipart/form-data">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="img" id="">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Titre</label>
                <input type="text"  class="form-control" id="exampleInputPassword1" name="titre" value="{{old('titre')}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coach</label>
                <select name="trainer_id" id="trainer_id" >
                @foreach ($trainers as $trainer)
                    <option value="{{$trainer->id}}" >{{$trainer->nom}}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horaire</label>
                <select name="schedule_id" id="schedule_id" >
                    @foreach ($schedules as $schedule)
                        <option value="{{$schedule->id}}" >{{$schedule->date}}</option>
                    @endforeach
                    </select>
            </div>

            <div class="mb-3">
                <label for="categorie_id" class="form-label">Catégorie</label>
                <select name="categorie_id" id="categorie_id" >
                    @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}" >{{$categorie->genre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">

                <label for="tags" class="form-label">Tags</label>

                <select  id="mon-select"  class="selectpicker" multiple name="tag_id" id="tags" >
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->nom}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="packages" class="form-label">Choix du Package</label>
                <select  id="mon-select"  class="selectpicker" multiple name="pricing_id" id="" >
                    @foreach ($pricings as $pricing)
                        <option value="{{$pricing->id}}" >{{$pricing->nom}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="prioritaire" class="form-label">Prioritaire</label>
                <select name="prioritaire" id="prioritaire">
                    <option value={{true}}>Oui</option>
                    <option value={{false}}>Non</option> 
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection