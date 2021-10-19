@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un Nouvel Avis Client</h1>
        <br>
        <form action="{{route('trainers.store')}}" method="POST">
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
            <label for="exampleInputPassword1" class="form-label">Photo</label>
            <input type="file" name="img">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text"  class="form-control" id="exampleInputPassword1" name="nom">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">1er Logo </label>
            <select class="form-select" name="logo1" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="fab fa-twitter"></i>
                </option>
                <option value="2">
                    <i class="fab fa-facebook"></i>
                </option>
                <option value="3">
                    <i class="fab fa-google-plus-g"></i>
                </option>
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">2ème Logo </label>
            <select class="form-select" name="logo2" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="fab fa-instagram"></i>
                </option>
                <option value="2">
                    <i class="fab fa-tiktok"></i>
                </option>
                <option value="3">
                    <i class="fab fa-linkedin"></i>
                </option>
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">3ème Logo </label>
            <select class="form-select" name="logo3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="fab fa-linode"></i>
                </option>
                <option value="2">
                    <i class="fab fa-linux"></i>
                </option>
                <option value="3">
                    <i class="fab fa-whatsapp"></i>
                </option>
            </select>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">4ème Logo </label>
            <select class="form-select" name="logo4" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">
                    <i class="fab fa-snapchat-square"></i>
                </option>
                <option value="2">
                    <i class="fas fa-parachute-box"></i>
                </option>
                <option value="3">
                    <i class="fab fa-dropbox"></i>
                </option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection