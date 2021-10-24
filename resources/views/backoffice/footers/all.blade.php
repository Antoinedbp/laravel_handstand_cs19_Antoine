@extends('template.back')

@section('contentBO')
    <h1 class="titresBO">PARTIE ABOUT</h1>

    <a href="{{route('hombo')}}" class=" text-center" style="margin-left:45%">
      <button class="monBtn2" type="submit">Retour backoffice</button>
  </a>
    <div class="globaleProduct">
        
       

        <table class="table container">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titre</th>
              <th scope="col">1ère Description</th>
              <th scope="col">2ème Description</th>
              <th scope="col">Img Fond de Vidéo</th>
              <th scope="col">Vidéo</th>
              @can('edit')
              <th scope="col">Edit</th>
              
              <th scope="col">Show</th>
              @endcan
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataAbout as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->description_1}}</td>
              <td>{{$item->description_2}}</td>
              <td>
                <img height="150rem" width="150rem"  src="{{asset($item->img_video) }}" alt="">
              </td>
              <td>
                <a class="video-popup" href={{$item->video}}>{{$item->video}}</a>
              </td>              
              @can('edit')
              <td>
                
                <a href="{{route('abouts.edit', $item->id)}}">
                  <button class="btnEd" type="submit">
                    EDIT
                  </button>
                </a>
               
              </td>
              
              <td>
                <a href="{{route('abouts.show', $item->id)}}">
                  <button class="btnShow" type="submit">
                      SHOW
                  </button>
                </a>
              </td>
              @endcan
              <td>
                <form action="{{route('abouts.destroy', $item->id)}}" method="post">
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