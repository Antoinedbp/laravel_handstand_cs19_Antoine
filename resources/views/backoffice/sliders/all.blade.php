@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE SLIDERS</h1>

    <div class="buttonsBO">
      <a href="{{route('sliders.create')}}" class="aBtn">
          <button class="monBtn1" type="submit">Ajouter un Slider</button>
      </a>
      <a href="{{route('hombo')}}" class="aBtn">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>

    @if (session()->has('errors'))
      <div class="alert alert-danger">
          <ul>
              {{session('errors')}}
          </ul>
      </div>
    @endif
   
    <div class="container">
      <table class="table container">
        <thead>
          <tr>
            <th scope="col" style="text-align: center;">#</th>
            <th scope="col" style="text-align: center;">Photo</th>
            <th scope="col" style="text-align: center;">Petit Titre</th>
            <th scope="col" style="text-align: center;">Titre</th>
            <th scope="col" style="text-align: center;">Description</th>
            <th scope="col" style="text-align: center;">Bouton</th>
            <th scope="col" style="text-align: center;">Prioritaire</th>
            <th scope="col" style="text-align: center;">Edit</th>
            <th scope="col" style="text-align: center;">Show</th>
            <th scope="col" style="text-align: center;">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataSlider as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td><img height="300rem" width="300rem" src="{{asset('img/slider/' . $item->img)}}" alt=""></td>
            <td style="text-align: center; padding-top: 7rem">{{$item->petit_titre}}</td>
            <td style="text-align: center; padding-top: 6.5rem">{{$item->titre}}</td>
            <td style="text-align: center; padding-top: 6rem">{{$item->description}}</td>
            <td style="text-align: center; padding-top: 6rem">{{$item->btn}}</td>
            <td style="text-align: center; padding-top: 6rem">{{$item->prioritaire===1?'Oui':'Non'}}</td>

            @can('manager')  
            <td>
              
              <a href="{{route('sliders.edit', $item->id)}}">
                <button class="btnEdS" type="submit">
                  EDIT
                </button>
              </a>
             
            </td>
            
            <td>
              <a href="{{route('sliders.show', $item->id)}}">
                <button class="btnShowS" type="submit">
                    SHOW
                </button>
              </a>
            </td>
            <td>
              <form action="{{route('sliders.destroy', $item->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btnDelS" type="submit">DELETE</button>
              </form>
            </td>
          @endcan
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
   
@endsection