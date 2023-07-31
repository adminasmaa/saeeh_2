<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Aqar;
use App\Models\Category;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Session;
use Response;


use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AquarController extends Controller
{

    public function filteraquars(Request $request)
    {
        if (!empty($request->country_id) && !empty($request->city_id) && !empty($request->category_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->where('category_id', '=', $request->category_id)->paginate(2);
        } elseif (!empty($request->country_id) && !empty($request->category_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('category_id', '=', $request->category_id)->paginate(2);

        } elseif (!empty($request->country_id) && !empty($request->city_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->where('city_id', '=', $request->city_id)->paginate(2);

        } elseif (!empty($request->category_id)) {

            $aquars = Aqar::where('category_id', '=', $request->category_id)->paginate(2);

        } elseif (!empty($request->city_id)) {

            $aquars = Aqar::where('city_id', '=', $request->city_id)->paginate(2);

        } elseif (!empty($request->country_id)) {

            $aquars = Aqar::where('country_id', '=', $request->country_id)->paginate(2);

        } else {
            $aquars = Aqar::paginate(2);
        }

        $roomsnumbers = Aqar::with('aqarSection')->get();

//        foreach ($roomsnumbers as $rooms) {
//
//            foreach ($rooms->aqarSection as $section) {
//
//                return $section->subsection->sum('name_ar');
////                $section->subsection->sum('name_ar')
//
//            }
//        }

        $allaquars = Aqar::where('category_id', '=', Session::get('category_id'))->with('aqarSection')->get();

        $countries = Country::where('display_data', '=', 1)->get();
        $category = Category::first();
        $cities = City::where('active', '=', 1)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
//        $carsfilters = Car::get();
        return view('frontend.aquars', compact('allaquars','roomsnumbers', 'countries', 'cities', 'aquars', 'CategoriesAquar', 'category'));


    }

    public function allaquars(Request $request, $id)
    {

        session_start();
        Session::put('category_id', $id);

        $aquars = Aqar::where('category_id', '=', $id)->with('aqarSection')->paginate(2);
        $allaquars = Aqar::where('category_id', '=', $id)->with('aqarSection')->get();
        $roomsnumbers = Aqar::with('aqarSection')->get();

//        $roomss = [];
//        foreach ($roomsnumbers as $rooms) {
//
//            foreach ($rooms->aqarSection as $section) {
//                $integerIDs = array_map('intval', $section->subsection->toarray());
//
//
//                array_push($integerIDs,$roomss);
////                array_push($rooms,$integerIDs);
//
////                $section->subsection->sum('name_ar')
//
//            }
//        }

        $countries = Country::where('display_data', '=', 1)->get();
        $category = Category::find($id);
        $cities = City::where('active', '=', 1)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
//        $carsfilters = Car::get();
        return view('frontend.aquars', compact('roomsnumbers','allaquars', 'countries', 'cities', 'aquars', 'CategoriesAquar', 'category'));

    }


//    public function CheckCar(Request $request)
//    {
//        $request['category_id'] = $request->array_category_id ?? [];
//        $request['array_year'] = $request->array_year ?? [];
//        $request['array_color'] = $request->array_color ?? [];
//        $request['fixed_price'] = $request->fixed_price ?? [];
//        $request['rate'] = $request->rate ?? [];
//
////        if (isset($request)) {
////            $cars = Car::orWhereIn('category_id', $request->category_id)
////                ->orWhereIn('year', $request->array_year)
////                ->orWhereIn('color', $request->array_color)
////                ->orWhereIn('fixed_price', $request->fixed_price)
////                ->paginate(7);
////        }
//
////return $request;
//        if (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color']) && !empty($request['fixed_price'])) {
//
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->WhereIn('year', $request->array_year)
//                ->WhereIn('color', $request->array_color)
//                ->WhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//        } elseif (!empty($request['category_id']) && !empty($request['array_year']) && !empty($request['array_color'])) {
//
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->WhereIn('year', $request->array_year)
//                ->WhereIn('color', $request->array_color)
//                ->paginate(7);
//
//        }
//        elseif (!empty($request['category_id']) && !empty($request['array_year'])) {
//
//
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->WhereIn('year', $request->array_year)
//                ->paginate(7);
//
//        }
//        elseif (!empty($request['array_year']) && !empty($request['array_color'])) {
//
//
//            $cars = Car::WhereIn('year', $request->array_year)
//                ->WhereIn('color', $request->array_color)
//                ->paginate(7);
//
//        } elseif (!empty($request['category_id']) && !empty($request['fixed_price'])) {
//
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->WhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//
//        } elseif (!empty($request['category_id']) && !empty($request['array_color'])) {
//
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->WhereIn('color', $request->array_color)
//                ->paginate(7);
//
//        } elseif (!empty($request['array_year'])) {
//
//            $cars = Car::WhereIn('year', $request->array_year)
//                ->paginate(7);
//
//        }
//        elseif (!empty($request['category_id'])) {
//            $cars = Car::WhereIn('category_id', $request->category_id)
//                ->paginate(7);
//
//        } elseif (!empty($request['array_color'])) {
//            $cars = Car::WhereIn('color', $request->array_color)
//                ->paginate(7);
//
//        } elseif (!empty($request['fixed_price'])) {
//            $cars = Car::WhereIn('fixed_price', $request->fixed_price)
//                ->paginate(7);
//
//        }elseif (!empty($request['rate'])) {
//
//
//        $rate=CarReview::WhereIn('rate',$request['rate'])->select('car_id');
//
//            $cars = Car::WhereIn('id',$rate)
//                ->paginate(7);
//
//        }
////        return $cars;
//        return view('frontend.carsearch', compact('cars'));
//
//    }
//
//
    public function detailaquar($id)
    {

        $aquar = Aqar::find($id);
        return view('frontend.detailaquar', compact('aquar'));


    }


}
