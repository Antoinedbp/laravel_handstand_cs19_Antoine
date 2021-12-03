@foreach ($footers as $item)
        <!-- Start of Map Area -->
    <div class="map-area">
        <!-- google-map-area start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
                {{-- <div id="googleMap" style="width:100%;height:380px;"></div> --}}
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q={{$item->map->numero}}%20{{str_replace(' ','%20',$item->map->rue)}},%20{{$item->map->ville}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
            </div>
        </div>
    </div>
    <!-- End of Map Area -->
@endforeach
