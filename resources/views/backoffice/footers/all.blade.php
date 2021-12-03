@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE FOOTER</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
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
              <th scope="col">Logo</th>
              <th scope="col">Description</th>
              <th scope="col">Mail</th>
              <th scope="col">Tel</th>
              <th scope="col">Adresse</th>
              <th scope="col">Titre 1</th>
              <th scope="col">Tweet 1</th>
              <th scope="col">Site 1</th>
              <th scope="col">Tweet 2</th>
              <th scope="col">Site 2</th>
              <th scope="col">Texte du Bouton</th>
              <th scope="col">© Copyright</th>
              @can('edit')
              <th scope="col">Edit</th>
              
              <th scope="col">Show</th>
              @endcan
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataFooter as $item)
            <tr>
              <td>
                <img height="50rem" width="50rem"  src="{{asset('img/logo/' . $item->logo) }}" alt="">
              </td>
              <td>{{$item->description}}</td>
              <td>{{$item->mail}}</td>
              <td>{{$item->tel}}</td>              
              <td>{{$item->map->rue}} {{$item->map->numero}}, {{$item->map->cp}} {{$item->map->ville}}</td>          
              <td>{{$item->titre_1}}</td>
              <td>{{$item->tweet_1}}</td>
              <td>{{$item->site_1}}</td>
              <td>{{$item->tweet_2}}</td>
              <td>{{$item->site_2}}</td>
              <td>{{$item->btn}}</td>
              <td>{{$item->copyright}}</td>
              @can('edit')
              <td>
                
                <a href="{{route('footers.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
               
              </td>
              
              <td>
                <a href="{{route('footers.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              @endcan
              <td>
                <form action="{{route('footers.destroy', $item->id)}}" method="post">
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