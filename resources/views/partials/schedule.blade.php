<!-- Schedule Area Strat -->
<section class="schedule-area pt-85 pb-90 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title">
                    @php
                        $first = Str::before($titres[1]->titre, '(');
                        $middle = Str::between($titres[1]->titre, '(', ')');
                        $last = Str::after($titres[1]->titre, ')');
                    @endphp
                    @if ($first == $middle && $middle == $last)
                        <h2>{{$first}}</h2>
                    @else
                        <h2>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h2>
                    @endif
                    <p>{{$titres[1]->description}}</p>
                </div>
            </div>
        </div>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
           <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
             <div class="carousel-item active" data-bs-interval="10000">
              {{-- 1ere semaine --}}
        
            @php
            $compteur=1;
            $dayColor = '';

       if ( $compteur==1)
           { $dayColor = 'purple'; }
       elseif ($compteur==2)
           {$dayColor = 'olive'; }
       elseif ($compteur==3)
           {
           $dayColor = 'pink';
       }
       else {
           $dayColor = 'blue';
           }
           $reset=0;
       
@endphp
            
           
        
              <div class="row">
               <div class="col-xs-12">
                   <div class="scehedule-table table-responsive text-center">
                       <table>
                           <thead>
                               <tr>
                                   <th>Time</th>
                                   <th>Saturday 11/01</th>
                                   <th>Sunday 11/02</th>
                                   <th>Monday 11/03</th>
                                   <th>Tuesday 11/04</th>
                                   <th>Wednesday 11/05</th>
                                   <th>Thursday 11/06</th>
                                   <th>Friday 11/07</th>
                               </tr>
                           </thead>
                           <tbody class="pt-30">
                               <tr>
                                   <td class="time">
                                       <p>8:00AM-10:00AM</p>
                                   </td>
                                   {{-- 1 novembre --}}
                                  
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 1)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 2 novembre --}}
                                   
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 5)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre}}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 3 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 9)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 4 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 13)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 5 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 17)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 6 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 21)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 7 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 25)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>10:00AM-12:00AM</p>
                                   </td>
                                   {{-- 1 novembre --}}
@php
  $compteur=2; 
