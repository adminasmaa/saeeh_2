<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Resources\AqarFavResource;
use App\Http\Resources\CarDetailResource;
use App\Http\Resources\CarFavResource;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PlaceFavResource;
use App\Models\Car;
use App\Models\CarBooking;
use App\Models\CarComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CarController extends Controller
{




    public function CarFavourite(Request $request)
    {
        $rule = [
            'car_id' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $user_id = Auth::id();

            $users = User::find($user_id);

            $user = $users->favourite_car()->toggle($request->car_id);

            $status = ($user['attached'] !== []) ? 'favourite' : 'unfavourite';

            return $this->respondSuccess($status, trans('message.data retrieved successfully.'));
        }

    }

    public function CarsReviews(Request $request)
    {

        $rule = [
            'car_id' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $comments = CarComment::where('car_id', $request->car_id)->paginate(10);

            if (isset($comments)) {


                $carComments = CommentResource::collection(($comments));


                return $this->respondSuccess($carComments, __('message.Comment retrieved successfully.'));
            } else {
                return $this->respondError(__('Comment not found.'), ['error' => __('Comment not found.')], 404);


            }
        }
    }


    public function detailCar(Request $request)
    {

        $rule = [
            'car_id' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $car_id = $request->car_id;

            $car = Car::where('id', $car_id)->first();


            if (isset($car)) {

                $cars = new CarDetailResource($car);


                return $this->respondSuccess($cars, trans('message.data retrieved successfully.'));
            } else {

                return $this->respondError(__('message.Data not found.'), ['error' => __('message.Data not found.')], 404);

            }
        }
    }

    public function listoffavourite(Request $request)
    {

        $rule = [
            'type' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondErrorArray('Validation Error.', $validator->errors(), 400);

        } else {
            $user = Auth::user();
            if ($request->type == 'car') {


                $user->setRelation('favourite_car', $user->favourite_car()->paginate(20));


//                return  $user->favourite_car;


                $cars = $user->favourite_car;


                if (count($cars)) {

                    $carss = CarFavResource::collection($cars)->response()->getData();

                    return $this->respondSuccessPaginate($carss, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }

//
            } elseif ($request->type == 'aqars') {

                $user->setRelation('favourite_aqars', $user->favourite_aqars()->paginate(20));


//                return  $user->favourite_car;


                $quars = $user->favourite_aqars;


                if (count($quars)) {

                    $quarss = AqarFavResource::collection($quars)->response()->getData();

                    return $this->respondSuccessPaginate($quarss, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }


            } elseif ($request->type == 'place') {

                $user->setRelation('favourite_place', $user->favourite_place()->paginate(20));


                $places = $user->favourite_place;


                if (count($places)) {

                    $placess = PlaceFavResource::collection($places)->response()->getData();

                    return $this->respondSuccessPaginate($placess, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }


            }


        }
    }


}
