<?php

namespace App\Http\Controllers\Frontend;

use Response;


use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\City;
use App\Models\Aqar;
use App\Models\Country;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Services\TwoFactorService;
use App\Models\category_city;
use App\Models\Setting;
use App\Models\HomeServices;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{


    public function index()
    {
        $countries = Country::where('display_data', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();

        $places = Place::limit(10)->get();
        $CategoriesAquar = Category::where('parent_id', '=', 1)->where('type', '=', 1)->get();
        $CategoriesCar = Category::where('parent_id', '=', 2)->where('type', '=', 2)->get();
        $CategoriesPlaces = Category::where('parent_id', '=', null)->where('type', '=', 0)->get();
        $PlacesComments = PlaceComment::with('user')->limit(10)->get();
        $settings = Setting::first();
        $HomeServices = HomeServices::all();

        return view('frontend.index', compact('countries', 'cities', 'places', 'CategoriesAquar', 'CategoriesCar', 'CategoriesPlaces', 'PlacesComments', 'settings', 'HomeServices'));

    }

    public function termAndCondition()
    {
        $setting = Setting::first();


        return view('frontend.terms', compact('setting'));

    }

    public function countrycities($id)
    {

        $cities = City::where('country_id', $id)->get();

        return $cities;

        return Response::json($cities);


    }

    public function categorycities($id)
    {


        $categoryrelated = category_city::join('categories', 'categories.id', '=', 'cities-categories.category_id')->where('cities-categories.city_id', $id)->where('categories.parent_id', '=', 1)->where('categories.type', '=', 1)->get();

        return Response::json($categoryrelated);


    }


    public function carcategory($id)
    {


        $carcategory = Category::where('parent_id', '=', $id)->where('type', '=', 2)->get();

        return Response::json($carcategory);


    }

    public function roomnumbers($id)
    {


        $roomnumbers = Aqar::distinct()->join('aqar_sections', 'aqars.id', '=', 'aqar_sections.aqar_id')->join('aqar_details', 'aqar_details.id', '=', 'aqar_sections.sub_section_id')->where('aqars.category_id', $id)->where('aqar_sections.section_id', '=', 6)->groupBy('aqars.id')->select(\DB::raw('SUM(aqar_details.name_ar) as total'))
            ->get()
            ->pluck('total', 'aqar_details.name_ar')
            ->toArray();
        return Response::json($roomnumbers);


    }


}
