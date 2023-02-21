<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;


class CountryController extends Controller
{


    public function countries()
    {
        $Countries = Country::where('active', 1)->get(['id', 'name', 'flag_image', 'code', 'image'])->map(function ($country) {
            $country->flag_image = asset('images/countries') . "/" . $country->flag_image;
            $country->image = asset('images/countries') . "/" . $country->image;
            return $country;
        });
        return $this->respondSuccess(200, 'Countries retrieved successfully.', $Countries);
    }


    public function countrydetail($id)
    {
        $countryDetail=CountryResource::collection(Country::where('id',$id)->where('active',1)->get());

        if (count($countryDetail)==0) {
            return $this->respondError(404,__('Country not found.'),['error'=>__('Country not found.')]);
        }

        return $this->respondSuccess(200, 'Country retrieved successfully.',$countryDetail);
    }

}
