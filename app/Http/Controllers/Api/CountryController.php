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
        $Countries =CountryResource::collection(Country::where('active', 1)->get());
        return $this->respondSuccess($Countries, 'Countries retrieved successfully.');
    }


    public function countrydetail($id)
    {
        $country=Country::where('id',$id)->where('active',1)->first();
        if(isset($country)){
            $countryDetail=new CountryOnlyResource($country);
            return $this->respondSuccess($countryDetail, 'Country retrieved successfully.');

        }else{
      return $this->respondError(__('Country not found.'),['error'=>__('Country not found.')],404);


        }


    }

}