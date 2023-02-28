<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;


class PlaceController extends Controller
{


    public function placedetail($id)
    {

        $place = Place::where('id', $id)->first();
        if (isset($place)) {


            $placeDetail = new PlaceResource($place);


            return $this->respondSuccess($placeDetail, __('message.Place retrieved successfully.'));
        } else {
            return $this->respondError(__('Place not found.'),['error'=>__('Place not found.')],404);


        }
    }

}
