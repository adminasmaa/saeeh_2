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


    public function bookingcar($id)
    {
        $car = Car::findorfail($id);

        return view('frontend.carbooking', compact('car'));

    }

    public function allcarscategories($id)
    {


        $category = Category::find($id);


        if (!empty($category->subcategories) && $category->subcategories != null && count($category->subcategories) > 0) {


            $subcategories = Category::where('parent_id', '=', $id)->paginate(8);


            return view('frontend.subcategoriescar', compact('category', 'subcategories'));


        }


    }

    public function allcars(Request $request, $id)
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
            $cars = Car::where('sub_category_id', '=', $id)->paginate(2);
        }

        $countries = Country::where('display_data', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();
        $CategoriesCar = Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $carsfilters = Car::get();
        return view('frontend.cars', compact('cars', 'carsfilters', 'countries', 'cities', 'CategoriesCar'));

    }


    public function CheckCar(Request $request)
    {
        $request['category_id'] = $request->array_category_id ?? [];
        $request['array_year'] = $request->array_year ?? [];
        $request['array_color'] = $request->array_color ?? [];
        $request['fixed_price'] = $request->fixed_price ?? [];
        $request['rate'] = $request->rate ?? [];

//        if (isset($request)) {
//            $cars = Car::orWhereIn('category_id', $request->category_id)
//                ->orWhereIn('year', $request->array_year)
//                ->orWhereIn('color', $request->array_color)
//                ->orWhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//        }

//return $request;
        if (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color']) && !empty($request['fixed_price'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);
        } elseif (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['array_year'])) {


            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('year', $request->array_year)
                ->paginate(7);

        } elseif (!empty($request['array_year']) && !empty($request['array_color'])) {


            $cars = Car::WhereIn('year', $request->array_year)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['fixed_price'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);

        } elseif (!empty($request['category_id']) && !empty($request['array_color'])) {

            $cars = Car::WhereIn('category_id', $request->category_id)
                ->WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['array_year'])) {

            $cars = Car::WhereIn('year', $request->array_year)
                ->paginate(7);

        } elseif (!empty($request['category_id'])) {
            $cars = Car::WhereIn('category_id', $request->category_id)
                ->paginate(7);

        } elseif (!empty($request['array_color'])) {
            $cars = Car::WhereIn('color', $request->array_color)
                ->paginate(7);

        } elseif (!empty($request['fixed_price'])) {
            $cars = Car::WhereIn('fixed_price', $request->fixed_price)
                ->paginate(7);

        } elseif (!empty($request['rate'])) {


            $rate = CarReview::WhereIn('rate', $request['rate'])->pluck('car_id');

            $cars = Car::WhereIn('id', $rate)
                ->paginate(7);

        }
//        return $cars;
        return view('frontend.carsearch', compact('cars'));

    }


    public function detailcar($id)
    {

        $car = Car::find($id);
        return view('frontend.detailcar', compact('car'));


    }


}
