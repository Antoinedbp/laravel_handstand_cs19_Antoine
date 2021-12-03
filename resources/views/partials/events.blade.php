<!-- Event Area Strat -->
<section class="event-area pt-95 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @php
                        $first = Str::before($titres[4]->titre, '(');
                        $middle = Str::between($titres[4]->titre, '(', ')');
                        $last = Str::after($titres[4]->titre, ')');
                    @endphp
                    @if ($first == $middle && $middle == $last)   
                        <h2>{{$first}}</h2>
                    @else
                        <h2>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h2>
                    @endif
                    <p>{{$titres[4]->description}}</p>
                </div>
                <div class="event-wrapper">
                    <div class="event-content text-center">
                        <h3>{{$events[0]->titre}}</h3>
                        <p>{{$events[0]->description}}</p>
                        <h4>{{$events[0]->date}}</h4>
                        <h5>{{$events[0]->time}}</h5>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Area End -->