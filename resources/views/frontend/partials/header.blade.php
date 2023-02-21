<div class="row top-menu">
    <div class="gtco-container">
        <div class="col-md-12 text-right gtco-contact">
            <ul class="contacts">
                <li> <a href="tel:#" title="Call Us"><img src="{{ asset('images/phone.svg') }}" alt="call us" /></a>
                </li>
                {{-- <li><a href="#" target = "_blank" title="Our Facebook page" ><img src="{{asset('images/facebook.svg')}}" alt="Facebook"/></a></li> --}}
                <li> <a href="#" title="Send a Message on whattsapp"><img src="{{ asset('images/whatsapp.svg') }}"
                            alt="whatsapp" /></a></li>
            </ul>
            {{-- <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle headerlanguages" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" title="English">
                    English <img src="https://www.allomycab.ma/images/en.svg" alt="contenten-lang-title"><span
                        class="glyphicon glyphicon-chevron-down"></span></button>
                <ul class="dropdown-menu languages">
                    <li class="active"><a href="https://www.allomycab.ma/en" title="English"><img
                                src="https://www.allomycab.ma/images/en.svg" alt="english" /> English</a></li>
                    <li class=""><a href="https://www.allomycab.ma/fr" title="Français"><img
                                src="https://www.allomycab.ma/images/fr.svg" alt="français" /> Français</a>
                    </li>
                    <li class=""><a href="https://www.allomycab.ma/es" title="Español"><img
                                src="https://www.allomycab.ma/images/es.svg" alt="español" /> Español</a>
                    </li>
                    <li class=""><a href="https://www.allomycab.ma/ar" title="العربية"><img
                                src="https://www.allomycab.ma/images/ar.svg" alt="العربية" /> العربية</a>
                    </li>
                    <li class=""><a href="https://www.allomycab.ma/ch" title="Français"><img
                                src="https://www.allomycab.ma/images/ch.svg" alt="chineese" /> 中文</a></li>
                    <li class=""><a href="https://www.allomycab.ma/ru" title="руссий"><img
                                src="https://www.allomycab.ma/images/ru.svg" alt="русский" /> руссий</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
<nav id="gtco-nav" class="gtco-nav" role="navigation">
    <div class="gtco-container">
        <!-- logo -->
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><button type="button" title="Accueil &amp; réservation"><img
                            src="{{ asset('images/gallery/new/logo.png') }}"
                            srcset="{{ asset('images/gallery/new/logo.png') }}" /> Private driver</button>
                </div>
            </div>
            <!-- menu -->
            <div class="col-xs-8 text-right menu-1">
                <ul class="main-menu">
                    <li class="active"><a href="{{route('landing_page')}}" title="Bookings" alt="Bookings">Bookings</a></li>
                    <li class="  has-dropdown">
                        <a href="#0" title="Services" alt="Services">Services</a>
                        <ul class="dropdown">
                            <li class=""><a href="{{route('airport_transfer')}}" title="Airport transfer in Morocco"
                                    alt="Airport transfer in Morocco">
                                    Airport transfer in Morocco</a></li>
                            <li class=""><a href="{{route('Business_travel')}}" title="Business Travel" alt="Business Travel">Business Travel
                                </a> </li>
                            <li class=""><a href="{{route('driver_services')}}" title="Rent a Driver Services" alt="Rent a Driver Services">Rent a Driver Services </a>
                            </li>
                            <li>
                                <a href="#" title="Desert Safari Tours" alt="Desert Safari Tours">Desert Safari Tours</a>
                            </li>

                            <li class=""><a href="#" title="Wedding cars with driver in Morocco"
                                    alt="Wedding cars with driver in Morocco"> Wedding cars with driver in Morocco  </a> </li>
                        </ul>
                    </li>
                    {{-- <li class=""><a href="#" title="Cars" alt="Cars">Cars</a></li> --}}
                   
                    <li class=""><a href="#" title="premium service" alt="premium service">Premium service</a></li>
                    <li class=""><a href="#" title="Gallery" alt="Gallery">Gallery</a></li>
                    <li class=""><a href="#" title="Prices" alt="Prices">Prices</a></li>
                    <li class=""><a href="{{route('contact')}}" title="Contact" alt="Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<a href="#" class="whatsapp-but" title="Send a Message on whattsapp"><img
        src="{{ asset('images/whatsapp.svg') }}" width="50" height="50" alt="whatsapp" /></a>
