<section id="biking" class="section">
    <div class="hgroup">
        <h3>Where I ride</h3>
        <h2 title="Biking">Biking</h2>
    </div>

    <div class="row">
        <div class="col-md-3 font-montserrat">
            <i class="icon far fa-compass fa-4x pull-left margin-right-15"></i>
            <strong class="text-uppercase">distance</strong>
            <br/>
            <span class="count-to font-size-2em text-primary" data-from="0" data-to="{{ $rideDistance }}" data-speed="2000">{{ $rideDistance }}</span>km
        </div>
        <div class="col-md-3 font-montserrat">
            <i class="icon far fa-hourglass-half fa-4x pull-left margin-right-15"></i>
            <strong class="text-uppercase">movingtime</strong>
            <br/>
            <span class="count-to font-size-2em text-primary" data-from="0" data-to="{{ $rideTime }}" data-speed="2000">{{ $rideTime }}</span>h
        </div>
        <div class="col-md-3 font-montserrat">
            <i class="icon far fa-angle-double-up fa-4x pull-left margin-right-15"></i>
            <strong class="text-uppercase">elevation</strong>
            <br/>
            <span class="count-to font-size-2em text-primary" data-from="0" data-to="{{ $rideElevation }}" data-speed="2000">{{ $rideElevation }}</span>m
        </div>
        <div class="col-md-3 font-montserrat">
            <i class="icon far fa-globe fa-4x pull-left margin-right-15"></i>
            <strong class="text-uppercase">countries</strong>
            <br/>
            <span class="count-to font-size-2em text-primary" data-from="0" data-to="{{ count($countries) }}" data-speed="2000">{{ count($countries) }}</span>
        </div>
    </div>

    <div class="row margin-top-30">
        @foreach($countries as $iso => $country)
        <div class="col-md-1 col-sm-2 col-xs-3">
            <img src="{{ url('img/flag/'.strtolower($iso).'.png') }}" alt="{{ $country }}" class="img-responsive margin-bottom-30" data-toggle="tooltip" data-title="{{ $country }}" />
        </div>
        @endforeach
    </div>

    <div id="biking-map" data-countries="{{ json_encode(array_keys($countries)) }}"></div>

</section>