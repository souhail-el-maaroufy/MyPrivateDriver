<form autocomplete="off" id="simple_form" class="form-horizontal main-form" method="post"
    action="{{ route('reservation_details') }}">
    @csrf
    <input type="hidden" name="depart_latlng" value="0">
    <input type="hidden" name="destination_latlng" value="0">
    <input type="hidden" name="type" value="SIMPLE">
    <input type="hidden" class="is_airport" name="is_airport" value="0">
    <input type="hidden" name="date_reservation" class="date_reservation" value="">
    <fieldset>
        <div class="time-choices col-md-12">
            <div class="choice later active">Later</div>
            <div class="choice now" data-now="now">Now</div>
        </div>
        <!-- Reservation Date Picker -->
        <div class="form-group col-md-12 date-res">
            <label class='date_hours' for="">Date & Hour of
                departure (Morocco) :&nbsp; <i class="fa-regular fa-calendar"></i>&nbsp;<i style="margin-right: 4px;"
                    class="fa-solid fa-clock"></i>
                <div class="am-pm"> </div>
            </label>

        </div>
        <div class="date-res">
            <div class="col-md-7 form-group">
                <div class="reportrange pull-right  form-control">
                    <i class="fa-regular fa-calendar"></i>&nbsp;
                    <span></span> <b class="caret"></b>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group"><i class="fa-solid fa-clock"></i>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">

                    <select name="hours" class="form-control hours">
                        <option value="0"> 00</option>
                        <option value="1"> 01</option>
                        <option value="2"> 02</option>
                        <option value="3"> 03</option>
                        <option value="4"> 04</option>
                        <option value="5"> 05</option>
                        <option value="6"> 06</option>
                        <option value="7"> 07</option>
                        <option value="8"> 08</option>
                        <option value="9"> 09</option>
                        <option value="10"> 10</option>
                        <option value="11"> 11</option>
                        <option value="12"> 12</option>
                        <option value="13"> 13</option>
                        <option value="14"> 14</option>
                        <option value="15"> 15</option>
                        <option value="16"> 16</option>
                        <option value="17"> 17</option>
                        <option value="18"> 18</option>
                        <option value="19"> 19</option>
                        <option value="20"> 20</option>
                        <option value="21"> 21</option>
                        <option value="22"> 22</option>
                        <option value="23"> 23</option>

                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">:
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <select name="minutes" class="form-control minutes">
                        <option value="0"> 00</option>
                        <option value="5"> 05</option>
                        <option value="10"> 10</option>
                        <option value="15"> 15</option>
                        <option value="20"> 20</option>
                        <option value="25"> 25</option>
                        <option value="30"> 30</option>
                        <option value="35"> 35</option>
                        <option value="40"> 40</option>
                        <option value="45"> 45</option>
                        <option value="50"> 50</option>
                        <option value="55"> 55</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- End of Reservation Date Picker -->

        <div class="form-group col-md-12 cars" style="display:none;">
            <input type="hidden" class="car_model" name="car_model" value="0" personnes="" bags=""
                carcode="" carname="" price="0" />
            <button id="choose_car_simple" type="button" class="simple_form btn btn-default dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="">
                <span class="car_chosen_title">You have chosen : </span>
                <span class="car_chosen" style="color:#334e86;">Choose
                    your car</span>
                <img class="select_arrows" alt="select arrows" src="{{ asset('images/arrow-select.svg') }}"></button>

            <ul class="dropdown-menu">

                @foreach ($cars as $car)
                   
                        <li class="dropdown-header">{{$car->categories}}</li>

                        @php
                            $car_img = $car->attachment()->first()->name;
                            $car_path = $car->attachment()->first()->path;
                            $car_exten = $car->attachment()->first()->extension;
                            
                        @endphp

                        <li class="car">
                            <a id="my_car_{{ $car->id }}" carid="{{ $car->id }}"
                                title="{{ $car->name }}" gallery_type="simple" personnes="{{ $car->personne }}"
                                price_airport="{{ $car->price_airport }}" bags="{{ $car->bags }}"
                                carcode="{{ asset('storage/' . $car_path . $car_img . '.' . $car_exten) }}"
                                price_min="{{ $car->price_min }}" order="2" price_day="{{ $car->price_day }}"
                                price_half="{{ $car->price_half }}" price_km="{{ $car->price_km }}"
                                hour_rate="{{ $car->houe_rate }}" available="1" carname="{{ $car->name }}">



                                <img src="" width="80" alt="" />
                                <span> </span>
                                <div style="float:right; padding: 1.5% 1%;">
                                    <div class="car-details"><img src="{{ asset('images/men.svg') }}"><span>
                                        </span></div>
                                    <div class="car-details"><img src="{{ asset('images/laguage.svg') }}"><span>
                                        </span></div>
                                    <div class="car-details"><img src="h{{ asset('images/wifi.svg') }}"></div>
                                </div>
                            </a>
                        </li>
                   
                @endforeach

                {{-- <li class="dropdown-header">Comfort</li>
                <li class="car">
                    <a id="my_car_5" title="Mercedes V class" gallery_type="simple" carid="5" personnes="6"
                        price_airport="36" bags="8" carcode="mv" price_min="36" order="5"
                        price_day="139" price_half="90" price_km="1.15" hour_rate="14" available="1"
                        carname="Mercedes V class">
                        <img src="https://www.allomycab.ma/images/car_mv.jpg" width="80"
                            alt="Mercedes V class" />
                        <span> Mercedes V class </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x6
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x8
                                </span></div>
                            <!-- <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>-->
                        </div>
                    </a>
                </li> --}}
            </ul>

        </div>

        <div class="form-group col-md-12">
            <input required autocomplete="off" style="width:88%; float:left;" type="text"
                class="form-control departSelector depart" placeholder="Departure : adress, hotel, airport..."
                name="depart" id="depart">
            <a href="" class="geolocalize-me" title="My location" id="geo_depart"><img
                    src="{{ asset('images/gallery/new/gps_PNG.png') }}" alt="geolocalisation" /></a>
        </div>
        <div class="form-group col-md-12">
            <input style="width:88%; float:left;" required autocomplete="off" type="text"
                class="form-control arriveeSelector destination" placeholder="Destination : adress, hotel, airport..."
                name="destination" id="destination">
            <a href="" class="geolocalize-me" title="My location" id="geo_destination"><img
                    src="{{ asset('images/gallery/new/gps_PNG.png') }}" alt="geolocalisation" /></a>
        </div>

        <div id="cars_prices" class="form-group col-md-12">
            <input type="hidden" class="car_model" name="car_model" value="0" personnes="" price="0"
                bags="" carcode="" carname="" />
            <ul>

            </ul>
        </div>

        <div class="form-group col-md-12 car-gallery">
            <div id="gall" class="popup-gallery"></div>
            <div id="selected_cars" class="my_selected_cars">
            </div>
        </div>

        <input type="hidden" class="data" name="data" value="0" />
        <!--
                                    <div class="form-group col-md-12 two-ways">
                                        <div class="form-error-msg"></div>
                                        <button type="button" class="btn btn-success btn-submit dif">Two ways                                    &nbsp;&nbsp;</button>
                                    </div>
                                            -->

        <div class="twoways-container closelist">
            <div class="form-group col-md-6 switcher go-switch">
                <label class="form-switch">
                    <input type="checkbox" id="twoways" name="twoways" class="twoways">
                    <i></i>
                    Two ways ? <br />
                </label>
            </div>

            <div class="form-group col-md-6 switcher back-switch">
                <label class="form-switch">
                    <input type="checkbox" id="back-switch" name="back-switch" class="twoways">
                    <i></i>
                    Date retour différente ?
                </label>
            </div>

            <div class="form-group col-md-12 waiting-hours closelist">
                <select id="waite-time" name="wait-time" class="form-control" class="waite-time">
                    <option selected value="0"> Waiting hours (
                        Optional )</option>
                    <option value="1"> 1 Hour</option>
                    <option value="2"> 2 Hours</option>
                    <option value="3"> 3 Hours</option>
                    <option value="4"> 4 Hours</option>
                    <option value="5"> 5 Hours</option>
                    <option value="6"> 6 Hours</option>
                    <option value="7"> 7 Hours</option>
                    <option value="8"> 8 Hours</option>
                </select>
            </div>



            <div class="back_date closelist">
                <!-- Reservation Date Picker -->
                <!-- <div class="form-group col-md-12 date-res">
                                    <label class='date_hours' for="">Date & Hour of departure (Morocco) :&nbsp; <i
                                            class="ti-calendar"></i>&nbsp;<i class="ti-timer"></i>  <div class="am-pm"></div></label>
                                        
                                </div> -->
                <!-- <input type="hidden" name="back_date_reservation" class="back_date_reservation" value="">
                                <div class="date-res">
                                
                                    <div class="col-md-7 form-group">
                                        <div class="reportrange pull-right  form-control">
                                            <i class="ti-calendar"></i>&nbsp;
                                            <span></span> <b class="caret"></b>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group"><i class="ti-timer"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                        
                                            <select name="hours" class="form-control hours">
                                                <option value="0"> 00</option>
                                                <option value="1"> 01</option>
                                                <option value="2"> 02</option>
                                                <option value="3"> 03</option>
                                                <option value="4"> 04</option>
                                                <option value="5"> 05</option>
                                                <option value="6"> 06</option>
                                                <option value="7"> 07</option>
                                                <option value="8"> 08</option>
                                                <option value="9"> 09</option>
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                <option value="17"> 17</option>
                                                <option value="18"> 18</option>
                                                <option value="19"> 19</option>
                                                <option value="20"> 20</option>
                                                <option value="21"> 21</option>
                                                <option value="22"> 22</option>
                                                <option value="23"> 23</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">:
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select name="minutes" class="form-control minutes">
                                                <option value="0"> 00</option>
                                                <option value="5"> 05</option>
                                                <option value="10"> 10</option>
                                                <option value="15"> 15</option>
                                                <option value="20"> 20</option>
                                                <option value="25"> 25</option>
                                                <option value="30"> 30</option>
                                                <option value="35"> 35</option>
                                                <option value="40"> 40</option>
                                                <option value="45"> 45</option>
                                                <option value="50"> 50</option>
                                                <option value="55"> 55</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                <!-- End of Reservation Date Picker -->
            </div>
        </div>

        <div class="form-group col-md-12 totales-infos closelist">

        </div>



        <div class="form-group col-md-12 next" form="simple_form">
            <div class="form-error-msg"></div>
            <button type="button" class="btn btn-success btn-submit">Reservation
                &nbsp;&nbsp;</button>
        </div>

    </fieldset>
</form>
