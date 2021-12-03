<!-- Footer Area Start -->
<footer class="footer-area bg-gray">
    @foreach ($footers as $footer)
        <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
            <div class="container">
                <div class="row">  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <a href=""><img src="{{asset('img/logo/' . $footer->logo)}}" alt="handstand"></a>
                            <p>{{$footer->description}}</p>
                            <ul>
                                <li><i class="zmdi zmdi-email"></i> {{$footer->mail}}</li>
                                <li><i class="zmdi zmdi-phone"></i> {{$footer->tel}}</li>
                                <li><i class="zmdi zmdi-home"></i> {{$footer->map->rue}} {{$footer->map->numero}}, {{$footer->map->cp}} {{$footer->map->ville}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>{{$footer->titre_1}}</h3>
                            <div class="single-twitt mb-10">
                                <div class="twitt-icon">
                                    <i class="zmdi zmdi-twitter"></i>
                                </div>
                                <div class="twitt-content">
                                    <p>{{$footer->tweet_1}}</p>
                            <a href="{{$footer->site_1}}">{{$footer->site_1}}</a>
                                </div>
                            </div>
                            <div class="single-twitt">
                                <div class="twitt-icon">
                                    <i class="zmdi zmdi-twitter"></i>
                                </div>
                                <div class="twitt-content">
                                    <p>{{$footer->tweet_2}}</p>
                            <a href="{{$footer->site_2}}">{{$footer->site_2}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-footer-widget">
                            <h3>get in touch</h3>
                            <form id="subscribe-form" action="{{route('emails.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea cols="30" rows="7" name="message" placeholder="subject"></textarea>
                                        <button type="submit">{{$footer->btn}}</button>
                                    </div>
                                </div>
                                <div class="mt-4" style="display: none">

                                    <x-input value="4" id="password_confirmation" class="block mt-1 w-full"
                                                    type="number"
                                                    name="lu" required />
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-text-area fix bg-coffee ptb-18">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-text text-center">
                            <span>{{$footer->copyright}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</footer>
<!-- Footer Area End -->