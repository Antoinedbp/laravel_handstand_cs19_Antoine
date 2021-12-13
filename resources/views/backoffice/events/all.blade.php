@extends('template.back')

@section('contentBO')


    
</div>
    <h1 class="titresBO">PARTIE EVENTS</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct">

      <table class="table container">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Prioritaire</th>
            @can('manager')
              <th scope="col">Edit</th>
              <th scope="col">Show</th> 
              <th scope="col">Delete</th>
            @endcan
          </tr>
        </thead>
        <tbody>
          @foreach ($dataEvent as $item)
          <tr>
            <td>{{$item->titre}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->prioritaire===1?'Oui':'Non'}}</td>
            @can('manager')
            <td>
              
              <a href="{{route('events.edit', $item->id)}}">
                <button class="btnEd" type="submit">
                  EDIT
                </button>
              </a>
              
            </td>
            
            <td>
              <a href="{{route('events.show', $item->id)}}">
                <button class="btnShow" type="submit">
                    SHOW
                </button>
              </a>
            </td>
            <td>
              <form action="{{route('events.destroy', $item->id)}}" method="post">
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