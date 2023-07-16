<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\CarReview;
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

            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('year', '=', $request->year)->where('category_id', '=', $request->brand_id)->paginate(2);
        } elseif (!empty($request->country_id) && !empty($request->city_id) && !empty($request->brand_id)) {
            $cars = Car::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('category_id', '=', $request->brand_id)->paginate(2);


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


    public function CheckCar(Request $request)
    {

        if ($request->name == 'category_id') {
            $cars = Car::where('category_id', '=', $request->value)->paginate(2);

        } elseif ($request->name == 'year') {
            $cars = Car::where('year', '=', $request->value)->paginate(2);


        } elseif ($request->name == 'color') {
            $cars = Car::where('color', '=', $request->value)->paginate(2);


        } elseif ($request->name == 'fixed_price') {
            $cars = Car::where('fixed_price', '=', $request->value)->paginate(2);


        } elseif ($request->name == 'rate') {


         $car_id=CarReview::where('rate', '=', $request->value)->select('car_id');
            return 'rate' . $request->name . $request->value.$car_id;

        }
        return view('frontend.carsearch', compact('cars'));

    }


    public function detailcar($id)
    {

        $car = Car::find($id);
        return view('frontend.detailcar', compact('car'));


    }


}
