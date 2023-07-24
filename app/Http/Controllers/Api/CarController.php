<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Resources\CarDetailResource;
use App\Http\Resources\CommentResource;
use App\Models\Car;
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

            $user = $users->FavouriteCar()->toggle($request->car_id);

            $status = ($user['attached'] !== []) ? 'favourite' : 'unfavourite';

            return $this->respondSuccess($status, trans('message.data retrieved successfully.'));
        }

    }

    public function CarsReviews(Request $request){

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


    public function detailCar(Request $request){

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




}
