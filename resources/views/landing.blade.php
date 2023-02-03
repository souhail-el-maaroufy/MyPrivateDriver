@extends('layouts.frontend')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
        style="background-image:url(https://www.allomycab.ma/images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row flexit">
                {{-- <div class="col-md-5 col-md-offset-0 text-right">
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
                                <a href="#" class="link-text-white"
                                    alt="Mohammed v airport transfer in Casablanca ( CMN )">
                                    Mohammed v airport transfer in Casablanca ( CMN )
                                </a>,
                                <a href="#" class="link-text-white" alt="Marrakech Menara airport transfer ( RAK )">
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
                </div> --}}
                <div class="col-md-7 col-md-offset-0 form-holder">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="booking-form">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="simple" class="active">
                                        <a href="#simple" aria-controls="home" role="tab" data-toggle="tab">
                                            <i class="fa-sharp fa-solid fa-route"></i>
                                            Route
                                        </a>
                                    </li>
                                    <li role="per_hour">
                                        <a href="#heure" aria-controls="profile" role="tab" data-toggle="tab">
                                            <i class="fa-regular fa-clock"></i>
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

    {{-- <div id="gtco" class="gtco-section reviews">
        <div class="gtco-container gtco-heading">
            <div class="col-md-12">
                <h2 style="color:#fff;" class="text-center">Private driver car <br /> easy and fast transport</h2>
            </div>
            <div class="col-md-6">
                    <ul class="avis">
                        <li><img class="avis-img" src="https://www.allomycab.ma/images/avis_en.svg" alt="Customers reviews"></li>
                        <li><img class="star" src="https://www.allomycab.ma/images/star.svg" alt="Customers reviews"></li>
                        <li><img class="star" src="https://www.allomycab.ma/images/star.svg" alt="Customers reviews"></li>
                        <li><img class="star" src="https://www.allomycab.ma/images/star.svg" alt="Customers reviews"></li>
                        <li><img class="star" src="https://www.allomycab.ma/images/star.svg" alt="Customers reviews"></li>
                        <li><img class="star" src="https://www.allomycab.ma/images/star.svg" alt="Customers reviews"></li>
                        <li>(4.9/5) 550 Customers reviews</li>
                    </ul>
                </div>
        </div>
    </div> --}}

    <div id="gtco" class="gtco-section features no-padd">
        <div class="gtco-container margin">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2 style="color: white;">Our services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{ asset('images/les images private driver/Alcudia-airport-transfers.jpeg') }}" alt="">
                    <h4 class="our-sevices-title">AIRPORT TRANSFERS </h4>
                    <p>Lorem ipsum dolor sit amet consectetur
                        obcaecati minima voluptas quaerat? Quibusdam voluptate soluta eligendi.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img" src="{{ asset('images/les images private driver/driver.jpg') }}"
                        alt="">
                    <h4 class="our-sevices-title">RENT A DRIVER SERVICES</h4>
                    <p>Lorem ipsum dolor sit amet consectetur
                        obcaecati minima voluptas quaerat? Quibusdam voluptate soluta eligendi.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{ asset('images/les images private driver/saharadesertour_1-e1606936712182.jpeg') }}"
                        alt="">
                    <h4 class="our-sevices-title">DESSERT SAFARI TOURS</h4>
                    <p>Lorem ipsum dolor sit amet consectetur
                        obcaecati minima voluptas quaerat? Quibusdam voluptate soluta eligendi.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{ asset('images/les images private driver/Happy-Travelers-shutterstock_217190278.jpg') }}"
                        alt="">
                    <h4 class="our-sevices-title">CORPORATE BUSINESS TRAVEL</h4>
                    <p>Lorem ipsum dolor sit amet consectetur
                        obcaecati minima voluptas quaerat? Quibusdam voluptate soluta eligendi.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>

            </div>


            {{-- <div class="review" id="review">
                <h1 class="heading text-center">nos<span>chef</span></h1>
                <div class="swiper review-slider">
                         <div class="swiper-wrapper">
                               <div class="swiper-slide box">
                                   <img src="{{asset('images/icon-person.jpg')}}" alt="">
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore dolore voluptatum amet expedita reprehenderit debitis.
                                       Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt, aspernatur repudiandae vero!</p>
                                   <h3>maria deo</h3>
                                   <div class="stars">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star-half-alt"></i>
                                   </div>
                               </div>
        
                               <div class="swiper-slide box">
                                   <img src="{{asset('images/icon-person.jpg')}}" alt="">
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore dolore voluptatum amet expedita reprehenderit debitis.
                                       Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt, aspernatur repudiandae vero!</p>
                                   <h3>chef moha </h3>
                                   <div class="stars">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star-half-alt"></i>
                                   </div>
                               </div>
        
                               <div class="swiper-slide box">
                                   <img src="{{asset('images/icon-person.jpg')}}" alt="">
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore dolore voluptatum amet expedita reprehenderit debitis.
                                       Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt, aspernatur repudiandae vero!</p>
                                   <h3>Philippe Etchebest </h3>
                                   <div class="stars">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star-half-alt"></i>
                                   </div>
                               </div>
                    </div>
               </div>
           </div> --}}

        </div>
    </div>

    <div id="gtco" class="gtco-section need">
        <div class="gtco-container">
            <div class="col-md-6 carousel-home">
                <div class="row animate-box-off">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item"> <img
                                    src="{{ asset('images/les images private driver/New folder/16504600769367.jpg') }}"
                                    alt="Mercedes-Benz V-Class"> </div>
                            <div class="item"> <img
                                    src="{{ asset('images/les images private driver/New folder/51.jpg') }}"
                                    alt="Mercedes-Benz E-Class"> </div>
                            <div class="item"> <img
                                    src="{{ asset('images/les images private driver/New folder/594abc0e7c0df2.62631465.jpg') }}"
                                    alt="Mercedes-Benz E-Class"> </div>
                            <div class="item"> <img src="{{asset('images/les images private driver/New folder/Mon-chauffeur-privé.jpg')}}"
                                    alt="Range Rover Vogue"> </div>
                            <div class="item">
                                <video width="100%" controls="controls"
                                    src="https://www.allomycab.ma/videos/marrakech-video.mp4" type="video/mp4"></video>
                            </div>
                            <div class="item"> <img
                                    src="{{ asset('images/les images private driver/New folder/Mon-chauffeur-privé.jpg') }}"
                                    alt="Mercedes-Benz V-Class"> </div>
                            <div class="item"> <img
                                    src="{{ asset('images/les images private driver/New folder/voiture-avec-chauffeur-prive-casablanca.jpg') }}"
                                    alt="Mercedes-Benz V-Class"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1  gtco-heading animate-box-off">
                        <h2>private driver in Morocco : Marrakech, Casablanca, Rabat, Agadir and all over the country.</h2>
                        <p>We are a platforme of professional Chauffeur service with cars and sedans. We are specialized in
                            the transportation of people in Morocco Marrakech , Casablanca, Rabat ... an alternative to
                            Moroccan taxis. We work with professionals
                            tourists and individuals to defend the Made in Morocco product of the Private driver profession.
                            We guarantee the satisfaction of our customers till 100%. We go along with you during all your
                            trips in Marrakech and its
                            suburbs. We are also available for your business trips parties, weddings, meetings and
                            conferences , your airport transfer & pick up in casablanca, marrakech and the other cities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco" class="gtco-section features no-padd">
        <div class="gtco-container margin">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2 style="color: white">Why Choose Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/les images private driver/dark_01.png') }}"
                            alt="">
                    </div>

                    <h4 class="why-choos-us-title">EASY ONLINE BOOKING</h4>
                    <p>When you book the service using our dedicated online portal, you will be kept informed of the
                        progress of your vehicle via our dispatch team .</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/les images private driver/dark_02.png') }}"
                            alt="">
                    </div>

                    <h4 class="why-choos-us-title">PROFESSIONAL DRIVERS</h4>
                    <p>All of our drivers undergo intensive assessment of their driving abilities prior to any offer of
                        employment.
                        They are tested on their knowledge of the Qatar Traffic Rules and all have in- depth knowledge of
                        the roads and locations of Qatar .</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img style="width: 110px;height:auto;margin-top:50px;"
                            src="{{ asset('images/les images private driver/dark_03.png') }}" alt="">
                    </div>

                    <h4 class="why-choos-us-title">VARIETY OF CAR BRANDS</h4>
                    <p>All of our vehicles are subjected to daily roadworthiness checks and are dealer-serviced at regular
                        intervals to ensure that all vehicles within our fleet are safe and clean .</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/les images private driver/dark_04.png') }}"
                            alt="">
                    </div>
                    <h4 class="why-choos-us-title">LONG TERM SPECIAL RATES</h4>
                    <p>We understand that there are multiple Limousine providers in Qatar and our staff carry our market
                        research to make sure we are always offering the most competitive service we are able to provide .
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="gtco-section reviews">
        <div class="gtco-container">

            <div class="row customr-feed">
                <div class="col-md-6">
                    <img style="width:90%" src="{{ asset('images/airport-mohammed-v-transfer.jpg') }}" alt=""
                        srcset="">
                </div>
                <div style="margin-top: 18px;" class="container col-md-6">
                    <span>About Luxury Private Car Morocco</span>
                    <h1>Trusted Luxury Car Services In All Over The World.</h1>
                    <p>Luxury Private car Morocco is your private driver service that provides professional chauffeur
                        services in Morocco. We offer airport transfers, private and shared car services,
                        group transfers, group tours and excursions. Our Chauffeurs are fully licensed and experienced
                    </p>


                    <div class="row">
                        <div class="icon">
                            <i class="fa-solid fa-map"></i>
                        </div>
                        <div class="sub-text">
                            <h4>Long Distance Trip</h4>
                            <p>Choosing the best luxury car for long distance trips and long-distance drives is a highly personal experience. Luckily, we can help you .</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="icon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="sub-text">
                            <h4>Luxury Car Tour Services</h4>
                            <p>Dependable, reliable, and all cars are fully inspected before each and every trip.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="gtco-portfolio" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2>OUR LUXURIOUS CARS AND VANS</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-portfolio-list">

                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url(https://www.allomycab.ma/images/img_6.jpg); ">
                            <a href="#" class="color-4" title="Mercedes-Benz V-Class">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('storage/2023/01/22/79fbbeda192d71661e2514b12d9dc167574d1c96.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_17.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_7.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_18.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>

                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_14.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_10.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/img_19.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                        style="background-image: url({{ asset('images/gallery/img_4.jpg') }}); ">
                        <a href="#" class="color-4" title="#">
                            <div class="case-studies-summary">
                                {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                            </div>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div id="" class="gtco-section reviews">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2 class="title-gtco-container">Customers Feedback</h2>
                    {{-- <h4 class="title-gtco-container">Our Customer Reviews.</h4> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="review" id="review">
                        <div class="swiper review-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/icon-person.jpg') }}" alt="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
                                    <h3>maria deo</h3>
                                    {{-- <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div> --}}
                                </div>

                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/icon-person.jpg') }}" alt="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
                                    <h3>Jon Monalizy </h3>
                                    {{-- <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div> --}}
                                </div>

                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/icon-person.jpg') }}" alt="">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
                                    <h3>Philippe Etchebest </h3>
                                    {{-- <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2>Allomycab go along with you.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorem maiores consectetur qui
                        necessitatibus quam explicabo modi ad esse, magni in quibusdam repellat eaque iusto. Unde eos porro
                        alias corporis!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 animate-box-off" data-animate-effect="fadeInLeft">
                    <div class="feature-center"><span class="icon"> <i class="fa-solid fa-car"></i> </span>
                        <span class="counter js-counter" data-from="0" data-to="78070" data-speed="2000"
                            data-refresh-interval="50">78070</span> <span class="counter-label">Kilometeres crossed</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box-off" data-animate-effect="fadeInLeft">
                    <div class="feature-center"><span class="icon"> <i class="fa-regular fa-face-smile"></i> </span>
                        <span class="counter js-counter" data-from="0" data-to="4350" data-speed="2000"
                            data-refresh-interval="50">4350</span> <span class="counter-label">Satisfied clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box-off" data-animate-effect="fadeInLeft">
                    <div class="feature-center"><span class="icon"> <i class="fa-solid fa-briefcase"></i> </span>
                        <span class="counter js-counter" data-from="0" data-to="5234" data-speed="2000"
                            data-refresh-interval="50">5234</span> <span class="counter-label">Paths crossed</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box-off" data-animate-effect="fadeInLeft">
                    <div class="feature-center"><span class="icon"> <i class="fa-solid fa-clock"></i> </span>
                        <span class="counter js-counter" data-from="0" data-to="212023" data-speed="2000"
                            data-refresh-interval="50">212023</span> <span class="counter-label">Working hours</span>
                    </div>
                </div>
            </div>
            {{-- <div id="gtco-subscribe" class="interpage animate-box-off js-top"><a href="#" title="Casablanca Mohammed V Airport transfer" alt="Casablanca Mohammed V Airport transfer" class="btn btn-default btn-block">CHECK PRICES</a></div> --}}
        </div>
    </div>

   
@endsection
