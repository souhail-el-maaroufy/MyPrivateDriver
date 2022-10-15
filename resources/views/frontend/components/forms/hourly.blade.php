<form autocomplete="off" id="hourly_form" class="form-horizontal main-form" method="post"
    action="{{ route('reservation_details') }}">
    @csrf
    {{-- <input type="hidden" name="_token"
    value="p63clH24k5PzPfhezuVCrCH64KgVXaWRC0MsiBXd"> --}}
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
                departure (Morocco) :&nbsp; <i class="ti-calendar"></i>&nbsp;<i class="ti-timer"></i>
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
                    src="https://www.allomycab.ma/images/arrow-select.svg"></button>


            <ul class="dropdown-menu">
                
                <li class="dropdown-header">Economy</li>
                @foreach ($cars as $car)
                {{-- <li class="car">
                    <a id="my_car" carid="{{ $car->id }}" title="{{ $car->name }}" gallery_type="hourly"
                        personnes="{{ $car->personne }}"
                        bags="{{ $car->bags }}"
                        carcode="{{ asset('storage/2022/10/09/fef798bc914b3dcd06bebe6e04c794c435b8d687.png') }}"
                        hour_rate="{{ $car->houe_rate }}" carname="{{ $car->name }}">

                        @php
                            $car_img = $car->attachment()->get();
                        @endphp
                        <img src="{{ asset('storage/public/2022/10/09/fef798bc914b3dcd06bebe6e04c794c435b8d687.png') }}"
                            width="80" alt="{{ $car->name }}" />
                        <span> {{$car->name}} </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg">x{{$car->personne}}<span>
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg">x{{$car->bags}}<span>
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg"></div>
                        </div>
                    </a>
                </li> --}}

                <li class="car">
                    <a id="my_car" title="{{ $car->name }}" gallery_type="hourly" carid="{{ $car->id }}" personnes="{{ $car->personne }}"
                         bags="{{ $car->bags }}" carcode="h1" hour_rate="{{ $car->houe_rate }}" carname="{{ $car->name }}">
                        <img src="{{ asset('storage/public/2022/10/09/fef798bc914b3dcd06bebe6e04c794c435b8d687.png') }}" width="80" alt="{{ $car->name }}" />
                        <span> {{ $car->name }} </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x{{ $car->personne }}
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x{{ $car->bags }}
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
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
                </li>
                <li class="car">
                    <a id="my_car" title="Van: Renault trafic" gallery_type="hourly" carid="15"
                        personnes="8" bags="10" carcode="rt" hour_rate="12" carname="Van: Renault trafic">
                        <img src="https://www.allomycab.ma/images/car_rt.jpg" width="80"
                            alt="Van: Renault trafic" />
                        <span> Van: Renault trafic </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x8
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x10
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="dropdown-header">Comfort</li>
                <li class="car">
                    <a id="my_car" title="Mercedes class V" gallery_type="hourly" carid="10" personnes="6"
                        bags="8" carcode="mv" hour_rate="14" carname="Mercedes class V">
                        <img src="https://www.allomycab.ma/images/car_mv.jpg" width="80"
                            alt="Mercedes class V" />
                        <span> Mercedes class V </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x6
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x8
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car" title="Mercedes Sprinter" gallery_type="hourly" carid="18" personnes="17"
                        bags="20" carcode="ms17" hour_rate="20" carname="Mercedes Sprinter">
                        <img src="https://www.allomycab.ma/images/car_ms17.jpg" width="80"
                            alt="Mercedes Sprinter" />
                        <span> Mercedes Sprinter </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x17
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x20
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car" title="Mercedes Classe E" gallery_type="hourly" carid="9" personnes="3"
                        bags="3" carcode="me" hour_rate="20" carname="Mercedes Classe E">
                        <img src="https://www.allomycab.ma/images/car_me.jpg" width="80"
                            alt="Mercedes Classe E" />
                        <span> Mercedes Classe E </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x3
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x3
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="dropdown-header">Premium</li>
                <li class="car">
                    <a id="my_car" title="Range Rover Sport" gallery_type="hourly" carid="8" personnes="4"
                        bags="6" carcode="rs" hour_rate="25" carname="Range Rover Sport">
                        <img src="https://www.allomycab.ma/images/car_rs.jpg" width="80"
                            alt="Range Rover Sport" />
                        <span> Range Rover Sport </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x4
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x6
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car" title="Range Rover Vogue" gallery_type="hourly" carid="7" personnes="4"
                        bags="6" carcode="rv" hour_rate="28" carname="Range Rover Vogue">
                        <img src="https://www.allomycab.ma/images/car_rv.jpg" width="80"
                            alt="Range Rover Vogue" />
                        <span> Range Rover Vogue </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x4
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x6
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/wifi.svg">
                            </div>
                        </div>
                    </a>
                </li>
                <li class="car">
                    <a id="my_car" title="Mercedes Classe S" gallery_type="hourly" carid="6" personnes="3"
                        bags="4" carcode="ms" hour_rate="35" carname="Mercedes Classe S">
                        <img src="https://www.allomycab.ma/images/car_ms.jpg" width="80"
                            alt="Mercedes Classe S" />
                        <span> Mercedes Classe S </span>
                        <div style="float:right; padding: 1.5% 1%;">
                            <div class="car-details"><img src="https://www.allomycab.ma/images/men.svg"><span>x3
                                </span></div>
                            <div class="car-details"><img src="https://www.allomycab.ma/images/laguage.svg"><span>x4
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
