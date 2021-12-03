<!-- Trainer Area Start -->
<div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @php
                        $first = Str::before($titres[2]->titre, '(');
                        $middle = Str::between($titres[2]->titre, '(', ')');
                        $last = Str::after($titres[2]->titre, ')');
                    @endphp
                    @if ($first == $middle && $middle == $last)   
                        <h2>{{$first}}</h2>
                    @else
                        <h2>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h2>
                    @endif
                    <p>{{$titres[2]->description}}</p>
                </div>
            </div>
            @foreach ($allTrainers as $trainer)

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{asset($trainer->img)}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainer->nom}}</h3>
                        <ul>
                            @foreach ($icons as $icon)
                                <li><a href="{{$icon->link}}"><i class="{{$icon->class}}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- Trainer Area End -->