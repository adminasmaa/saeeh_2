<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AqarBookingResource;
use App\Http\Resources\AqarDetailResource;
use App\Http\Resources\CommentResource;
use App\Models\Aqar;
use App\Models\AqarBooking;
use App\Models\AqarComment;
use App\Models\AqarReview;
use App\Models\CarComment;
use App\Models\CarReview;
use App\Models\PlaceComment;
use App\Models\PlaceReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class AqarController extends Controller
{

    public function detailAqar(Request $request)
    {
        $rule = [
            'aqar_id' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $aqar_id = $request->aqar_id;

            $aqar = Aqar::where('id', $aqar_id)->first();

            if (isset($aqar)) {

                $aquar = new AqarDetailResource($aqar);


                return $this->respondSuccess($aquar, trans('message.data retrieved successfully.'));
            } else {

                return $this->respondError(__('message.Data not found.'), ['error' => __('message.Data not found.')], 404);

            }
        }
    }


    public function AqarFavourite(Request $request)
    {

        $rule = [

            'aqar_id' => 'required',


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


            $user = $users->favourite_aqars()->toggle($request->aqar_id);

            $status = ($user['attached'] !== []) ? 'favourite' : 'unfavourite';

            return $this->respondSuccess($status, trans('message.data retrieved successfully.'));

        }
    }


    public function AqarsReviews(Request $request)
    {


        $rule = [

            'aqar_id' => 'required',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {


            $comments = AqarComment::where('aqar_id', $request->aqar_id)->paginate(10);


            if (isset($comments)) {


                $placeComments = CommentResource::collection(($comments));


                return $this->respondSuccess($placeComments, __('message.Comment retrieved successfully.'));
            } else {
                return $this->respondError(__('Comment not found.'), ['error' => __('Comment not found.')], 404);


            }
        }
    }

    public function getBetweenDates($startDate, $endDate)
    {
        $rangArray = [];

        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);

        for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate += (86400)) {
            $date = date('Y-m-d', $currentDate);
            $rangArray[] = $date;
        }

        return $rangArray;
    }


    public function Availabledays(Request $request)
    {
        $aqar_id = $request->aqar_id;
        $booking = AqarBooking::where('aqar_id', $aqar_id)->get();

        $dateAvaliable = [];
        foreach ($booking as $item) {

            $delivery_date = $item->delivery_date;
            $reciept_date = $item->reciept_date;

            $dates = $this->getBetweenDates($delivery_date, $reciept_date);

            array_push($dateAvaliable, $dates);

        }
        $array = Arr::collapse($dateAvaliable);

        $availableDate = array_unique($array);

        return $this->respondSuccess($availableDate, 'Date is blocking');
    }


    public function AddComment(Request $request)
    {
        $rule = [

            'description' => 'nullable',

            'id' => 'required',
            'type' => 'required',
//            'comments' => 'required|array',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {


            if ($request->type == 'Aqar') {

                if (!empty($request->comments)) {


                    foreach ($request->comments as $comment) {

                        AqarReview::updateOrCreate(['review_element_id' => $comment['id'], 'aqar_id' => $request->id, 'user_id' => Auth::id()], [

                            'review_element_id' => $comment['id'],

                            'rate' => $comment['value'],

                            'aqar_id' => $request->id,

                            'user_id' => Auth::id(),
                        ]);

                    }
                }

                $data = AqarComment::create([

                    'description' => $request->description ?? '',

                    'aqar_id' => $request->id,

                    'user_id' => Auth::id(),
                ]);


            } elseif ($request->type == 'Car') {


                if (!empty($request->comments)) {


                    foreach ($request->comments as $comment) {

                        CarReview::updateOrCreate(['car_id' => $comment['id'], 'user_id' => Auth::id()], [

                            'car_id' => $comment['id'],

                            'rate' => $comment['value'],


                            'user_id' => Auth::id(),
                        ]);

                    }
                }

                $data = CarComment::create([

                    'description' => $request->description ?? '',

                    'car_id' => $request->id,

                    'user_id' => Auth::id(),
                ]);


            } else {


                if (!empty($request->comments)) {


                    foreach ($request->comments as $comment) {

                        PlaceReview::updateOrCreate(['place_id' => $comment['id'], 'user_id' => Auth::id()], [

                            'place_id' => $comment['id'],

                            'rate' => $comment['value'],


                            'user_id' => Auth::id(),
                        ]);

                    }
                }

                $data = PlaceComment::create([

                    'description' => $request->description,

                    'place_id' => $request->id,

                    'user_id' => Auth::id(),
                ]);

            }

            return $this->respondSuccess($data, trans('site.added_successfully'));


        }

    }

    public function AddNote(Request $request)
    {
        $rule = [

            'note' => 'required',

            'id' => 'required|exists:aqar_bookings',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $success = AqarBooking::find($request->id)->update(['note' => $request->note]);

            return $this->respondSuccess($success, trans('site.updated_successfully'));


        }

    }

    public function AqarBookingDetail(Request $request)
    {
        $rule = [

            'delivery_date' => 'required',
            'reciept_date' => 'required',

            'aqar_id' => 'required|exists:aqar_bookings',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {


            $aqar = Aqar::where('id', $request->aqar_id)->first();


            $aquar = new AqarBookingResource($aqar);


            return $this->respondSuccess($aquar, trans('message.data retrieved successfully.'));


        }

    }

    public function AddAqar(Request $request)
    {

        $rule = [
            'delivery_date' => 'date|required',
            'reciept_date' => 'date|after_or_equal:delivery_date',
            'note' => 'nullable',
            'place_arrive' => 'nullable',
            'place_leave' => 'nullable',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $input = $request->all();
            $input['user_id'] = Auth::id();
            $success = AqarBooking::create($input);

            return $this->respondSuccess($success, trans('site.added_successfully'));


        }

    }


   


}
