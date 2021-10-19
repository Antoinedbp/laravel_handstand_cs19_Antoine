@extends('template.back')

@section('contentBO')
    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-center mt-3 d-flex align-items-center">Créer un Nouvel Avis Client</h1>
        <br>
        <form action="{{route('clients.store')}}" method="POST">
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
            <label for="exampleInputPassword1" class="form-label">Avis</label>
            <input type="text"  class="form-control" id="exampleInputPassword1" name="avis">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Signature</label>
            <input type="file" name="signature">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection