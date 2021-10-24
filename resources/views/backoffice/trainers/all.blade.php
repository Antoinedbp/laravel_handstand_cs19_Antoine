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
                <th scope="col">1er Logo</th>
                <th scope="col">Lien du 1er Logo</th>
                <th scope="col">2ème Logo</th>
                <th scope="col">Lien du 2ème Logo</th>
                <th scope="col">3ème Logo</th>
                <th scope="col">Lien du 3ème Logo</th>
                <th scope="col">4ème Logo</th>
                <th scope="col">Lien du 4ème Logo</th>
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
                <td><a href="{{$item->linkLogo1}}"></a></td>
                <td><i class="{{$item->logo2}}"></i></td>
                <td><a href="{{$item->linkLogo2}}"></a></td>
                <td><i class="{{$item->logo3}}"></i></td>
                <td><a href="{{$item->linkLogo3}}"></a></td>
                <td><i class="{{$item->logo4}}"></i></td>
                <td><a href="{{$item->linkLogo4}}"></a></td>
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