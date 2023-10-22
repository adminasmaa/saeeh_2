<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AqarBooking;
use App\Models\CarBooking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class PaymentController extends Controller
{

    public function confirm_pay(Request $request)
    {

        $rule = [

            'invoice_id' => 'required',
            'invoice_status' => 'required',
            'invoice_value' => 'required',
            'book_id' => 'required',
          //  'created_at'=>'required',
            'type'=>Rule::in(['aqar','car'])

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
            'type' => __('The sort parameter accept only "aqar" or "car" value'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $data=Payment::create([

                'invoice_id' => $request->invoice_id,

                'invoice_status' => $request->invoice_status,

                'invoice_value' => $request->invoice_value,

                'book_id' => $request->book_id,

                'user_id' => Auth::id(),

               // 'created_at'=> $request->created_at,

                'type'=>$request->type,
            ]);
            if($request->invoice_status=='Paid' && $request->type=='aqar'){
               $success = AqarBooking::find($request->book_id)->update(['status_id' => 3]);
               return $this->respondSuccess($success, trans('site.paid_successfully'));
            }else if($request->invoice_status=='Paid' && $request->type=='car'){
                $success = CarBooking::find($request->book_id)->update(['status_id' => 3]);
                return $this->respondSuccess($success, trans('site.paid_successfully'));
            }else{
                return $this->respondError(trans('site.paid not complete please try again'), ['error' => trans('site.paid not complete please try again')], 402);
            }

            
        }

        

    }



   

}
