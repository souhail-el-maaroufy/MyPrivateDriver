@extends('platform::dashboard')

@section('title', 'Reservation')
@section('description', 'Reservation Details')

@section('navbar')
    <div class="text-center">
        <a href="{{ route('platform.reservation.list') }}">Back</a>
    </div>
@stop

@section('content')
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
            height: 300px;
            width: 300px;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>
    <div class="my-5 py-2 bg-white">
        <h3 class="text-center mt-5">Reservation</h3>
        <div class="row m-5">
            <div class="col-6 p-2">

                <!-- Slideshow container -->
                <div class="slideshow-container col-10">
                    @foreach ($cars as $car)
                        <h4 class="text-center">{{ $car->name }}</h4>

                        @php
                            $count = count($car->attachment()->get());
                            $i = 1;
                        @endphp
                        @foreach ($car->attachment()->get() as $item)
                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <div class="numbertext">{{ $i++ }} / {{ $count }}</div>
                                <img src="{{ asset('storage/' . $item->path . $item->name . '.' . $item->extension) }}" style="margin-left: 24px;">
                            </div>
                        @endforeach
                    @endforeach

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    @for ($i = 0; $i < $count; $i++)
                        <span class="dot" onclick="currentSlide({{ $i }})"></span>
                    @endfor
                </div>

            </div>
            @if ($reservation_details->type == "SIMPLE")
            <div class="col p-2">
                {{-- <h5 for="">Name car :{{ $car->name }}</h5> --}}
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Type : </label><span
                    style="font-size: 16px;fondt-width:200;" class="text-center">{{ $reservation_details->type }}</span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Depart : </label><span
                    style="font-size: 16px;fondt-width:200;"
                    class="text-center">{{ $reservation_details->depart }}</span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Destination : </label><span
                    style="font-size: 16px;fondt-width:200;"
                    class="text-center">{{ $reservation_details->destination }}</span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Date reservation : </label><span
                    style="font-size: 16px;fondt-width:200;"
                    class="text-center">{{ $reservation_details->date_reservation }}</span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Time reservation : </label><span
                    style="font-size: 16px;fondt-width:200;"
                    class="text-center">{{ $reservation_details->hours . ' h ' . $reservation_details->minutes . ' min' }}</span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Distance : </label><span
                    style="font-size: 16px;fondt-width:200;" class="text-center">{{ $data->distance }} KM </span>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Duration : </label><span
                    style="font-size: 16px;fondt-width:200;" class="text-center">{{ $data->duration }} </span><br>
                <label style="font-size: 16px;fondt-width:200;" class="m-3">Price : </label><span
                    style="font-size: 16px;fondt-width:200;" class="text-center"> $ {{ $data->estimated_price }} </span>

            </div>
            @endif
        </div>
        <div class="row m-5">
            <h3 class="text-center">Customer information</h3>
            <div class="col-7 p-2">

                @foreach ($reservations as $reservation)
                    <label style="font-size: 16px;fondt-width:200;" class="m-3"> Full name client : </label><span
                        style="font-size: 16px;fondt-width:200;"
                        class="text-center">{{ $reservation->full_name }}</span><br>
                    <label style="font-size: 16px;fondt-width:200;" class="m-3"> Email client : </label><span
                        style="font-size: 16px;fondt-width:200;" class="text-center">{{ $reservation->email }}</span><br>
                    <label style="font-size: 16px;fondt-width:200;" class="m-3">Number phone client : </label><span
                        style="font-size: 16px;fondt-width:200;" class="text-center">{{ $reservation->phone }}</span><br>
                    <label style="font-size: 16px;fondt-width:200;" class="m-3">Details client : </label><span
                        style="font-size: 16px;fondt-width:200;" class="text-center">{{ $reservation->details }}</span><br>
                @endforeach
            </div>
            <div class="col p-2">
                @foreach ($reservations as $reservation)
                    <label style="font-size: 16px;fondt-width:200;" class="m-3">Created_at : </label><span
                        style="font-size: 16px;fondt-width:200;"
                        class="text-center">{{ $reservation->created_at }}</span><br>
                @endforeach
               @if ($reservation_details->type == "PER_HOUR")
               <label style="font-size: 16px;fondt-width:200;" class="m-3">Estimated cars : </label><span
               style="font-size: 16px;fondt-width:200;"
               class="text-center">{{ $reservation_details->estimated_cars }}</span><br>
           <label style="font-size: 16px;fondt-width:200;" class="m-3">Estimated days : </label><span
               style="font-size: 16px;fondt-width:200;"
               class="text-center">{{ $reservation_details->estimated_days }}</span><br>
           <label style="font-size: 16px;fondt-width:200;" class="m-3">Estimated personnes : </label><span
               style="font-size: 16px;fondt-width:200;"
               class="text-center">{{ $reservation_details->estimated_persons }}</span><br>
               @endif
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

@stop
