<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityOnlyResource;
use App\Http\Resources\CityResource;
use App\Models\City;


class CityController extends Controller
{

    public function cities($id)
    {

        $cities =CityOnlyResource::collection(City::where('country_id', $id)->get());



        if (is_null($cities)) {
            return $this->respondError( __('Country not found.'), ['error' => __('Country not found.')],404);
        }

        return $this->respondSuccess($cities, 'cities retrieved successfully.');
    }


    public function citydetail($city_id)
    {
        $cityDetail =new CityOnlyResource(city::where('id', $city_id)->where('active', 1)->first());

//        if (count($cityDetail) == 0) {
//            return $this->respondError( __('city not found.'), ['error' => __('city not found.')],404);
//        }

        return $this->respondSuccess($cityDetail, 'city retrieved successfully.');
    }

}
