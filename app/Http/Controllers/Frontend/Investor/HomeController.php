<?php

namespace App\Http\Controllers\Frontend\Investor;

use App\Http\Controllers\Controller;
use App\Models\Aqar;
use App\Models\User;
use App\Models\Category;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\AdsStatus;

class HomeController extends Controller
{


    public function index()
    {


        return view('frontend.invest.index' );

    }
    public function add_aqar()
    {

        $users = User::whereNotNull('type')->where('active',1)->get();
        $categories = Category::where('type',1)->where('parent_id',1)->where('active',1)->get();
        $Area = Area::where('active',1)->get();
        $countries = Country::all();
        $adsStatus = AdsStatus::all();
        $cities = City::all();

        return view('frontend.invest.add_aqar' , compact('users', 'categories','Area', 'countries', 'cities', 'adsStatus') );

    }

    public function countrycities($id)
    {

        $cities = City::where('country_id', $id)->get();
       return $cities;
        return Response::json($cities);


    }
    public function cityareas($id)
    {
        $areas = Area::where('city_id', $id)->get();

        return Response::json($areas);

    }

    public function SubCategories($id)
    {

        $subcategories = Category::where('parent_id', $id)->get();

        return Response::json($subcategories);


    }

    



}
