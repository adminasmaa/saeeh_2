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
            'all_data'=>'nullable',
            'expiry_date' => 'nullable',
            'create_date' => 'nullable',
            'invoice_display_value' => 'nullable',
            'invoice_reference' => 'nullable',
            'payment_getway' => 'nullable',
            'transaction_id' => 'nullable',
            'authorization_id' => 'nullable',
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

                'expiry_date' => $request->expiry_date,

                'create_date' => $request->create_date,

                'invoice_display_value' => $request->invoice_display_value,

                'invoice_reference' => $request->invoice_reference,

                'payment_getway' => $request->payment_getway,

                'transaction_id' => $request->transaction_id,

                'authorization_id' => $request->authorization_id,

                'type'=>$request->type,

                'response'=>$request->all_data
            ]);
            if($request->invoice_status=='Paid' && $request->type=='aqar'){
               $success = AqarBooking::find($request->book_id)->update(['booking_status_id' => 3]);
               return $this->respondSuccess($success, trans('site.paid_successfully'));
            }else if($request->invoice_status=='Paid' && $request->type=='car'){
                $success = CarBooking::find($request->book_id)->update(['booking_status_id' => 3]);
                return $this->respondSuccess($success, trans('site.paid_successfully'));
            }else{
                return $this->respondError(trans('site.paid not complete please try again'), ['error' => trans('site.paid not complete please try again')], 402);
            }

            
        }

        

    }



   

}
