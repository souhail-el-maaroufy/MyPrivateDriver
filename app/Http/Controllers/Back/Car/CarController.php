<?php

namespace App\Http\Controllers\Back\Car;

use App\Http\Controllers\Controller;
use App\Models\Back\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
   static public function store(Request $request)
    {
        

        $car=Car::create($request->all());
        dd($request);
    }
}
