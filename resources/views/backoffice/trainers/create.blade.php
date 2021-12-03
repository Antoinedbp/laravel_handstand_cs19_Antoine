@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un Nouveau Trainer</h1>
        <br>
        <form action="{{route('trainers.store')}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            <div class="mb-3">
            <label for="img" class="form-label">Photo</label>
            <input type="file" name="img">
            </div>
            <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text"  class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
            <label for="logo1" class="form-label">1er Logo </label>
            <select class="form-select" name="logo1" aria-label="Default select example">
                <option selected></option>
                <option value="fab fa-twitter">
                    Logo Twitter
                </option>
                <option value="fab fa-facebook">
                    Logo Facebook
                </option>
                <option value="fab fa-google-plus-g">
                    Logo Google +
                </option>
            </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lien du 1er Logo</label>
                <input type="text"  class="form-control" id="exampleInputPassword1" name="linkLogo1">
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
                <label for="exampleInputPassword1" class="form-label">Lien du 2ème Logo</label>
                <input type="text"  class="form-control" id="exampleInputPassword1" name="linkLogo2">
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
                <label for="exampleInputPassword1" class="form-label">Lien du 3ème Logo</label>
                <input type="text"  class="form-control" id="exampleInputPassword1" name="linkLogo3">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">4ème Logo</label>
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lien du 4ème Logo</label>
                <input type="text"  class="form-control" id="exampleInputPassword1" name="linkLogo4">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection