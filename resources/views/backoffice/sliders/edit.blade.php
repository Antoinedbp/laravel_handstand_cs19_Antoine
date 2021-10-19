@extends('template.back')

@section('contentBO')
    
    <h1 class="text-center">Modifier Header</h1>
    <br>
       
        <form class="container" action="{{route('headers.update', $navbar->id)}}" method="POST">
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
            chemin: <input type="text" name="chemin" value="{{$navbar->chemin}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

