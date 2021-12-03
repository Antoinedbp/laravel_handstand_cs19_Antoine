@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE CLASSES</h1>

    <div class="buttonsBO">
        <a href="{{route('classes.create')}}" class="aBtn">
            <button class="monBtn1" type="submit">Ajouter une Classe</button>
        </a>
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
      @if (session()->has('errors'))
        <div class="alert alert-danger">
            <ul>
                {{session('errors')}}
            </ul>
        </div>
      @endif

          <table class="table container">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Coach</th>
                <th scope="col">Horaire</th>
                <th scope="col">Prioritaire</th>
                <th scope="col">Nombre d'Inscrits</th>
                <th scope="col">Tags</th>
                <th scope="col">Date</th>
                @can('edit')
                <th scope="col">Edit</th>
               
                <th scope="col">Show</th> 
                @endcan
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($dataClasse as $item)
              <tr>
                <td><img height="200px" width="200px"  src="{{asset('img/class/' . $item->img)}}" alt=""></td>
                <td>{{$item->titre}}</td>
                <td>{{$item->trainer->nom}}</td>
                <td>{{$item->time}}</td>
                <td>{{$item->prioritaire===1?'Oui':'Non'}}</td>
                <td>{{$item->users->count()}}</td>
                <td>
                  @foreach ($item->tags as $tag )
                  {{$tag->nom}},
                  @endforeach    
                </td>
                <td>{{$item->date}}</td>
                @can('edit')
                <td>
                 
                  <a href="{{route('classes.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                  
                </td>
               
                <td>
                  <a href="{{route('classes.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                @endcan
                <td>
                  <form action="{{route('classes.destroy', $item->id)}}" method="post">
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