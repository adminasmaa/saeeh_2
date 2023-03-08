<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\PlacesResource;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use Illuminate\Http\Request;


class PlaceController extends Controller
{

    public function searchPlease(Request $request)
    {

        if ($request['country_id'] && $request['city_id'] && $request['category_id']) {

            $places = Place::where('category_id', $request['category_id'])->get();


        } elseif ($request['country_id'] && $request['city_id']) {
            $city_id = $request->city_id;
            $categories = [];
            foreach (Category::where('type', '=', 0)->where('parent_id', null)->get() as $cat) {

                $city = json_decode($cat->city_id);

                if (in_array($city_id, $city)) {
                    array_push($categories, $cat->id);

                }
            }

            $places = Place::wherein('category_id', $categories)->get();

        } elseif ($request['country_id']) {

            $countries = City::where('country_id', $request->country_id)->get();

            return $countries;



        } else {

            $places = Place::get();

        }
        $placess = PlaceResource::collection($places);

        return $this->respondSuccess($placess, __('message.Place retrieved successfully.'));

    }

    public function placedetail(Request $request)
    {
        $id = $request->place_id;

        $place = Place::where('id', $id)->first();
        if (isset($place)) {


            $placeDetail = new PlaceResource($place);


            return $this->respondSuccess($placeDetail, __('message.Place retrieved successfully.'));
        } else {
            return $this->respondError(__('Place not found.'), ['error' => __('Place not found.')], 404);


        }
    }

}
