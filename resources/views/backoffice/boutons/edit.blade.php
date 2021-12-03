@extends('template.back')

@section('contentBO')
    
    <h1 class="text-center">Modifier Bouton</h1>
    <br>
       
        <form class="container" action="{{route('boutons.update', $navbar->id)}}" method="POST">
            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif
            @csrf
            @method('PUT')
            Bouton du Slider: <input type="text" name="btn_slider" value="{{$bouton->btn_slider}}">
            Bouton du About: <input type="text" name="btn_about" value="{{$bouton->btn_about}}">
            Bouton des Classes: <input type="text" name="btn_classes" value="{{$bouton->btn_classes}}">
            <button type="submit" style="height:2.5rem" class="btn btn-success mt-2 text-center">Submit</button>
        </form>
    

@endsection

