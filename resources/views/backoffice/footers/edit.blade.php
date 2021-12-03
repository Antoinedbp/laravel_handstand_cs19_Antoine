@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier Footer</h1>
    <br>
       
        <form class="container" action="{{route('footers.update', $footer->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Logo: <input type="file" name="logo" value="{{$footer->logo}}">
            Description: <input type="text" name="description" value="{{$footer->description}}">
            Mail: <input type="text" name="mail" value="{{$footer->mail}}">
            Tel: <input type="text" name="tel" value="{{$footer->tel}}">
            Adresse: 
            Rue: <input type="text" name="adress" value="{{$footer->map->rue}}">
            Numéro: <input type="text" name="adress" value="{{$footer->map->numero}}">
            Code Postal: <input type="text" name="adress" value="{{$footer->map->cp}}">
            Ville: <input type="text" name="adress" value="{{$footer->map->ville}}">
            1er Titre: <input type="text" name="titre_1" value="{{$footer->titre_1}}">
            1er tweet: <input type="text" name="tweet_1" value="{{$footer->tweet_1}}">
            1er Site: <input type="text" name="site_1" value="{{$footer->site_1}}">
            2ème Tweet: <input type="text" name="tweet_2" value="{{$footer->tweet_2}}">
            2ème Site: <input type="text" name="site_2" value="{{$footer->site_2}}">
            Texte du Bouton: <input type="text" name="btn" value="{{$footer->btn}}">
            Copyright: <input type="text" name="copyright" value="{{$footer->copyright}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
  

@endsection

