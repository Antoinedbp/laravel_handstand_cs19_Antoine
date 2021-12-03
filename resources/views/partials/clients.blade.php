<!-- Client Area Strat -->
<section class="client-area pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @php
                    $first = Str::before($titres[6]->titre, '(');
                    $middle = Str::between($titres[6]->titre, '(', ')');
                    $last = Str::after($titres[6]->titre, ')');
                    @endphp
                    @if ($first == $middle && $middle == $last)   
                        <h2>{{$first}}</h2>
                    @else
                        <h2>{{$first}}<span style="color:rgb(95, 199, 174)">{{$middle}}</span>{{$last}}</h2>
                    @endif
                    <p>{{$titres[6]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial-owl">
                        @foreach ($clients as $client)
                            <div class="col-xs-12">
                                <div class="single-testimonial">
                                    <i class="zmdi zmdi-quote"></i>
                                    <p>{{$client->avis}}</p>
                                    <img height="150rem" width="150rem" src="{{asset("img/icon/" . $client->signature)}}" alt="signature">
                                    <h6>{{$client->description}}</h6>
                                </div>    
                            </div> 
                        @endforeach
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->