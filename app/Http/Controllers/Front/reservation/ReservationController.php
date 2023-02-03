<?php

namespace App\Http\Controllers\Front\reservation;

use App\Enum\ReservationSelect;
use App\Http\Controllers\Controller;
use App\Models\Back\Car;
use App\Models\Back\Category;
use App\Models\Front\Reservation_Details;
use App\Models\Front\Resevation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\JsonDecoder;

class ReservationController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('landing', compact('cars'));
    }
    public function reservation_details(Request $request)
    {
        // $item = Car::find(2);
        // $image=$item->attachment()->first();
        // dd($image->path.$image->name.'.'.$image->extension);
        // foreach($image as $img){
        //     dd($img->name.'.'.$img->extension);
        // }

        $reservation = Reservation_Details::create($request->all());
        $reservation_data =  json_decode($reservation->data);

       foreach($cars=Car::all() as $car){
        if($reservation->car_model == $car->id){
           
            return view('reservation', compact('reservation','reservation_data','car'));
        }
       }
      

       
    }


    public function reservation(Request $request)
    {
        // dd($request);
        $validateur = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        if ($validateur->fails()) {
            $reponce = [
                'status' => false,
                'message' => $validateur->errors()
            ];

            return response()->json($reponce);
        }

        Resevation::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'nb_place' => $request->nb_place,
            'details' => $request->details,
            'reservation_d' => $request->reservation_d,
        ]);

        $reponce = [
            'status' => true,
            'message' => 'reservation as succesfuly'
        ];

        return redirect()->route('landing_page');
    }

    public function show($id)
    {
        $reservation_details = Reservation_Details::find($id);
        $cars = $reservation_details->cars()->get();
        $reservations = $reservation_details->reservations()->get();
        $data=json_decode($reservation_details->data);
        // dd($reservation_details->cars()->get());
        //  dd(Car::find(1)->attachment()->get());

        return view('back.reservation.reservation', compact('reservation_details', 'cars', 'reservations','data'));
    }

    public function edit($id)
    {
        $reservation = Resevation::find($id);
        $reservation_details = Reservation_Details::where('id',$reservation->reservation_d)->get();
        $reservation_status = ReservationSelect::cases();
        // dd($reservation_details);

        return view('back.reservation.Edit_reservation', compact('reservation','reservation_status','reservation_details'));
    }

    public function confirmation (Request $request ,$id)
    {
        $reservation = Resevation::find($id);
        $reservation->status = $request->status;
        $reservation->save();
        
        return redirect()->route('platform.reservation.list');
    }
}
