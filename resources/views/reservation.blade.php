@extends('layouts.frontend')

@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner"
        style="background-image:url(https://www.allomycab.ma/images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row flexit">
                <div class="booking-form">
                  <div class="row">
                    <div class="col-5">
                     
                    </div>

                    <div class="col-6">
                        <form autocomplete="off" id="simple_form"  method="post"
                            action="{{ route('reservation') }}">
                            @csrf
                            {{-- <input type="hidden" name="_token"
                                              value="p63clH24k5PzPfhezuVCrCH64KgVXaWRC0MsiBXd"> --}}
                            <fieldset>
                                <h3> Reservation</h3>

                                <!-- End of Reservation Date Picker -->

                                <div class="form-group col-md-12">
                                    <input required style="width:88%; float:left;" type="hidden"
                                        class="form-control departSelector destination" placeholder="Enter your full name"
                                        name="reservation_d" value="{{ $reservation->id }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <input required style="width:88%; float:left;" type="text"
                                        class="form-control departSelector destination" placeholder="Enter your full name"
                                        name="full_name" id="depart">
                                </div>
                                <div class="form-group col-md-12">
                                    <input style="width:88%; float:left;" required type="text"
                                        class="form-control arriveeSelector destination" placeholder="Entre your Email"
                                        name="email" id="destination">
                                </div>

                                <div class="form-group col-md-12">
                                    <input style="width:88%; float:left;" required type="number"
                                        class="form-control arriveeSelector destination" placeholder="Entre your phone"
                                        name="phone" id="destination">
                                </div>

                                <div class="form-group col-md-12">
                                    <select name="nb_place" class="form-control arriveeSelector destination">
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
                                    <textarea name="adress" placeholder="Entre your adress" class="form-control arriveeSelector destination"
                                        cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <input style="width:88%; float:left;" required type="text"
                                        class="form-control arriveeSelector destination" placeholder="Entre your details"
                                        name="details" id="destination">
                                </div>
                                <input type="hidden" class="data" name="data" value="0" />


                                <div class="form-group col-md-12 next">
                                    <div class="form-error-msg"></div>
                                    <button type="button" class="btn btn-success btn-submit">Reservation
                                        &nbsp;&nbsp;</button>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
