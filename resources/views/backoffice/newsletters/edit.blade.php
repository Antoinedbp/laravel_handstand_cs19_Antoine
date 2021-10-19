@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier NEWSLETTER</h1>
    <br>
  
        <form class="container" action="{{route('newsletters.update', $client->id)}}" method="POST">
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
            Titre: <input type="text" name="titre" value="{{$newsletter->titre}}">
            Texte de l'Input: <input type="file" name="input" value="{{$newsletter->input}}">
            Texte du Bouton: <input type="text" name="btn" value="{{$newsletter->btn}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

