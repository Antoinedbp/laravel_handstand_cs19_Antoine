@extends('template.back')

@section('contentBO')
    
    <h1 class="text-center">Modifier Header</h1>
    <br>
       
        <form class="container" action="{{route('navbars.update', $navbar->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Logo: <input type="file" name="logo" value="{{$navbar->logo}}" >
            1er Nom: <input type="text" name="nom1" value="{{$navbar->nom1}}">
            2ème Nom: <input type="text" name="nom2" value="{{$navbar->nom2}}">
            3ème Nom: <input type="text" name="nom3" value="{{$navbar->nom3}}">
            4ème Nom: <input type="text" name="nom4" value="{{$navbar->nom4}}">
            5ème Nom: <input type="text" name="nom5" value="{{$navbar->nom5}}">
            6ème Nom: <input type="text" name="nom6" value="{{$navbar->nom6}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

