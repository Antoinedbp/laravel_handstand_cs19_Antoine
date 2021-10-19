@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier TRAINER</h1>
    <br>
  
        <form class="container" action="{{route('trainers.update', $team->id)}}" method="POST">
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
            Image: <input type="file" name="img" value="{{$trainer->img}}">
            nom: <input type="text" name="nom" value="{{$trainer->nom}}">
            1er logo:
            <select class="form-select" name="logo1" aria-label="Default select example">
                <option selected>{{$trainer->logo1}}</option>
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
            2ème logo:
            <select class="form-select" name="logo2" aria-label="Default select example">
                <option selected>{{$trainer->logo2}}</option>
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
            3ème logo:
            <select class="form-select" name="logo3" aria-label="Default select example">
                <option selected>{{$trainer->logo2}}</option>
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
            4ème logo:
            <select class="form-select" name="logo4" aria-label="Default select example">
                <option selected>{{$trainer->logo4}}</option>
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
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

