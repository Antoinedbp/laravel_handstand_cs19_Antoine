@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE HEADER</h1>

    <div class="buttonsBO">
      <a href="{{route('hombo')}}" class="aBtn1">
          <button class="monBtn2" type="submit">Retour backoffice</button>
      </a>
    </div>

    @if (session()->has('errors'))
      <div class="alert alert-danger">
          <ul>
              {{session('errors')}}
          </ul>
      </div>
    @endif
   
    <div class="container">
      <table class="table ">
        <thead>
         
          <tr>
            <th scope="col">#</th>
            <th scope="col">Logo</th>
            <th scope="col">1er Nom</th>
            <th scope="col">2ème Nom</th>
            <th scope="col">3ème Nom</th>
            <th scope="col">4ème Nom</th>
            <th scope="col">5ème Nom</th>
            <th scope="col">6ème Nom</th>
            @can('manager')  
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @foreach ($dataNav as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
              <img height="30px" width="30px" src="{{ asset("img/logo/" . $item->logo) }}" alt="">
            </td>
            <td>{{$item->nom1}}</td>
            <td>{{$item->nom2}}</td>
            <td>{{$item->nom3}}</td>
            <td>{{$item->nom4}}</td>
            <td>{{$item->nom5}}</td>
            <td>{{$item->nom6}}</td>
            @can('manager')
            <td>
              
              <a href="{{route('navbars.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                  EDIT
                </button>
              </a>
             
            </td>
           
            <td>
              <a href="{{route('navbars.show', $item->id)}}">
                <button class="btnShow" type="submit">
                    SHOW
                </button>
              </a>
            </td>
            <td>
              <form action="{{route('navbars.destroy', $item->id)}}" method="post">
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