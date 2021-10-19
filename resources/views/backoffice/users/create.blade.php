@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un nouveau Cours</h1>
        <br>
        <form action="{{route('classes.store')}}" method="POST">
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
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="img" id="">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Titre</label>
            <input type="text"  class="form-control" id="exampleInputPassword1" name="titre">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Logo du Coach</label>
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
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Coach</label>
            <input type="text" name="coach" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Logo de l'Horaire</label>
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
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Horaire</label>
            <input type="text"  class="form-control" id="exampleInputPassword1" name="time">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection