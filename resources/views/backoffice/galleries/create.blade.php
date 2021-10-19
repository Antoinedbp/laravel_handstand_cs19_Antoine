@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer une nouvelle Image</h1>
        <br>
        <form action="{{route('galleries.store')}}" method="POST">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection