<!-- Footer Area Start -->
<footer class="footer-area bg-gray">
    <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
        <div class="container">
            <div class="row">  
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <a href=""><img src="{{asset($footers[0]->logo)}}" alt="handstand"></a>
                        <p>{{$footers[0]->description}}</p>
                        <ul>
                            <li><i class="{{$footers[0]->logo_mail}}"></i> {{$footers[0]->mail}}</li>
                            <li><i class="{{$footers[0]->logo_tel}}"></i> {{$footers[0]->tel}}</li>
                            <li><i class="{{$footers[0]->logo_adress}}"></i> {{$footers[0]->adress}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3>{{$footers[0]->titre_1}}</h3>
                        <div class="single-twitt mb-10">
                            <div class="twitt-icon">
                                <i class="{{$footers[0]->logo_1}}"></i>
                            </div>
                            <div class="twitt-content">
                                <p>{{$footers[0]->tweet_1}}</p>
                           <a href="{{$footers[0]->site_1}}">{{$footers[0]->site_1}}</a>
                            </div>
                        </div>
                        <div class="single-twitt">
                            <div class="twitt-icon">
                                <i class="{{$footers[0]->logo_2}}"></i>
                            </div>
                            <div class="twitt-content">
                                <p>{{$footers[0]->tweet_2}}</p>
                           <a href="{{$footers[0]->site_2}}">{{$footers[0]->site_2}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-footer-widget">
                        <h3>get in touch</h3>
                        <form id="subscribe-form" action="{{route('sendMail')}}" method="POST">
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
                                    <button type="submit">submit</button>
                                </div>
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
                        <span>{{$footers[0]->copyright}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->