<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\PlacesResource;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Place;
use App\Models\PlaceComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PlaceController extends Controller
{


    public function PlaceFavourite(Request $request)
    {
        $user_id = Auth::id();

        $users = User::find($user_id);


        $user = $users->favourite_place()->toggle($request->place_id);

        $status = ($user['attached'] !== []) ? 'added' : 'deleted';

        return $this->respondSuccess($status, trans('message.data retrieved successfully.'));


    }

    public function CustomerReviews(Request $request)
    {

        $comments=PlaceComment::where('place_id',$request->place_id)->get();



        if (isset($comments)) {


            $placeComments = CommentResource::collection(($comments));


            return $this->respondSuccess($placeComments, __('message.Comment retrieved successfully.'));
        } else {
            return $this->respondError(__('Comment not found.'), ['error' => __('Comment not found.')], 404);


        }

    }

    public function searchPlace(Request $request)
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

            $city_id = City::where('country_id', $request->country_id)->pluck('id')->toArray();

            $resultArray = json_decode(json_encode($city_id), true);


            $categories = [];
            foreach (Category::where('type', '=', 0)->where('parent_id', null)->get() as $cat) {

                $city = json_decode($cat->city_id);

                $cityIDs = array_map('intval', $city);
                $result = array_intersect($cityIDs, $resultArray);

                if ($result) {
                    array_push($categories, $cat->id);

                }


            }

            $categories = implode(',', $categories);
            $places = Place::wherein('category_id', [$categories])->get();


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
