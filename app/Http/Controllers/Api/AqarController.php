<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AqarBookingResource;
use App\Http\Resources\AqarDetailResource;
use App\Http\Resources\CommentResource;
use App\Http\Resources\AqarBookListResource;
use App\Http\Resources\CarBookingListResource;
use App\Http\Resources\AqarBookDetailResource;
use App\Http\Resources\CarBookingDetailResource;
use App\Models\Aqar;
use App\Models\AqarBooking;
use App\Models\CarBooking;
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

    public function cancelbooking(Request $request)
    {
        $rule = [
            'book_id' => 'required',
            'type' => 'required',
            'cancle_reason' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            if ($request->type == 'aqar') {


                $book=AqarBooking::find($request->book_id);

                $book->update(['booking_status_id'=>4,'cancle_reason'=>$request->cancle_reason]);

            }else{

                $book=CarBooking::find($request->book_id);

                $book->update(['booking_status_id'=>4,'cancle_reason'=>$request->cancle_reason]);
            }
                return $this->respondSuccess($book, trans('message.message sent successfully.'));

        }
    }
    public function detailAqar(Request $request)
    {
        $rule = [
            'id' => 'required',
        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {
            $aqar_id = $request->id;

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

            // paginate(20)
            $comments = AqarComment::where('aqar_id', $request->aqar_id)->get();


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
//            'rate' => 'required',
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


            if ($request->type == 'aqar') {

                if (!empty($request->comments)) {
                    
                    $rate=0;
                    foreach ($request->comments as $comment) {

                        AqarReview::updateOrCreate(['review_element_id' => $comment['id'], 'aqar_id' => $request->id, 'user_id' => Auth::id()], [

                            'review_element_id' => $comment['id'],

                            'rate' => $comment['value'],

                            'aqar_id' => $request->id,

                            'user_id' => Auth::id(),
                        ]);
                        $rate+=$comment['value'];

                    }
                }

                $data = AqarComment::create([

                    'description' => $request->description ?? '',

                    'rating' => round($rate/count($request->comments),2),
                    'aqar_id' => $request->id,

                    'user_id' => Auth::id(),
                ]);


            } elseif ($request->type == 'car') {


                if (!empty($request->comments)) {

                    $rate=0;
                    foreach ($request->comments as $comment) {

                        CarReview::updateOrCreate(['car_id' =>$request->id, 'user_id' => Auth::id()], [

                            'car_id' => $request->id,

                            'rate' => $comment['value'],


                            'user_id' => Auth::id(),
                        ]);
                        $rate+=$comment['value'];

                    }
                }

                $data = CarComment::create([

                    'description' => $request->description ?? '',

                    'car_id' => $request->id,
                   'rating' => round($rate/count($request->comments),2),


                    'user_id' => Auth::id(),
                ]);


            } else {


                if (!empty($request->comments)) {


                    foreach ($request->comments as $comment) {
                        $rate=0;
                        PlaceReview::updateOrCreate(['place_id' => $request->id, 'user_id' => Auth::id()], [

                            'place_id' => $request->id,

                            'rate' => $comment['value'],


                            'user_id' => Auth::id(),
                        ]);
                        $rate+=$comment['value'];

                    }
                }

                $data = PlaceComment::create([

                    'description' => $request->description,

                    'place_id' => $request->id,
                    'rating' =>  round($rate/count($request->comments),2),

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
            'day_count' => 'required',
            'place_arrive' => 'nullable',
            'place_leave' => 'nullable',
            'id' => 'required',
            'total_price' => 'required',
            'person_num'=>'nullable',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $aqar=Aqar::find($request->id);

            if($aqar->fixed_price){
                $fixed_price=$aqar['fixed_price'];
            }else{
                $price=json_decode($aqar['changed_price'])->person_num;
                $key=array_search ($request->person_num, $price);
                $changedprice=json_decode($aqar['changed_price'])->price[$key];
                $data['person_num'] = array($request->person_num);
                $data['price'] = array($changedprice);
                $changed_price=json_encode($data)!=null?json_encode($data, JSON_NUMERIC_CHECK):null;
               
            }
            $input = $request->all();
            $input['user_id'] = Auth::id();
            $input['aqar_id'] =$request->id;
            $input['person_num'] =$request->person_num;
            $input['total_price'] =$request->total_price;
            $input['fixed_price'] = $fixed_price ?? null;
            $input['changed_price'] = $changed_price ?? null;
            $input['booking_status_id'] =1;

            $success = AqarBooking::create($input);

            return $this->respondSuccess($success, trans('site.added_successfully'));


        }

    }


    public function listofbookings(Request $request)
    {

        $rule = [
            'type' => 'required',
            'status_id'=>'required'
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

                $cars = CarBooking::where('booking_status_id', '=', $request->status_id)->where('user_id','=',$user->id)->orderBy('created_at', 'desc')->paginate(20);

                if (count($cars)) {

                    $carss = CarBookingListResource::collection($cars)->response()->getData();

                    return $this->respondSuccessPaginate($carss, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }

//
            } elseif ($request->type == 'aqar') {

                $aquars = AqarBooking::where('booking_status_id', '=', $request->status_id)->where('user_id','=',$user->id)->orderBy('created_at', 'desc')->paginate(20);

                if (count($aquars)) {

                    $quarss = AqarBookListResource::collection($aquars)->response()->getData();

                    return $this->respondSuccessPaginate($quarss, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }
            }

        }
    }


    public function Detailofbookings(Request $request)
    {

        $rule = [
            'type' => 'required',
            'id'=>'required'
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

                $carbook = CarBooking::where('id', '=', $request->id)->first();

                if ($carbook) {

                    $carss = new CarBookingDetailResource($carbook);

                    return $this->respondSuccess($carss, __('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }

//
            } elseif ($request->type == 'aqar') {

                $aqar = AqarBooking::where('id', '=', $request->id)->first();

                if ($aqar) {

                    $aquar = new AqarBookDetailResource($aqar);


                    return $this->respondSuccess($aquar, trans('message.data retrieved successfully.'));


                } else {
                    return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

                }
            }

        }
    }






}