@endphp
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 2)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 2 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 6)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 3 novembre --}}

                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 10)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 4 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 14)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 5 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 18)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 6 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 22)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 7 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 26)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>01:00PM-03:00PM</p>
                                       @php
                                           $compteur=3;
                                       @endphp
                                   </td>
                                   {{-- 1 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 3)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 2 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 7)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 3 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 11)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 4 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 15)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 5 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 19)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 6 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 23)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 7 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 27)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>03:00PM-05:00PM</p>
                                       @php
                                           $compteur=4;
                                       @endphp
                                   </td>
                                   {{-- 1 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 4)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 2 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 8)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 3 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 12)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 4 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 16)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 5 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 20)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 6 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 24)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 7 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 28)
                                           <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
               <div class="carousel-caption d-none d-md-block">
                 
               </div>
             </div>
             <div class="carousel-item" data-bs-interval="2000">
                {{-- semaine 2 --}}

                <div class="row">
                   <div class="col-xs-12">
                       <div class="scehedule-table table-responsive text-center">
                           <table>
                               <thead>
                                   <tr>
                                       <th>Time</th>
                                       <th>8/11 saturday</th>
                                       <th>9/11 sunday</th>
                                       <th>10/11 monday</th>
                                       <th>11/11 tuesday</th>
                                       <th>12/11wednesday</th>
                                       <th>13/11 thursday</th>
                                       <th>14/11 friday</th>
                                   </tr>
                               </thead>
                               <tbody class="pt-30">
                                   <tr>
                                       <td class="time">
                                           <p>8:00AM-10:00AM</p>
                                           @php
                                               $compteur=1;
                                           @endphp
                                       </td>
                                       {{-- 8 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 29)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 9 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 33)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 10 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 37)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 11 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 41)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 12 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 44)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 13 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 47)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 14 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 51)
                                               <div style="height: 100%;background-color:red;width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="time">
                                           <p>10:00AM-12:00AM</p>
                                           @php
                                               $compteur=2;
                                           @endphp
                                       </td>
                                       {{-- 8 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 30)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 9 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 34)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 10 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 38)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 11 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 42)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 12 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 46)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 13 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 50)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 14 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 54)
                                               <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="time">
                                           <p>01:00PM-03:00PM</p>
                                           @php
                                               $compteur=3;
                                           @endphp
                                       </td>
                                       {{-- 8 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 31)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 9 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 35)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 10 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 39)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 11 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 43)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 12 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 47)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 13 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 51)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 14 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 55)
                                               <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="time">
                                           <p>03:00PM-05:00PM</p>
                                           @php
                                               $compteur=4;
                                           @endphp
                                       </td>
                                       {{-- 8 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 32)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 9 novembre --}}
                                       <td> 
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 36)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 10 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 40)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 11 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 44)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 12 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 48)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 13 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 52)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                       {{-- 14 novembre --}}
                                       <td>
                                           @foreach ($classes as $classe)
                                               @if ($classe->schedule_id == 56)
                                               <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                                   <h4 style="color: black">{{ $classe->titre }}</h4>
                                                   <p style="color: black">{{ $classe->trainer->nom }}</p>
                                                   <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                               </div>
                                               @else
                                               @endif
                                           @endforeach
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <div class="carousel-caption d-none d-md-block">
                 
               </div>
             </div>
             <div class="carousel-item">
                {{-- 3e semaine --}}

            <div class="row">
               <div class="col-xs-12">
                   <div class="scehedule-table table-responsive text-center">
                       <table>
                           <thead>
                               <tr>
                                   <th>Time</th>
                                   <th>15/11 saturday</th>
                                   <th>16/11 sunday</th>
                                   <th>17/11 monday</th>
                                   <th>18/11 tuesday</th>
                                   <th>19/11 wednesday</th>
                                   <th>20/11 thursday</th>
                                   <th>21/11 friday</th>
                               </tr>
                           </thead>
                           <tbody class="pt-30">
                               <tr>
                                   <td class="time">
                                       <p>8:00AM-10:00AM</p>
                                       @php
                                           $compteur=1;
                                       @endphp
                                   </td>
                                   {{-- 15 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 57)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 16 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 61)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 17 novembre --}}
                                   <td >
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 65)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   
                                   {{-- 18 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 69)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 19 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 73)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 20 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 77)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 21 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 81)
                                           <div style="height: 100%;background-color:red;width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>10:00AM-12:00AM</p>
                                       @php
                                           $compteur=2
                                       @endphp
                                   </td>
                                   {{-- 15 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 58)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 16 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 62)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 17 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 66)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 18 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 70)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 19 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 74)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 20 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 78)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 24 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 82)
                                           <div style="height: 100%;background-color:rgb(135, 236, 203);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>01:00PM-03:00PM</p>
                                       @php
                                           $compteur=3;
                                       @endphp
                                   </td>
                                   {{-- 15 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 59)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 16 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 63)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 17 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 67)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 18 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 71)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 19 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 75)
                                           <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 20 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 79)
                                              <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 21 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 83)
                                              <div style="height: 100%;background-color:rgb(135, 158, 236);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                               <tr>
                                   <td class="time">
                                       <p>03:00 PM-05:00PM</p>
                                       @php
                                           $compteur=4;
                                       @endphp
                                   </td>
                                   {{-- 15 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 60)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 16 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 64)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif 
                                       @endforeach
                                   </td>
                                   {{-- 17 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 68)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 18 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 72)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 19 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 76)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 20 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 80)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>
                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                                   {{-- 21 novembre --}}
                                   <td>
                                       @foreach ($classes as $classe)
                                           @if ($classe->schedule_id == 84)
                                              <div style="height: 100%;background-color:rgb(146, 108, 190);width:100%">
                                               <h4 style="color: black">{{ $classe->titre }}</h4>
                                               <p style="color: black">{{ $classe->trainer->nom }}</p>
                                               <p style="color: black">Categorie:{{ $classe->categorie->genre }}</p>
                                           </div>

                                           @else
                                           @endif
                                       @endforeach
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
               <div class="carousel-caption d-none d-md-block">
                 
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
        </div>
    </div>
    </div>
</section>
<!-- Schedule Area End -->