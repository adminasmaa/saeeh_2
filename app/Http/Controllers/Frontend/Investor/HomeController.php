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
use Response;

class HomeController extends Controller
{


    public function index()
    {


        return view('frontend.invest.index' );

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
