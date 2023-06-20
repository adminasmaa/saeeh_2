<?php

namespace App\Http\Controllers\Frontend;
use Response;


use App\Http\Controllers\Controller;


use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::where('display_data', '=', 1)->paginate(10);
        return view('frontend.allcountries', compact('countries'));

    }





}
