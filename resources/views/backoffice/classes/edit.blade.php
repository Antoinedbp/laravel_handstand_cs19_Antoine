@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier CLASSE</h1>
    <br>
  
        <form class="container" action="{{route('classes.update', $classe->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Image: <input type="file" name="img" value="{{'img/class/' . $classe->img}}">
            Titre: <input type="text" name="titre" value="{{$classe->titre}}">
            Coach: <input type="text" name="coach" value="{{$classe->coach}}">
            Horaire: <input type="text" name="time" value="{{$classe->time}}">
            Prioritaire:
            <select name="prioritaire" id="prioritaire">
                @if ($item->prioritaire)
                <option value={{1}} selected>Oui</option>
                <option value={{0}}>Non</option>
                    
                @else

                <option value={{1}} >Oui</option>
                <option value={{0}} selected>Non</option> 

                @endif

            </select>
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

