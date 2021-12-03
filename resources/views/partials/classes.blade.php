<!-- Classes Start -->
<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @php
                        $first = Str::before($titres[0]->titre, '(');
                        $middle = Str::between($titres[0]->titre, '(', ')');
                        $last = Str::after($titres[0]->titre, ')');
                    @endphp
                    @if ($first == $middle && $middle == $last)   
                        <h2>{{$first}}</h2>
                    @else
                        <h2>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h2>
                    @endif
                    <p>{{$titres[0]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">

            @if (session()->has('errors'))
                <div class="alert alert-danger">
                    <ul>
                        {{session('errors')}}
                    </ul>
                </div>
            @endif

            @foreach ($classes as $classe)

                @php

                    $disable = false;
                    if ($classe->prioritaire == true) {
                        $color = 'background-color:#21eb4d ';
                    } else {
                        $color = 'background-color:   #F2F2F2';
                    }

                @endphp

                @foreach ($allInscriptions as $inscription)

                    @if ($inscription->classe_id === $classe->id)

                        @if ($inscription->users <= 3)

                            @if ($classe->prioritaire == 1)

                                @php
                                    $color = 'background-color:#21eb4d ';
                                @endphp

                            @else

                                @php
                                    $color = 'background-color:   #F2F2F2';
                                @endphp

                            @endif

                        @elseif ($inscription->users > 3 && $inscription->users < 6)

                            @php
                                $color = 'background-color:  #ff5500';
                            @endphp

                        @else

                            @php
                                $color = 'background-color: #FF0000';
                                $disable = true;
                            @endphp

                        @endif

                    @endif

                @endforeach
            
                <div class="col-md-4 col-sm-6 col-xs-12">

                    @if ($classe->prioritaire === 1)

                        <div class="single-class">
                            <div class="single-img">
                                <a href=""><img src="{{asset('img/class//' . $classe->img)}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset($classe->img)}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single-content" style="{{$color}}">
                                <h3><a href="{{route('classes.show', $classe->id)}}">{{$classe->titre}}</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>{{$classe->trainer->nom}}</li>
                                    <li><i class="zmdi zmdi-alarm"></i>{{$classe->schedules->date}}</li>
                                </ul>
                            </div>
                        </div>

                    @else
                        
                        <div class="single-class">
                            <div class="single-img">
                                <a href=""><img src="{{asset('img/class/' . $classe->img)}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset($classe->img)}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single-content" style="{{$color}}">
                                <h3><a href="{{route('classes.show', $classe->id)}}">{{$classe->titre}}</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>{{$classe->trainer->nom}}</li>
                                    <li><i class="zmdi zmdi-alarm"></i>{{$classe->time}}</li>
                                </ul>
                            </div>
                        </div>

                    @endif
                    @auth
                        @can('inscription', $classe)
                            <form style="margin-top: 20px; text-align: center"
                                action="{{ route('inscription', $classe->id) }}"
                                method="post">
                                @csrf
                                @if ($disable)
                                <button disabled class="btn"
                                style="font-size: 12px; background-color: #5f8cc7;">Inscription</button>
                                @else
                                <button class="btn"
                                    style="font-size: 12px; background-color: #5f8cc7;">Inscription</button>
                                @endif
                            </form>
                        @endcan
                    @endauth
                </div>

            @endforeach
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a class="banner-btn mt-55" href="{{route('classe')}}" data-text="view all classes"><span>view all classes</span></a>
            </div>
        </div>
    </div>
</section>
<!-- Class Area End -->