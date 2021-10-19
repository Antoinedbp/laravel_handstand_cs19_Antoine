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
            <p class="p1">Titre:</p>
            <input type="text" name="titre" class="main" value="{{$titre->titre}}"/>
            <p class="p1">Description:</p>
            <textarea type="text" name="description" class="main" style="height:max-content" value="">{{$titre->description}}</textarea>
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    </div>

@endsection

