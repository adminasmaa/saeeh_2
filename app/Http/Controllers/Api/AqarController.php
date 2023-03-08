<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AqarBookingResource;
use App\Models\AqarBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class AqarController extends Controller
{
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


            $aqar=AqarBooking::where('aqar_id',$request->aqar_id)->first();


            $aquar= new AqarBookingResource($aqar);





            return $this->respondSuccess($aquar, trans('site.data retrieved successfully.'));


        }

    }

    public function AddAqar(Request $request)
    {

        $rule = [
            'delivery_date' => 'date|required',
            'reciept_date' => 'date|after_or_equal:delivery_date',
            'note' => 'required',
            'place_arrive' => 'required',
            'place_leave' => 'required',


        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $success = AqarBooking::create($request->all());

            return $this->respondSuccess($success, trans('site.added_successfully'));


        }

    }


}
