<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryOnlyResource;
use App\Http\Resources\CountryResource;
use App\Models\Country;


class CountryController extends Controller
{


    public function countries()
    {
        $Countries =CountryOnlyResource::collection(Country::where('active', 1)->get());
        return $this->respondSuccess($Countries, 'Countries retrieved successfully.');
    }


    public function countrydetail($id)
    {
        $countryDetail=new CountryOnlyResource(Country::where('id',$id)->where('active',1)->first());

//        if (count($countryDetail)==0) {
//            return $this->respondError(__('Country not found.'),['error'=>__('Country not found.')],404);
//        }

        return $this->respondSuccess($countryDetail, 'Country retrieved successfully.');
    }

}
