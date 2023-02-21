@extends('layouts.frontend')

@section('content')
    <div class="title_page_contact" style="background-image: url({{asset('images/marrakesh-menara-airport_1.jpg')}})">  
        <h1>CONTACT US</h1>
        
    </div>
    {{-- <div class="contanier">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('images/download (1).png')}}" alt="">
                <span></span>
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/download.png')}}" alt="">
                <span></span>
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/download (2).png')}}" alt="">
                <span></span>
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/download (2).png')}}" alt="">
                <span></span>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row contact">
            <div class="col-md-7" >
                <h1 class="title">Contact Us</h1>
                <div class="row" style="margin-top: 60px">
                   <div class="col-md-6">
                    <label for="">FULL NAME</label><br>
                     <input type="text" class="input_text" placeholder="Name">
                   </div>
                   <div class="col-md-6">
                    <label for="">EMAIL ADDRESS </label><br>
                     <input type="text" class="input_text" placeholder="Email">
                   </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                    <label for="">SUBJECT</label><br>
                    <input type="text" class="input_text" placeholder="Subject">
                </div>
              </div>
               <div class="row">
                <div class="col-md-12">
                    <label for="">MESSAGE</label><br>
                    <textarea class="textarea" placeholder="Message"></textarea>
                </div>
               </div>
            </div>
            <div class="col-md-5" >
                <img style="width:90%;border-radius:5%;margin-top:30px" src="{{ asset('images/image_contact.jpg') }}" alt=""
               srcset="">
            </div>
        </div>
    </div>
@endsection