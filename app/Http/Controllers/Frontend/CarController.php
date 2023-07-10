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

    public function allcars(Request $request)
    {
        if (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id) && !empty($request->category_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->where('car_brand_id', '=', $request->brand_id)->paginate(2);
        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id)) {
            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('car_brand_id', '=', $request->brand_id)->paginate(2);


        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->paginate(2);

        } elseif (!empty($request->country_id) && !empty($request->year)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('year', '=', $request->year)->paginate(2);

        } elseif (!empty($request->country_id) && !empty($request->city_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->paginate(2);

        } elseif (!empty($request->country_id)) {

            $cars = Car::where('country_id', '=', $request->country_id)->paginate(2);

        } else {
            $cars = Car::paginate(2);
        }

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
