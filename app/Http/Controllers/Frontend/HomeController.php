<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{


    public function index()
    {
        $countries = Country::where('display_data', '=', 1)->get();
        $cities = City::where('active', '=', 1)->get();

        $places = Place::get();

        return view('frontend.index', compact('countries', 'cities', 'places'));

    }


}
