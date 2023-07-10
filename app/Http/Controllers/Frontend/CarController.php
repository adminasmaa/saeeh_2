<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use Response;


use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{

    public function allcars()
    {

        $cars = Car::paginate(2);
        $countries = Country::where('display_data', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();
        $CategoriesCar = Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();

        return view('frontend.cars', compact('cars', 'countries', 'cities', 'CategoriesCar'));

    }

    public function detailcar($id)
    {

        $car = Car::find($id);
        return view('frontend.detailcar', compact('car'));


    }


}
