@extends('layouts.frontend')

@section('content')
<div class="title_page" style="background-image: url({{asset('images/chauffeur-service-switzerland-2.jpg')}});">  
    <h1> BUSINESS TRAVEL</h1>
    <p>Our experienced team will handle all aspects of your business trip with a focus on comfort and reliability to allow you to focus on your business.</p>
</div>
<div class="row Business_travel">
    <div class="container">
       <h3 class="text-center">
        At Marrakech Cabs, we provide a comprehensive range of corporate transport services to meet the needs of our clients in Marrakech and beyond. 
        With years of experience serving the local business community, we pride ourselves on being a leader in Business Chauffeur Services in Marrakech.
       </h3>
    </div>
</div>
<div class="row Business_travel_img">
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
                        <h1><span class="title_span">CORPORATE</span> BUSINESS TRAVEL</h1>
                    </div>
                </div>
                <p>Our experienced drivers and well-maintained fleet ensure that our clients travel in comfort and style. Whether you need airport transfers, transportation for business meetings, or team outings, we have the right vehicles and chauffeurs to cater to your specific needs. <br><br>
                    We also offer customized packages that can be tailored to suit your specific requirements. Additionally, our team of dedicated account managers is available 24/7 to provide support and ensure that you receive the best service possible. <br><br>
                    Please feel free to contact us to learn more about our services and how we can assist your organization with your corporate transport needs. We look forward to serving you.</p>
                    <a href="" class="btn-Business_travel">Booking Now</a>
            </div>
            <div class="col-md-5">
                <h3>Our services include:</h3>
                <ul>
                    <li>Airport Pick-up and Drop-off for Corporate Guests</li>
                    <li>Shuttle Services for Employees</li>
                    <li>Transportation Solutions for Business Meetings and Corporate Events</li>
                    <li>Team Outing Transport Services</li>
                    <li>Dedicated Vehicles for Administrative Departments</li>
                    <li>Rent a Business Chauffeur Services</li>
                    <li>Company Messenger Services</li>
                    <li>Delivery Services to Customer Locations</li>
                    <li>Our corporate clients receive a range of value-added services, including</li>
                    <li>Dedicated Account Manager</li>
                    <li>Complimentary Wi-Fi, Bottled Water, and Newspapers on Request</li>
                    <li>Last-Minute Booking Options</li>
                    <li>Executive Vehicle Models</li>
                    <li>Competitive Pricing</li>
                    <li>Flexible Payment Options</li>
                </ul>
            </div> 
        </div>
       </div>
    </div>
</div>
@endsection