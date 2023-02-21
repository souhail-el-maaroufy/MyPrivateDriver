@extends('layouts.frontend')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
        style="background-image:url({{asset('images/gallery/new/VTC-Cannes-Driver-1.jpg')}});">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row flexit">
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

    <div id="gtco" class="gtco-section features no-padd">
        <div class="gtco-container margin">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h1><span class="title_span">Our</span> services</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{asset('images/gallery/new/Alcudia-airport-transfers.jpg')}}" alt="">
                    <h4 class="our-sevices-title">AIRPORT TRANSFERS </h4>
                    <p class="our-services-p">We offer a variety of vehicles to choose from, including private cars, shuttle buses, and taxis. With our online booking system and 24/7 support, you can easily arrange your airport transfer.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img" src="{{ asset('images/gallery/new/driver.jpg') }}"
                        alt="">
                    <h4 class="our-sevices-title">RENT A DRIVER SERVICES</h4>
                    <p class="our-services-p">Our experienced drivers will take care of all your transportation needs, allowing you to sit back, relax, and focus on what matters most.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{ asset('images/gallery/new/saharadesertour_1-e1606936712182.jpg') }}"
                        alt="">
                    <h4 class="our-sevices-title">DESERT SAFARI TOURS</h4>
                    <p class="our-services-p">We will take you on a journey of discovery, filled with unforgettable experiences and memories.</p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
                <div class="col-md-3 our-sevices-text">
                    <img class="our-sevices-img"
                        src="{{ asset('images/gallery/new/Happy-Travelers-shutterstock_217190278.jpg') }}"
                        alt="">
                    <h4 class="our-sevices-title">CORPORATE BUSINESS TRAVEL</h4>
                    <p class="our-services-p">Our experienced team will handle all aspects of your business trip with a focus on comfort and reliability to allow you to focus on your business. </p>
                    <a class="btn-see-more" href="#"><span>See More</span></a>
                </div>
            </div>

        </div>
    </div>

    <div id="gtco" class="gtco-section need">
        <div class="gtco-container">
            <div class="col-md-6 carousel-home">
                <div class="row animate-box-off">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item"> <img
                                    src="{{ asset('images/gallery/new/slide/image_1.jpg') }}"
                                    alt="image_1"> </div>
                            <div class="item"> <img src="{{asset('images/gallery/new/slide/image_2.jpg')}}"
                                    alt="image_2"> </div>
                            <div class="item"> <img
                                    src="{{ asset('images/gallery/new/slide/image_3.jpg') }}"
                                    alt="image_3"> </div>
                            <div class="item"> <img
                                    src="{{ asset('images/gallery/new/slide/image_4.jpg') }}"
                                    alt="image_4"> </div>
                                    <div class="item"> <img
                                        src="{{ asset('images/gallery/new/slide/image_5.jpg') }}"
                                        alt="image_5"> </div>
                                        <div class="item"> <img
                                            src="{{ asset('images/gallery/new/slide/image_6.jpg') }}"
                                            alt="image_6"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1  gtco-heading animate-box-off">
                        <h1><span class="title_span">PRIVATE DRIVER </span> , MARRAKECH </h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <p style="padding-left: 20px">At Private Driver, we provide a premium transportation service in Morocco, Marrakech. 
                            We offer a stress-free, safe, and comfortable transportation solution. Our team of experienced and licensed drivers are dedicated to providing an exceptional level of service, tailored to meet your specific needs. Whether you're in Marrakech for business or leisure, our drivers are available 24/7 to take you wherever you need to go. With a fleet of top-quality vehicles and a focus on comfort and convenience, our Private Driver service is the perfect solution for those who value ease, reliability, and style. Book your Private Driver today and experience a seamless transportation experience in Marrakech, Morocco.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gtco" class="gtco-section features no-padd">
        <div class="gtco-container margin">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h1><span class="title_span">Why</span> Choose Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/gallery/new/dark_01.png') }}"
                            alt="">
                    </div>

                    <h4 class="why-choos-us-title">EASY ONLINE BOOKING</h4>
                    <p>By using our online booking portal, you will be able to secure our service with ease and receive updates on your vehicle's progress from our dispatch team .</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/gallery/new/dark_02.png') }}"
                            alt="">
                    </div>

                    <h4 class="why-choos-us-title">PROFESSIONAL DRIVERS</h4>
                    <p>We ensure the proficiency of our drivers by conducting thorough evaluations of their driving skills before hiring them. They are thoroughly tested on their understanding of Qatar's traffic regulations and are well-versed in the roads and destinations of Morocco.</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img style="width: 110px;height:auto;margin-top:50px;"
                            src="{{ asset('images/gallery/new/dark_03.png') }}" alt="">
                    </div>

                    <h4 class="why-choos-us-title">VARIETY OF CAR BRANDS</h4>
                    <p>We prioritize the safety and cleanliness of our vehicles by conducting daily inspections and scheduling regular maintenance with dealers. This ensures that every car in our fleet is in top condition.</p>
                </div>
                <div class="col-md-3 why-choos-us-text">
                    <div class="why-choos-us-icon">
                        <img class="why-choos-us-img" src="{{ asset('images/gallery/new/dark_04.png') }}"
                            alt="">
                    </div>
                    <h4 class="why-choos-us-title">LONG TERM SPECIAL RATES</h4>
                    <p>our team constantly analyzing market’s needs to ensure that our service remains as efficient and convenient for everyone .
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="" class="gtco-section reviews">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h1><span class="title_span">Trusted Luxury</span> Car Services in Morocco</h1>
                </div>
            </div>
            <div class="row customr-feed">
                <div class="container col-md-6">
                    <p class="gtco-section-text">At Private Driver, we provide the most trusted luxury car services all over the world. Our commitment to excellence is evident in every aspect of our service, from the quality of our vehicles to the professionalism of our drivers. Whether you're in need of transportation for a special event, business trip, or just a night out on the town, our luxury car services offer the comfort, style, and convenience that you deserve. we focus on safety, reliability, and attention to detail. We are dedicated to making your transportation experience as smooth and enjoyable as possible. Book your trusted luxury car service today and experience the ultimate in comfort and style, wherever your travels take you.
                    </p>


                    <div class="row">
                        <div class="icon">
                            <i class="fa-solid fa-map"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Long Distance Trip</h3>
                            <p>Selecting the perfect luxury car for extended trips or long-distance drives is a personal matter. Fortunately, we are here to assist you .</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="icon">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Luxury Car Tour Services</h3>
                            <p> Our service is trustworthy, dependable, and all vehicles undergo thorough inspections prior to each trip .</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/gallery/new/image.jpg') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div id="gtco-portfolio" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h1><span class="title_span">OUR LUXURIOUS</span> CARS AND VANS</h1>
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
                            style="background-image: url({{ asset('images/gallery/new/slide/image_3.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/new/slide/image_5.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('images/gallery/new/slide/image_2.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>

                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{asset('storage/2023/01/22/1bd120908ba5d0de221f2c292dd839c4a47e6549.jpg')}}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                            style="background-image: url({{ asset('storage/2023/01/22/5114032c4b222ee10c5d95223160713f817c852c.jpg') }}); ">
                            <a href="#" class="color-4" title="#">
                                <div class="case-studies-summary">
                                    {{-- <h3 class="white-text">Mercedes-Benz V-Class</h3> --}}
                                    <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="one-half animate-box-off" data-animate-effect="fadeIn"
                        style="background-image: url({{ asset('images/gallery/img_4.jpg') }}); ">
                        <a href="#" class="color-4" title="#">
                            <div class="case-studies-summary">
                                <h3 class="white-text">Mercedes-Benz V-Class</h3>
                                <p> <i class="fa-sharp fa-solid fa-route"></i> Exterior appearance</p>
                            </div>
                        </a>
                        </li> --}}
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div id="" class="gtco-section reviews" style="background-size: cover;background-image: url({{asset('images/slide-01.jpg')}})">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h1 class="title-gtco-container"><span class="title_span">Customers</span> Feedback</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="review" id="review">
                        <div class="swiper review-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/gallery/new/icon-person.jpg') }}" alt="">
                                    <h3>maria deo</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
                                    {{-- <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div> --}}
                                </div>

                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/gallery/new/icon-person.jpg') }}" alt="">
                                    <h3>Jon Monalizy </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
                                    {{-- <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div> --}}
                                </div>

                                <div class="swiper-slide box">
                                    <img src="{{ asset('images/gallery/new/icon-person.jpg') }}" alt="">
                                    <h3>Philippe Etchebest </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui rem quibusdam tempore
                                        dolore voluptatum amet expedita reprehenderit debitis.
                                        Perspiciatis nam corporis facilis placeat perferendis ratione sint nesciunt,
                                        aspernatur repudiandae vero!</p>
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
                    <h1><span class="title_span">APRIVATE DRIVER</span> GO ALONG WITH YOU .</h1>
                    <p> Our service is trustworthy, dependable, and all vehicles undergo thorough inspections prior to each trip!</p>
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
