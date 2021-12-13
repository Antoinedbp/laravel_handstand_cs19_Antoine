@extends('template.back')

@section('contentBO')
    <div class="container">
      <h1 class="titresBO">PARTIE TITRES</h1>

      <div class="buttonsBO">
        <a href="{{route('hombo')}}" class="aBtn">
            <button class="monBtn2" type="submit">Retour backoffice</button>
        </a>
      </div>
      <div class=" ml-5">
        @if (session()->has('errors'))
          <div class="alert alert-danger">
              <ul>
                  {{session('errors')}}
              </ul>
          </div>
        @endif
        
        <table class="table">
          <thead>
            <tr>
              <td scope="col">#</td>
              <td scope="col">Titre</td>
              <td scope="col">Description</td>
              @can('manager')
                <td scope="col">Edit</td>
                <td scope="col">Show</td>
                <td scope="col">Delete</td>
              @endcan
              
            </tr>
          </thead>
          @foreach ($dataTitre as $item)
          <tbody>
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->titre}}</td>
                  <td>{{$item->description}}</td>
                  @can('manager')
                  <td>
                    <a href="{{route('titres.edit', $item->id)}}">
                      <button class="btnEd" type="submit">
                        EDIT
                      </button>
                    </a>
                  </td>
                  <td>
                    <a href="{{route('titres.show', $item->id)}}">
                      <button class="btnShow" type="submit">
                          SHOW
                      </button>
                    </a>
                  </td>
                  <td>
                    <form action="{{route('titres.destroy', $item->id)}}" method="post">
                      @csrf
                          @method('DELETE')
                          <button class="btnDel" type="submit">DELETE</button>
                    </form>
                  </td>
                  @endcan
                </tr>
              </tbody>
              @endforeach
            </table>
            
      </div>
    </div>

@endsection