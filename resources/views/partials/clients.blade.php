<!-- Client Area Strat -->
<section class="client-area pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[6]->titre}}</h2>
                    <p>{{$titres[6]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial-owl">
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$clients[0]->avis}}</p>
                                <img src="{{asset($clients[0]->signature)}}" alt="signature">
                                <h6>{{$clients[0]->description}}</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$clients[1]->avis}}</p>
                                <img src="{{asset($clients[1]->signature)}}" alt="signature">
                                <h6>{{$clients[1]->description}}</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$clients[2]->avis}}</p>
                                <img src="{{asset($clients[2]->signature)}}" alt="signature">
                                <h6>{{$clients[2]->description}}</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$clients[3]->avis}}</p>
                                <img src="{{asset($clients[3]->signature)}}" alt="signature">
                                <h6>{{$clients[3]->description}}</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$clients[4]->avis}}</p>
                                <img src="{{asset($clients[4]->signature)}}" alt="signature">
                                <h6>{{$clients[4]->description}}</h6>
                            </div>    
                        </div>  
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->