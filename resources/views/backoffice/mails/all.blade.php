@extends('template.back')

@section('contentBO')
    <section class="home-section">
    
        <div class="text">Boite Mail</div>
            <div>
                @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
                @endif
        
                <div class="text">Mails</div>
                
                <a href="{{route('emails.index')}}" class="btn btn-success">All</a>
                <a href="{{route('Lu')}}" class="btn btn-info">Lu</a>
                <a href="{{route('NonLu')}}" class="btn btn-warning">Non Lu</a>
                
            
                    
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Adresse Mail</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
        
        
                    <tbody>
        
                        
                        @foreach ($email as $mail)
                        @if ($mail['lu']==0)
                        
                        <tr >
                            
                                
                            @else
                            <tr style="background-color: rgba(114, 114, 114, 0.733)">  
                            
                            @endif 
                            <td>{{$mail['id']}}</td>
                                <td>{{$mail['email']}}</td>
                                <td>{{$mail['name']}}</td>
                                <td>{{$mail['message']}}</td>
                                @can('manager')    
                                <td>
                                    <div class="d-flex justify-content-around my-3">
                                        
                                        <a class="btn btn-warning mx-2" href="{{ route('emails.show',$mail['id']) }}">Lire</a>
                                        <form action="{{ route('emails.destroy', $mail['id']) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
@endsection