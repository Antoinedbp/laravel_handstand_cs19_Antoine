@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE CLIENTS</h1>

    <div class="buttonsBO">
        <a href="{{route('clients.create')}}" class="aBtn">
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
                <th scope="col">Avis</th>
                <th scope="col">Signature</th>
                <th scope="col">Description</th>
                @can('manager')
                  <th scope="col">Edit</th>
                  <th scope="col">Show</th> 
                  <th scope="col">Delete</th>
                @endcan
              </tr>
            </thead>
            <tbody>
              @foreach ($dataClient as $item)
              <tr>
                <td>{{$item->avis}}</td>
                <td>
                  <img height="150rem" width="150rem"  src="{{asset("img/icon/" . $item->signature)}}" alt="">
                </td>
                <td>{{$item->description}}</td>
                @can('manager')
                <td>
                 
                  <a href="{{route('clients.edit', $item->id)}}">
                    <button class="btnEd" type="submit">
                      EDIT
                    </button>
                  </a>
                  
                </td>
               
                <td>
                  <a href="{{route('clients.show', $item->id)}}">
                    <button class="btnShow" type="submit">
                        SHOW
                    </button>
                  </a>
                </td>
                <td>
                  <form action="{{route('clients.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btnDel" type="submit">DELETE</button>
                  </form>
                </td>
              @endcan
              </tr>
              @endforeach
            </tbody>
          </table>
       
    </div>

@endsection