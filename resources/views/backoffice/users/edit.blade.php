@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier PROFIL</h1>
    <br>
  
        <form class="container" action="{{route('profils.update', $profil->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Nom: <input type="text" name="name" value="{{$profil->name}}">
            Email: <input type="email" name="email" value="{{$profil->email}}">
            Nouveau Mot de Passe: <input type="password" name="password" minlength="6" required>
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

