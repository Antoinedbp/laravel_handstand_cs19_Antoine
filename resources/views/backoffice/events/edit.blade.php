@extends('template.back')

@section('contentBO')
<h1 class="text-center">Modifier EVENT</h1>
    <br>
  
        <form class="container" action="{{route('events.update', $event->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Titre: <input type="text" name="titre" value="{{$event->titre}}">
            Description: <input type="text" name="description" value="{{$event->description}}">
            Date: <input type="date" name="date" value="{{$event->date}}">
            Time: <input type="time" name="time" value="{{$event->time}}">
            <div class="mb-3">
                <label for="prioritaire" class="form-label">Prioritaire</label>
                <select name="prioritaire" id="prioritaire">
                    <option value={{0}}>Non</option> 
                    <option value={{1}}>Oui</option>
                </select>
            </div>
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

