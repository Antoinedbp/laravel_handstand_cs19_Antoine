@extends('template.back')

@section('contentBO')

    <div class="ab">
        <h1>Modifier Titre</h1>
        <br>
        <form action="{{route('titres.update', $titre->id)}}" method="POST">
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
            <h5 class="mt-1">Titre:</h5>
            <input type="text" class="text-center" style="width: 15rem; height: 2rem" name="titre" value="{{$titre->titre}}"/>
            <h5 class="mt-4">Description:</h5>
            <textarea name="description" class="text-center" id="" cols="37" rows="7">{{$titre->description}}</textarea>
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-4 text-center">Submit</button>
        </form>
    </div>

@endsection

