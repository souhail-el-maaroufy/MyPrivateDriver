<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Private driver in Marrakech, Casablanca, morocco airport transfers</title>
    <meta name="description"
        content="Book your Private driver in morocco airport transfer Marrakech &amp; casablanca &amp; your trips everywhere in morocco, its Simpleand fast" />
    <meta name="keywords"
        content="Private driver, rcd, mercedes class, a luxury car with driver, Marrakech, Morocco, airport, trainstation, guide driver in Marrakech" />
    <meta http-equiv="Expires" content="1">
    <!--share settings-->
    <meta property="og:title" content="Private driver in Marrakech, Casablanca, morocco airport transfers">
    <meta property="og:image" content="{{asset('images/private_driver.png')}}">
    <meta property="og:description"
        content="Book your Private driver in morocco airport transfer Marrakech &amp; casablanca &amp; your trips everywhere in morocco, its Simpleand fast">
    <META PROPERTY="OG:URL" content="https://privatedriver.ma/">
    <meta property="og:type" content="website" />
    <meta property="og:author" content="Private Driver" />
    <!--share twitter settings-->
    <meta name="twitter:title" content="Private driver in Marrakech, Casablanca, morocco airport transfers">
    <meta name="twitter:description"
        content="Book your Private driver in morocco airport transfer Marrakech &amp; casablanca &amp; your trips everywhere in morocco, its Simpleand fast">
    <meta name="twitter:site" content="https://privatedriver.ma/">
    <meta name="twitter:image" content="{{asset('images/private_driver.png')}}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="the-code.info" />
    <link rel="icon" href="{{ asset('images/favicon.png') }}" defer />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" defer>
    {{-- <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}" defer> --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" >


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}" defer></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.countTo.js') }}" defer></script>
    <script src="{{ asset('js/moment.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('back/plugins/daterangepicker/daterangepicker.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('back/plugins/daterangepicker/daterangepicker.css') }}" />
    {{-- <link rel="canonical" href="https://www.allomycab.ma/en" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="page">
        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')

    </div>


    <script>
        var cost_per_km = "3";
        var min_cost = "30";
        var FORM_ERROR = "Please complete all required fields";
        var INCORRECT_ADD = "Adresses invalides, veuillez vérifier! ";
        var PROCESSING_MSG = "Demand in progress, please wait... ";
        var geocode_disabled =
            "Sorry We cannot get your position : please enable the geolocalisation on your device or simply try to write your adresse or the nearest place to you ";
        var you_have_chosen = "You have chosen : ";
        var assest = "https://www.allomycab.ma/";
        var vehiculetype0 = "Premium";
        var vehiculetype3 = "Comfort";
        var vehiculetype6 = "Economy";
        var text_duration = "Duration : ";
        var text_distance = "Distance : ";
        var vehicule_choice = "Please choose your vehicle ";
        var ALLER = "Go price ";
        var RETOUR = "Return Price ";
        var PRIXATTENTE = "Accompagnement price ";
        var NOMBREHEURES = "Number of hours ";
        var PRIXPARHEURE = "Price per hour ";
        var PRIXTOTAL = "Total Price ";
        var lang = "en";
        var RECAPTITLE = "Show Summary : ";
        var PERSONALHEAD = "Reservation ";
        var isParis = true;
        var FUEL = 0.05;

        // var SESSIONACTIVE = "";
    </script>
    <div class="gototop js-top"><a href="#" class="js-gotop" title="Return to the top of the page"><i
                class="icon-arrow-up"></i></a></div>
    <script src="{{ asset('js/magnific-popup-options.js') }}" defer></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtjCvysmjGGyqPhy6uARmErczhpm2btc0&libraries=places,geometry&region=MA"
        defer></script>
    <script src="{{ asset('js/datepicker-en.js') }}" defer></script>
    <script src="{{ asset('js/gallery.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
