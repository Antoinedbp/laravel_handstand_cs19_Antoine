<!-- About Start -->
<section class="about-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                     <h2>{{$abouts[0]->titre}}</h2>
                     <p class="m-0">{{$abouts[0]->description_1}}</p>
                     <p>{{$abouts[0]->description_2}}</p>
                     <a class="banner-btn" href="" data-text="read more"><span>read more</span></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-video active">
                     <div class="game">
                         <a href="#"><img src="{{asset('img/about/' . $abouts[0]->img_video)}}" alt="about"></a>
                     </div> 
                     <div class="video-icon video-hover">
                         <a class="video-popup" href="{{$abouts[0]->video}}">
                             <i class="zmdi zmdi-play"></i>
                         </a>
                     </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- About End -->