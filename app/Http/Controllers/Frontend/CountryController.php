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
        $countries = Country::where('active', '=', 1)->paginate(12);
        return view('frontend.allcountries', compact('countries'));

    }

    public function searchcountries(Request $request)
    {

        $query = $request->get('query');


        $countries = Country::when($query, function ($quer) use ($query) {
            $quer->where('name_ar', 'LIKE', '%' . trim($query) . '%')->orwhere('name_en', 'LIKE', '%' . trim($query) . '%');

        })->paginate(20);
        return view('frontend.searchcountries', compact('countries'));

    }


}
