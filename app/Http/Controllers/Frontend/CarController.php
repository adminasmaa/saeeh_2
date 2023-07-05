<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Car;
use Response;


use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{

    public function allcars()
    {

       $cars=Car::paginate(2);
        return view('frontend.cars',compact('cars'));

    }

    public function detailcar($id){

        return $id;
    }





}
