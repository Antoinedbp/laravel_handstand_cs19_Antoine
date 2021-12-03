@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier About</h1>
    <br>
       
        <form class="container" action="{{route('abouts.update', $about->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Titre: <input type="text" name="titre" value="{{$about->titre}}">
            1ère Description: <input type="text" name="description_1" value="{{$about->description_1}}">
            2ème Description: <input type="text" name="description_2" value="{{$about->description_2}}">
            Bouton: <input type="text" name="btn" value="{{$about->btn}}">
            Image de Fond de Vidéo: <input type="file" name="img_video" value="{{'img/about/' . $about->img_video}}">
            Vidéo: <input type="url" name="video" value="{{$about->video}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
  

@endsection

