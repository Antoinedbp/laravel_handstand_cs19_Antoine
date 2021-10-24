<!-- Pricing Area Start -->
<div class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[5]->titre}}</h2>
                    <p>{{$titres[5]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricings[0]->titre}}</h2>
                        <h1>{{$pricings[0]->prix}}<span>/{{$pricings[0]->mois}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricings[0]->description1}}</li>
                            <li>{{$pricings[0]->description2}}</li>
                            <li>{{$pricings[0]->description3}}</li>
                            <li>{{$pricings[0]->description4}}</li>
                        </ul>
                        <a href="#">{{$pricings[0]->btn}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricings[1]->titre}}</h2>
                        <h1>{{$pricings[1]->prix}}<span>/{{$pricings[1]->mois}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricings[1]->description1}}</li>
                            <li>{{$pricings[1]->description2}}</li>
                            <li>{{$pricings[1]->description3}}</li>
                            <li>{{$pricings[1]->description4}}</li>
                        </ul>
                        <a href="#">{{$pricings[1]->btn}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricings[2]->titre}}</h2>
                        <h1>{{$pricings[2]->prix}}<span>/{{$pricings[2]->mois}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricings[2]->description1}}</li>
                            <li>{{$pricings[2]->description2}}</li>
                            <li>{{$pricings[2]->description3}}</li>
                            <li>{{$pricings[2]->description4}}</li>
                        </ul>
                        <a href="#">{{$pricings[2]->btn}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Area End -->