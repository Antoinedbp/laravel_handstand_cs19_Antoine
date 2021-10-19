@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un nouvel Event</h1>
        <br>
        <form action="{{route('events.store')}}" method="POST">
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
            <label for="exampleInputPassword1" class="form-label">Titre</label>
            <input type="text"  class="form-control" id="exampleInputPassword1" name="titre">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" name="description" id="">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="date" name="date" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Time</label>
            <input type="time"  class="form-control" id="exampleInputPassword1" name="time">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection