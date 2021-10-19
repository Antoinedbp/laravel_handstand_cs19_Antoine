@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier AVIS CLIENT</h1>
    <br>
  
        <form class="container" action="{{route('clients.update', $client->id)}}" method="POST">
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
            Avis: <input type="text" name="avis" value="{{$client->avis}}">
            Signature: <input type="file" name="signature" value="{{$client->signature}}">
            Description: <input type="text" name="description" value="{{$client->description}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

