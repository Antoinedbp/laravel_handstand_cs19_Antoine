@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier CLASSE</h1>
    <br>
  
        <form class="container" action="{{route('classes.update', $classe->id)}}" method="POST">
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
            Image: <input type="file" name="img" value="{{$classe->img}}">
            Titre: <input type="text" name="titre" value="{{$classe->titre}}">
            Logo du Coach:
            <select class="form-select" name="logo_coach" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="zmdi zmdi-face"></i>
                </option>
                <option value="2">
                    <i class="fas fa-user-circle"></i>
                </option>
                <option value="3">
                    <i class="fas fa-smile"></i>
                </option>
            </select>
            Coach: <input type="text" name="coach" value="{{$classe->coach}}">
            Logo de l'Horaire:
            <select class="form-select" name="logo_time" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="zmdi zmdi-alarm"></i>
                </option>
                <option value="2">
                    <i class="fas fa-clock"></i>
                </option>
                <option value="3">
                    <i class="far fa-calendar-alt"></i>
                </option>
            </select>
            Horaire: <input type="text" name="time" value="{{$classe->time}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

