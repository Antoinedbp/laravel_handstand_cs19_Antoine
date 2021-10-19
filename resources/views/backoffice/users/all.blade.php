@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE CLASSES</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct">
        
       

          <table class="table container">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Logo du Coach</th>
                <th scope="col">Coach</th>
                <th scope="col">Logo de L'Horaire</th>
                <th scope="col">Horaire</th>
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
                <td><img height="30px" width="30px"  src="{{asset($item->img)}}" alt=""></td>
                <td>{{$item->Titre}}</td>
                <td><i class="{{$item->logo_coach}}"></i></td>
                <td>{{$item->coach}}</td>
                <td><i class="{{$item->logo_time}}"></i></td>
                <td>{{$item->time}}</td>
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