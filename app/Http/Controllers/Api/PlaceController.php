<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;


class PlaceController extends Controller
{


    public function placedetail($id)
    {
        $placeDetail = new PlaceResource(Place::where('id', $id)->first());


        return $this->respondSuccess(200, __('message.Place retrieved successfully.'), $placeDetail);
    }

}
