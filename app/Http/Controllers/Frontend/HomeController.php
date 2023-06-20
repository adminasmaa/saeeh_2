<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{


    public function index()
    {
        $countries = Country::where('display_data', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();

        $places = Place::limit(10)->get();
        $CategoriesAquar=Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
        $CategoriesCar=Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $CategoriesPlaces=Category::where('parent_id', '=', null)->where('type', '=', 0)->get();
        $PlacesComments=PlaceComment::with('user')->limit(10)->get();

        return view('frontend.index', compact('countries', 'cities', 'places','CategoriesAquar','CategoriesCar','CategoriesPlaces','PlacesComments'));

    }


}
