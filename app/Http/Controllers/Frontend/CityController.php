<?php

namespace App\Http\Controllers\Frontend;
use Response;


use App\Http\Controllers\Controller;


use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CityController extends Controller
{

    public function index($id)
    {
        $country=Country::find($id);
        $cities = City::where('country_id', $id)->paginate(12);
        return view('frontend.cities', compact('country','cities'));

    }





}