@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier NEWSLETTER</h1>
    <br>
  
        <form class="container" action="{{route('newsletters.update', $newsletter->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Titre: <input type="text" name="titre" value="{{$newsletter->titre}}">
            Texte de l'Input: <input type="text" name="input" value="{{$newsletter->input}}">
            Texte du Bouton: <input type="text" name="btn" value="{{$newsletter->btn}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

