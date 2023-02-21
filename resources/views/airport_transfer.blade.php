@extends('layouts.frontend')

@section('content')
    <div class="title_page" style="background-image: url({{asset('images/marrakesh-menara-airport_1.jpg')}});">
    
        <h1>AIRPORT TRANSFER</h1>
        <p>We offer a variety of vehicles to choose from, including private cars, shuttle buses, and taxis.
                 With our online booking system and 24/7 support, you can easily arrange your airport transfer.</p>
    </div>
    <div class="container section-2">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                <h1><span class="title_span">AIRPORT TRANSFER</span> IN MARRAKECH –MOROCO</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 column">
                {{-- <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box-off">
                    <h2>AIRPORT TRANSFER IN MARRAKECH –MOROCO</h2>
                </div> --}}
                {{-- <h1 class="text-center">AIRPORT TRANSFER IN MARRAKECH –MOROCO</h1> --}}
                <p>Our experienced drivers with expert knowledge of Marrakech traffic ensure that you arrive at your destination on time and in comfort. <br><br>
                    Our fleet of well-maintained vehicles caters to all group sizes, and we provide complimentary meet and greet service to welcome you or your guests at the airport. <br><br>
                    We understand that time is of the essence, which is why our chauffeurs will be waiting for you at the airport before your flight lands. <br><br>
                    Whether you are travelling for business or pleasure, our airport pickup service in Marrakech is designed to make your journey as smooth as possible. Simply message or call us to book your instant airport transfer today!</p>

                    <a class="btn-airport_transfer" href="#">Booking Now</a>
            </div>
            <div class="col-md-6">
                <img style="width:100%;border-radius:2%;" src="{{ asset('images/marrakech-airport-to-marrakech-city-private-transfer-details.jpg') }}" alt=""
                srcset="">
            </div>
        </div>
    </div>
@endsection