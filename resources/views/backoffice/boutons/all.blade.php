@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE BOUTONS</h1>

    @if (session()->has('errors'))
      <div class="alert alert-danger">
          <ul>
              {{session('errors')}}
          </ul>
      </div>
    @endif
   
    <div class="container">
      <table class="table ">
        <thead>
         
          <tr>
            <th scope="col">#</th>
            <th scope="col">Bouton de la section Slider</th>
            <th scope="col">Bouton de la section About</th>
            <th scope="col">Bouton de la section Classes</th>
            @can('edit')
            <th scope="col">Edit</th>
            
            <th scope="col">Show</th>
            @endcan
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataBtn as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->btn_slider}}</td>
            <td>{{$item->btn_about}}</td>
            <td>{{$item->btn_classes}}</td>
            
            @can('edit')
            <td>
              
              <a href="{{route('boutons.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                  EDIT
                </button>
              </a>
             
            </td>
           
            <td>
              <a href="{{route('boutons.show', $item->id)}}">
                <button class="btnShow" type="submit">
                    SHOW
                </button>
              </a>
            </td>
            @endcan
            <td>
              <form action="{{route('boutons.destroy', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
   
@endsection