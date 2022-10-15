<form autocomplete="off" id="simple_form" class="form-horizontal main-form" method="post"
    action="{{ route('reservation_details') }}">
    @csrf
    {{-- <input type="hidden" name="_token"
    value="p63clH24k5PzPfhezuVCrCH64KgVXaWRC0MsiBXd"> --}}
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
                departure (Morocco) :&nbsp; <i class="ti-calendar"></i>&nbsp;<i class="ti-timer"></i>
                <div class="am-pm"></div>
            </label>

        </div>
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
                <img class="select_arrows" alt="select arrows"
                    src="https://www.allomycab.ma/images/arrow-select.svg"></button>

            <ul class="dropdown-menu">

                <li class="dropdown-header">Economy</li>

                @foreach ($cars as $car)
                    <li class="car">
                        <a id="my_car_{{ $car->id }}" carid="{{ $car->id }}" title="{{ $car->name }}" gallery_type="simple"
                            personnes="{{ $car->personne }}" price_airport="{{ $car->price_airport }}"
                            bags="{{ $car->bags }}"
                            carcode="{{ asset('storage/2022/10/09/fef798bc914b3dcd06bebe6e04c794c435b8d687.png') }}"
                            price_min="{{ $car->price_min }}" order="2" price_day="{{ $car->price_day }}"
                            price_half="{{ $car->price_half }}" price_km="{{ $car->price_km }}"
                            hour_rate="{{ $car->houe_rate }}" available="1" carname="{{ $car->name }}">

                            @php
                                $car_img = $car->attachment()->get();
                            @endphp
                            <img src="{{ asset('storage/2022/10/09/fef798bc914b3dcd06bebe6e04c794c435b8d687.png') }}"
                                width="80" alt="Van: Hyundai-H1" />
                            <span> </span>
                            <div style="float:right; padding: 1.5% 1%;">
                                <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>
                                    </span></div>
                                <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>
                                    </span></div>
                                <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>
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
                </li>
                <li class="car">
                    <a id="my_car_12" title="Mercedes Sprinter" gallery_type="simple" carid="12" personnes="17"
                        price_airport="60" bags="20" carcode="ms17" price_min="60" order="9"
                        price_day="199" price_half="120" price_km="1.8" hour_rate="20" available="1"
                        carname="Mercedes Sprinter">
                        <img src="https://www.allomycab.ma/images/car_ms17.jpg" width="80"
                            alt="Mercedes Sprinter" />
                        <span> Mercedes Sprinter </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x17
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x20
                                </span></div>
                            <!-- <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>-->
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car_4" title="Mercedes E class" gallery_type="simple" carid="4" personnes="3"
                        price_airport="50" bags="3" carcode="me" price_min="50" order="10"
                        price_day="199" price_half="150" price_km="1.8" hour_rate="20" available="1"
                        carname="Mercedes E class">
                        <img src="https://www.allomycab.ma/images/car_me.jpg" width="80"
                            alt="Mercedes E class" />
                        <span> Mercedes E class </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x3
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x3
                                </span></div>
                            <!-- <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>-->
                        </div>
                    </a>
                </li>
                <li class="dropdown-header">Premium</li>
                <li class="car">
                    <a id="my_car_3" title="Range Rover Sport" gallery_type="simple" carid="3" personnes="4"
                        price_airport="80" bags="6" carcode="rs" price_min="80" order="20"
                        price_day="250" price_half="180" price_km="2" hour_rate="25" available="1"
                        carname="Range Rover Sport">
                        <img src="https://www.allomycab.ma/images/car_rs.jpg" width="80"
                            alt="Range Rover Sport" />
                        <span> Range Rover Sport </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x4
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x6
                                </span></div>
                            <!-- <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>-->
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car_2" title="Range Rover Vogue" gallery_type="simple" carid="2" personnes="4"
                        price_airport="110" bags="6" carcode="rv" price_min="110" order="30"
                        price_day="390" price_half="270" price_km="2.3" hour_rate="30" available="1"
                        carname="Range Rover Vogue">
                        <img src="https://www.allomycab.ma/images/car_rv.jpg" width="80"
                            alt="Range Rover Vogue" />
                        <span> Range Rover Vogue </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x4
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x6
                                </span></div>
                            <!-- <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>-->
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car_1" title="Mercedes S Class" gallery_type="simple" carid="1" personnes="3"
                        price_airport="135" bags="4" carcode="ms" price_min="135" order="40"
                        price_day="450" price_half="300" price_km="2.7" hour_rate="35" available="1"
                        carname="Mercedes S Class">
                        <img src="https://www.allomycab.ma/images/car_ms.jpg" width="80"
                            alt="Mercedes S Class" />
                        <span> Mercedes S Class </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x3
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x4
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
                    src="https://www.allomycab.ma/images/localize.svg" alt="geolocalisation" /></a>
        </div>
        <div class="form-group col-md-12">
            <input style="width:88%; float:left;" required autocomplete="off" type="text"
                class="form-control arriveeSelector destination" placeholder="Destination : adress, hotel, airport..."
                name="destination" id="destination">
            <a href="" class="geolocalize-me" title="My location" id="geo_destination"><img
                    src="https://www.allomycab.ma/images/localize.svg" alt="geolocalisation" /></a>
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
