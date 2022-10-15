@extends('layouts.frontend')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
        style="background-image:url(https://www.allomycab.ma/images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row flexit">
                <div class="col-md-5 col-md-offset-0 text-right">
                    <div class="display-t">
                        <div class="display-tc">
                            <h1 class="animate-box-off" data-animate-effect="fadeInUp">
                                Book your private driver in
                                Morocco : trips and airport transfers
                            </h1>
                            <h3 class="animate-box-off white-text" data-animate-effect="fadeInUp">
                                All over Morocco : Marrakech, Casablanca, Rabat, Fes, Tangier, Agadir...
                            </h3>
                            <p class='white-text'>
                                <i style="color: #00ffb1; font-size: 20px;" class='ti-check-box'></i>
                                Save up to 30% on your transfers <br />
                                <i style="color: #00ffb1; font-size: 20px;" class='ti-check-box'></i>
                                More than 5,234 transfers and cars providing <br />
                                <i style="color: #00ffb1; font-size: 20px;" class='ti-check-box'></i>
                                24/7 customer service
                            </p>
                            <p class="white-text animate-box-off mobile-hide ">
                                Your private driver go along with you on all your trips and your
                                <a href="https://www.allomycab.ma/en/casablanca-airport-transfers" class="link-text-white"
                                    alt="Mohammed v airport transfer in Casablanca ( CMN )">
                                    Mohammed v airport transfer in Casablanca ( CMN )
                                </a>,
                                <a href="https://www.allomycab.ma/en/marrakech-airport-transfers" class="link-text-white"
                                    alt="Marrakech Menara airport transfer ( RAK )">
                                    Marrakech Menara airport transfer ( RAK )
                                </a>
                                and all over Morocco and its airports .
                            </p>
                            <a class="white-text animate-box-off header_arrow_p">
                                Check Prices
                                <img src="https://www.allomycab.ma/images/arrow.svg"
                                    alt="EVALUATE THE PRICE: Private driver in Marrakech &amp; Casablanca airport transfer" />
                            </a>
                            <a class="white-text animate-box-off header_arrow_p_mobile">
                                Check Prices
                                <img src="https://www.allomycab.ma/images/arrow-down.svg"
                                    alt="EVALUATE THE PRICE: Private driver in Marrakech &amp; Casablanca airport transfer" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-0 form-holder">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="booking-form">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="simple" class="active">
                                        <a href="#simple" aria-controls="home" role="tab" data-toggle="tab">
                                            <i class="ti-direction-alt"></i>
                                            Route
                                        </a>
                                    </li>
                                    <li role="per_hour">
                                        <a href="#heure" aria-controls="profile" role="tab" data-toggle="tab">
                                            <i class="ti-time"></i>
                                            Per Hour
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- hourly booking  -->
                                    <div role="tabpanel" class="tab-pane" id="heure">
                                        @include('frontend.components.forms.hourly')
                                    </div>
                                    <!-- tab simple path -->
                                    <div role="tabpanel" class="tab-pane active" id="simple">
                                        @include('frontend.components.forms.simple')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
