<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;


class CityController extends Controller
{

    public function cities($id)
    {

        $cities = City::where('country_id', $id)->get()->map(function ($city) {
            $city->image = asset('images/cities') . "/" . $city->image;
            return $city;
        });;

        if (is_null($cities)) {
            return $this->respondError(404, __('Country not found.'), ['error' => __('Country not found.')]);
        }

        return $this->respondSuccess(200, 'cities retrieved successfully.', $cities);
    }


    public function citydetail($city_id)
    {
        $cityDetail = CityResource::collection(city::where('id', $city_id)->where('active', 1)->get());

        if (count($cityDetail) == 0) {
            return $this->respondError(404, __('city not found.'), ['error' => __('city not found.')]);
        }

        return $this->respondSuccess(200, 'city retrieved successfully.', $cityDetail);
    }

}
