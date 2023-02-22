@extends('layouts.frontend')

@section('content')
<div class="title_page" style="background-image: url({{asset('images/marrakesh-menara-airport_1.jpg')}});">  
    <h1>DRIVER SERVICES</h1>
    <p>Our experienced drivers will take care of all your transportation needs, allowing you to sit back, relax, and focus on what matters most.</p>
</div>
<div class="row Business_travel">
    <div class="container">
       <h3 class="text-center" style="margin-top: 18px">
        At Marrakech Cabs, we understand that finding a reliable and experienced driver can be a challenge, especially when you have specific requirements. 
        That's why we offer a dedicated Rent a Driver Service that provides you with the right driver for your personal or official vehicle, whether you need a driver for a few hours or round-the-clock service.
       </h3>
    </div>
</div>
<div class="row driver_services_img">
    <div class="container">
        <img style="width:100%;border-radius:2%;" src="{{ asset('images/new-section-1-luxury-transportation-min-2.jpg') }}" alt=""
        srcset="">
    </div>
</div>
<div class="row Business_travel_text">
    <div class="container">
       <div class="col-md-12" style=" background-color: #f4f4f4;">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12  text-center gtco-heading animate-box-off">
                        <h1><span class="title_span">RENT A DRIVER</span> SERVICES</h1>
                    </div>
                </div>
                {{-- <h1>RENT A DRIVER SERVICES</h1> --}}
                <p>All of our drivers are experienced and undergo regular training in driving etiquettes and safe practices to ensure that our customers receive the best possible service. Our drivers have provided chauffeur services to premium clients, government organizations, and international guests. <br><br>
                    Our service provides a single point or multipoint pickup and drop-off for your company staff. We are known for our prompt service and commitment to ensuring operational excellence for your company. <br><br>
                    All of our drivers strictly follow traffic rules and exhibit good driving skills to give you peace of mind. Whether you need a driver for personal or business use, we have the right drivers to meet your needs. <br><br>
                    Please contact us to learn more about our Rent a Driver Service and how we can assist you with your transportation needs in Marrakech. We look forward to serving you.</p>
                    <a href="" class="btn-Business_travel">Booking Now</a>
            </div>
            <div class="col-md-5">
                <h3 style="margin-top: 80px">Our exclusive Rent a Driver Service is most suitable for:</h3>
                <ul style="margin-top: 80px">
                    <li>Star Hotels with their own fleet but no adequate drivers</li>
                    <li>Corporate Executives or Business Figures with a very busy schedule</li>
                    <li>Homemakers looking for a safe and reliable transportation option for shopping, meeting family and friends</li>
                    <li>Parents looking for safe School Transportation for their children</li>
                </ul>
                <h3 style="margin-top: 80px">Transportation Service Providers looking to meet additional requirements</h3>
            </div> 
        </div>
       </div>
    </div>
</div>
@endsection