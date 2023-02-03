<form autocomplete="off" id="hourly_form" class="form-horizontal main-form" method="post"
    action="{{ route('reservation_details') }}">
    @csrf
    <input type="hidden" name="depart_latlng" value="0">
    <input type="hidden" name="destination_latlng" value="0">
    <input type="hidden" name="type" value="PER_HOUR">
    <input type="hidden" name="date_reservation" class="date_reservation">
    <fieldset>
        <div class="time-choices col-md-12">
            <div class="choice later active">Later</div>
            <div class="choice now" data-now="now">Now</div>
        </div>
        <!-- Reservation Date Picker -->
        <div class="form-group col-md-12 date-res infos">

            <label class='date_hours' for="">Date & Hour of
                departure (Morocco) :&nbsp; <i class="fa-regular fa-calendar"></i>&nbsp;<i style="margin-right: 4px;" class="fa-solid fa-clock"></i>
                <div class="am-pm"></div>
            </label>

            <div class="infos-but" style="">?</div>

            <label id="infos" class="date_hours" style="">Per-day availability rates apply to service
                within a single city or within a radius not exceeding 40 km.
                Otherwise, the price of fuel and motorway tickets will be
                paid by the customer.</label>

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
        <div class="form-group col-md-12 car-gallery">
            <div id="gall" class="popup-gallery"></div>
            <div id="selected_cars" class="my_selected_cars"></div>
        </div>

        <div class="form-group col-md-12 cars">
            <input type="hidden" class="car_model" name="car_model" value="0" personnes="" bags=""
                carcode="" carname="" price="0" />
            <button id="choose_car_hourly" type="button" class="hourly_form btn btn-default dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="">
                <span class="car_chosen_title">You have chosen : </span>
                <span class="car_chosen" style="color:#334e86;">Choose
                    your car</span>
                <img class="select_arrows" alt="select arrows"
                    src="{{asset('images/arrow-select.svg')}}"></button>


            <ul class="dropdown-menu">

                <li class="dropdown-header">Economy</li>
                @foreach ($cars as $car)
                    @php
                        $car_img = $car->attachment()->first()->name;
                        $car_path = $car->attachment()->first()->path;
                        $car_exten = $car->attachment()->first()->extension;
                        
                    @endphp
                    <li class="car">
                        <a id="my_car" carid="{{ $car->id }}" title="{{ $car->name }}"
                            gallery_type="hourly" personnes="{{ $car->personne }}" bags="{{ $car->bags }}"
                            carcode="{{ asset('storage/'.$car_path.$car_img.'.'.$car_exten) }}"
                            hour_rate="{{ $car->houe_rate }}" carname="{{ $car->name }}">

                            <img src="{{ asset('storage/'.$car_path.$car_img.'.'.$car_exten) }}"
                                width="80" alt="{{ $car->name }}" />
                            <span> {{ $car->name }} </span>
                            <div style="float:right; padding: 1.5% 1%;">
                                <div class="car-details"><img
                                        src="{{asset('images/men.svg')}}">x{{ $car->personne }}<span>
                                    </span></div>
                                <div class="car-details"><img
                                        src="{{asset('images/laguage.svg')}}">x{{ $car->bags }}<span>
                                    </span></div>
                                <div class="car-details"><img src="{{asset('images/wifi.svg')}}"></div>
                            </div>
                        </a>
                    </li>
                @endforeach

                {{-- <li class="car">
                    <a id="my_car" title="Van: Ssangyoung" gallery_type="hourly" carid="16" personnes="6"
                        bags="7" carcode="sy" hour_rate="12" carname="Van: Ssangyoung">
                        <img src="https://www.allomycab.ma/images/car_sy.jpg" width="80" alt="Van: Ssangyoung" />
                        <span> Van: Ssangyoung </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x6
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x7
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li> --}}

            </ul>

        </div>

        <div class="form-group col-md-12">
            <select name="estimated_cars" class="form-control estimated_cars">
                <option selected value="0">How many cars do you need
                </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <select name="estimated_days" class="form-control estimated_days">
                <option selected value="0">How many days</option>
                <option value="0.5">0.5 ( 5 hours of service / half day
                    )</option>
                <option value="1">1 ( 10 hours of service / day )
                </option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <select name="estimated_persons" class="form-control estimated_persons">
                <option value="0">Number of persons</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
        </div>

        <input type="hidden" class="data" name="data" value="0" />
        {{-- <div class="form-group col-md-12 next" form="hourly_form">
        <div id="errors_form_hourly" class="form-error-msg"></div>
        
    </div> --}}
        <button type="submit" class="btn btn-success btn-submit">Reservation&nbsp;&nbsp;</button>
    </fieldset>
</form>
