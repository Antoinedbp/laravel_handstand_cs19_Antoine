@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE SLIDERS</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn2">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>
   
    <div class="container">
      <table class="table container">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Petit Titre</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            @can('edit')
            <th scope="col">Edit</th>
            
            <th scope="col">Show</th>
            @endcan
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataSlider as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td><img height="300rem" width="300rem" src="{{asset($item->img)}}" alt=""></td>
            <td>{{$item->petit_titre}}</td>
            <td>{{$item->titre}}</td>
            <td>{{$item->description}}</td>
            
            @can('edit')
            <td>
              
              <a href="{{route('sliders.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                  EDIT
                </button>
              </a>
             
            </td>
            
            <td>
              <a href="{{route('sliders.show', $item->id)}}">
                <button class="btnShow" type="submit">
                    SHOW
                </button>
              </a>
            </td>
            @endcan
            <td>
              <form action="{{route('sliders.destroy', $item->id)}}" method="post">
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