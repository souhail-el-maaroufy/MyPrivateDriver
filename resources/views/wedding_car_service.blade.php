@extends('layouts.frontend')

@section('content')
    <div class="title_page" style="background-image: url({{asset('images/widding_car.jpg')}});">
    
        <h1>WEDDING CAR SERVICE </h1>
        <p>We offer a variety of vehicles to choose from, including private cars, shuttle buses, and taxis.
                 With our online booking system and 24/7 support, you can easily arrange your airport transfer.</p>
    </div>
    <div class="container section-2">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                <h1><span class="title_span">WEDDING CARS</span> WITH DRIVER IN MOROCO</h1>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p>
                        At Marrakech Weddings, we understand the significance of arriving on time for your special day. That's why we offer top-notch wedding transportation services to ensure a seamless experience. 
                        Our team of professional chauffeurs is dedicated to providing you with the most luxurious ride to and from your wedding ceremony, making sure you arrive in style.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 column">
                <p>
                    We also offer a range of decorative options to customize your ride, such as ribbons and flowers, to make your experience all the more memorable. Our vehicles are equipped to accommodate the bride, groom, and the wedding party, ensuring everyone arrives at the reception with ease. Our drivers are experienced and trained to handle any unexpected situations, giving you peace of mind on your special day. <br><br>
                    We offer a variety of vehicles to choose from, including luxury sedans and 7-seater vans like the Mercedes Vito or V-Class, ensuring there's a perfect vehicle for your wedding party. Our rental options come with a professional driver, allowing you to focus on your special day without the added stress of transportation arrangements. <br><br>
                    Contact us today to book your wedding transportation and make your special day even more unforgettable!
                </p>
                    <a class="btn-airport_transfer" href="#">Booking Now</a>
            </div>
            <div class="col-md-6">
                <img style="width:100%;border-radius:2%;" src="{{ asset('images/widding_car-01.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection