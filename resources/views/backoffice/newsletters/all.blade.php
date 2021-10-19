@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE NEWSLETTER</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct">
        
       

          <table class="table container">
            <thead>
              <tr>
                <th scope="col">Titre</th>
                <th scope="col">Texte de l'Input</th>
                <th scope="col">Texte du Bouton</th>
                @can('edit')
                <th scope="col">Edit</th>
               
                <th scope="col">Show</th> 
                @endcan
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataNews as $item)
              <tr>
                <td>{{$item->titre}}</td>
                <td>{{$item->input}}</td>
                <td>{{$item->btn}}</td>
                @can('edit')
                <td>
                 
                  <a href="{{route('newsletters.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                  
                </td>
               
                <td>
                  <a href="{{route('newsletters.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                @endcan
                <td>
                  <form action="{{route('newsletters.destroy', $item->id)}}" method="post">
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