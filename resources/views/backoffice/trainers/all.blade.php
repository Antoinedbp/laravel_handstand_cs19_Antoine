@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE TRAINERS</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct">
        
       

          <table class="table container">
            <thead>
              <tr>
                <th scope="col">Photo</th>
                <th scope="col">Nom</th>
                <th scope="col">Logo1</th>
                <th scope="col">Logo2</th>
                <th scope="col">Logo3</th>
                <th scope="col">Logo4</th>
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
                <td><i class="{{$item->logo1}}"></i></td>
                <td><i class="{{$item->logo2}}"></i></td>
                <td><i class="{{$item->logo3}}"></i></td>
                <td><i class="{{$item->logo4}}"></i></td>
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