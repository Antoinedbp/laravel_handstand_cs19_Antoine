@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE GALLERY</h1>

    <div class="buttonsBO">
        <a href="{{route('galleries.create')}}" class="aBtn">
            <button class="monBtn1" type="submit">Ajouter un élément</button>
        </a>
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
    </div>
    <div class="globaleProduct">
        
       

          <table class="table container">
            <thead>
              <tr>
                <th scope="col">Image</th>
                @can('edit')
                <th scope="col">Edit</th>
               
                <th scope="col">Show</th> 
                @endcan
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataGallery as $item)
              <tr>
                <td><img height="150rem" width="150rem" src="{{asset('img/portfolio/' . $item->img)}}" alt=""></td>
                @can('edit')
                <td>
                 
                  <a href="{{route('galleries.edit', $item->id)}}">
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