@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE TRAINERS</h1>

    <div class="buttonsBO">
      <a href="{{route('trainers.create')}}" class="aBtn">
          <button class="monBtn1" type="submit">Ajouter un Trainer</button>
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
                <th scope="col">Photo</th>
                <th scope="col">Nom</th>
                <th scope="col">1er Logo</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">2ème Logo</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">3ème Logo</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                <th scope="col">4ème Logo</th>
                <th scope="col">Nom</th>
                <th scope="col">Lien</th>
                @can('edit')
                <th scope="col">Edit</th>
               
                <th scope="col">Show</th> 
                @endcan
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataTrainer as $item)
              <tr>
                <td><img height="150rem" width="150rem"  src="{{asset($item->img) }}" alt=""></td>
                <td>{{$item->nom}}</td>
                {{-- <td><i class="{{$item->icons->nom}}"></i></td> --}}
                @foreach ($icons as $icon)
                <td><i class="{{$icon->class}}"></i> </td>
                <td>{{$icon->nom}}</td>
                <td><a href="{{$icon->link}}"></a>{{$icon->link}}</td>
                @endforeach
                @can('edit')
                <td>
                 
                  <a href="{{route('trainers.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                  
                </td>
               
                <td>
                  <a href="{{route('trainers.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                @endcan
                <td>
                  <form action="{{route('trainers.destroy', $item->id)}}" method="post">
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