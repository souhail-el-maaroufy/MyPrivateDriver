@extends('layouts.frontend')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
        style="background-image:url({{asset('images/img_bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row flexit">
                <div class="booking-form">
                    <div class="row">
                        <h2 class="text-center" style="color:#bf9c60;"> Reservation</h2>

                        <form autocomplete="off" id="simple_form" method="post" action="{{ route('reservation') }}">
                            @csrf
                            @if ($reservation->type == "SIMPLE")

                            <div class="col-md-5">
                                <div style="margin-top:10px;">
                                    <div class="form-reservation" style="text-align: center;">

                                        @php
                                            $car_img = $car->attachment()->first()->name;
                                            $car_path = $car->attachment()->first()->path;
                                            $car_exten = $car->attachment()->first()->extension;
                                            
                                        @endphp
                                                <a id="my_car" carid="{{ $car->id }}" title="{{ $car->name }}"
                                                    gallery_type="hourly" personnes="{{ $car->personne }}"
                                                    bags="{{ $car->bags }}"
                                                    carcode="{{ asset('storage/' . $car_path . $car_img . '.' . $car_exten) }}"
                                                    hour_rate="{{ $car->houe_rate }}" carname="{{ $car->name }}">

                                                    <img src="{{ asset('storage/' . $car_path . $car_img . '.' . $car_exten) }}"
                                                        width="80" alt="{{ $car->name }}" />
                                                    <span> {{ $car->name }} </span>
                                                    <div style="padding: 1.5% 1%;">
                                                        <div class="car-details"><img
                                                                src="{{ asset('images/men.svg') }}">x{{ $car->personne }}<span>
                                                            </span></div>
                                                        <div class="car-details"><img
                                                                src="{{ asset('images/laguage.svg') }}">x{{ $car->bags }}<span>
                                                            </span></div>
                                                        <div class="car-details"><img src="{{ asset('images/wifi.svg') }}">
                                                        </div>
                                                    </div>
                                                </a>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-arrows-left-right"></i> <label>Total Price :</label>
                                        <label>{{$reservation_data->estimated_price}} euros / 
                                            {{$reservation_data->estimated_price*$reservation_data->rate_usd}} USD / 
                                            {{$reservation_data->estimated_price*$reservation_data->rate_mad}} MAD</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-clock"></i> <label>Duration :</label>
                                        <label>{{$reservation_data->duration}}</label><br>
                                        <i class="fa-solid fa-arrows-left-right"></i> <label>Distance :</label>
                                        <label>{{$reservation_data->distance}} km</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-location-dot"></i> <label> Departure address : </label>
                                        <label>{{ $reservation->depart }}</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-location-dot"></i> <label> First Destination adress : </label>
                                        <label>{{ $reservation->destination }}</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-clock"></i> <label>Time and date of departure : </label>
                                        <label>{{ $reservation->created_at }}</label>
                                    </div>
                                </div>
                            </div>
                                
                            @else
                            <div class="col-md-5">
                                <div style="margin-top:10px;">
                                    <div class="form-reservation" style="text-align: center;">

                                        @php
                                            $car_img = $car->attachment()->first()->name;
                                            $car_path = $car->attachment()->first()->path;
                                            $car_exten = $car->attachment()->first()->extension;
                                            
                                        @endphp
                                                <a id="my_car" carid="{{ $car->id }}" title="{{ $car->name }}"
                                                    gallery_type="hourly" personnes="{{ $car->personne }}"
                                                    bags="{{ $car->bags }}"
                                                    carcode="{{ asset('storage/' . $car_path . $car_img . '.' . $car_exten) }}"
                                                    hour_rate="{{ $car->houe_rate }}" carname="{{ $car->name }}">

                                                    <img src="{{ asset('storage/' . $car_path . $car_img . '.' . $car_exten) }}"
                                                        width="80" alt="{{ $car->name }}" />
                                                    <span> {{ $car->name }} </span>
                                                    <div style="padding: 1.5% 1%;">
                                                        <div class="car-details"><img
                                                                src="{{ asset('images/men.svg') }}">x{{ $car->personne }}<span>
                                                            </span></div>
                                                        <div class="car-details"><img
                                                                src="{{ asset('images/laguage.svg') }}">x{{ $car->bags }}<span>
                                                            </span></div>
                                                        <div class="car-details"><img src="{{ asset('images/wifi.svg') }}">
                                                        </div>
                                                    </div>
                                                </a>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-arrows-left-right"></i> <label>Personne :</label>
                                        <label>{{$reservation->estimated_persons}}</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-clock"></i> <label>Estimated Days :</label>
                                        <label>{{$reservation->estimated_days}}</label><br>
                                        <i class="fa-solid fa-arrows-left-right"></i> <label>Estimated Cars :</label>
                                        <label>{{$reservation->estimated_cars}} </label>
                                    </div>
                                    {{-- <div class="form-reservation">
                                        <i class="fa-solid fa-location-dot"></i> <label> Departure address : </label>
                                        <label>{{ $reservation->depart }}</label>
                                    </div>
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-location-dot"></i> <label> First Destination adress : </label>
                                        <label>{{ $reservation->destination }}</label>
                                    </div> --}}
                                    <div class="form-reservation">
                                        <i class="fa-solid fa-clock"></i> <label>Time and date of departure : </label>
                                        <label>{{ $reservation->created_at }}</label>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <fieldset>

                                <!-- End of Reservation Date Picker -->
                                <div class="form-group col-md-12">
                                    <input required style="width:88%;" type="hidden"
                                        class="form-control departSelector destination" placeholder="Enter your full name"
                                        name="reservation_d" value="{{ $reservation->id }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <input required style="width:88%;" type="text"
                                        class="form-control departSelector destination" placeholder="Enter your full name"
                                        name="full_name" id="depart">
                                </div>
                                <div class="form-group col-md-12">
                                    <input style="width:88%;" required type="text"
                                        class="form-control arriveeSelector destination" placeholder="Entre your Email"
                                        name="email" id="destination">
                                </div>

                                <div class="form-group col-md-12">
                                    <input style="width:88%;" required type="number"
                                        class="form-control arriveeSelector destination" placeholder="Entre your phone"
                                        name="phone" id="destination">
                                </div>

                                <div class="form-group col-md-12">
                                    <select style="width:88%;" name="nb_place"
                                        class="form-control arriveeSelector destination">
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

                                <div class="form-group col-md-12">
                                    <textarea style="width:88%;" name="adress" placeholder="Entre your adress"
                                        class="form-control arriveeSelector destination" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <input style="width:88%;" required type="text"
                                        class="form-control arriveeSelector destination" placeholder="Entre your details"
                                        name="details" id="destination">
                                </div>
                                <input type="hidden" class="data" name="data" value="0" />


                                <div class="form-group col-md-12 next">
                                    <div class="form-error-msg"></div>
                                    <button style="width:88%; type="button" class="btn btn-success btn-submit">Reservation
                                        &nbsp;&nbsp;</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
@endsection
