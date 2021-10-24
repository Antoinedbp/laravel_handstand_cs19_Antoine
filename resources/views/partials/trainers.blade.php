<!-- Trainer Area Start -->
<div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[2]->titre}}</h2>
                    <p>{{$titres[2]->description}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{asset($trainers[0]->img)}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainers[0]->nom}}</h3>
                        <ul>
                            <li><a href="{{$trainers[0]->linkLogo1}}"><i class="{{$trainers[0]->logo1}}"></i></a></li>  
                            <li><a href="{{$trainers[0]->linkLogo2}}"><i class="{{$trainers[0]->logo2}}"></i></a></li>
                            <li><a href="{{$trainers[0]->linkLogo3}}"><i class="{{$trainers[0]->logo3}}"></i></a></li>
                            <li><a href={{$trainers[0]->linkLogo4}}"><i class="{{$trainers[0]->logo4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{asset($trainers[1]->img)}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainers[1]->nom}}</h3>
                        <ul>
                            <li><a href="{{$trainers[1]->linkLogo1}}"><i class="{{$trainers[1]->logo1}}"></i></a></li>  
                            <li><a href="{{$trainers[1]->linkLogo2}}"><i class="{{$trainers[1]->logo2}}"></i></a></li>
                            <li><a href="{{$trainers[1]->linkLogo3}}"><i class="{{$trainers[1]->logo3}}"></i></a></li>
                            <li><a href={{$trainers[1]->linkLogo4}}"><i class="{{$trainers[1]->logo4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{asset($trainers[2]->img)}}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainers[2]->nom}}</h3>
                        <ul>
                            <li><a href="{{$trainers[2]->linkLogo1}}"><i class="{{$trainers[2]->logo1}}"></i></a></li>  
                            <li><a href="{{$trainers[2]->linkLogo2}}"><i class="{{$trainers[2]->logo2}}"></i></a></li>
                            <li><a href="{{$trainers[2]->linkLogo3}}"><i class="{{$trainers[2]->logo3}}"></i></a></li>
                            <li><a href={{$trainers[2]->linkLogo4}}"><i class="{{$trainers[2]->logo4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trainer Area End -->