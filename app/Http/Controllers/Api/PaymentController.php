<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AqarBooking;
use App\Models\CarBooking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;


class PaymentController extends Controller
{

    public $mfObj;

    //-----------------------------------------------------------------------------------------------------------------------------------------
    
        /**
         * create MyFatoorah object
         */
        public function __construct() {
            $this->mfObj = new PaymentMyfatoorahApiV2(config('myfatoorah.api_key'), config('myfatoorah.country_iso'), config('myfatoorah.test_mode'));
        }

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
            'customer_reference' => 'nullable',
            'invoice_reference' => 'nullable',
            'value_of_currency_paid' => 'nullable',
            'batch_number' => 'nullable',
            'operation_number' => 'nullable',
            'authorization_number' => 'nullable',
            'follow_up_number' => 'nullable',
            'reference_number' => 'nullable',
            'transaction_date_time' => 'nullable',
            'customer_email' => 'nullable',
            'customer_phone' => 'nullable',
            'customer_name' => 'nullable',
            'total_before' => 'nullable',
            'total_after' => 'nullable',
            'vat_amount' => 'nullable',
            'price' => 'nullable',
            'quantity' => 'nullable',
            'element' => 'nullable',
            'type'=>Rule::in(['aqar','car']),
            'created_at'=>'nullable'

        ];
        $customMessages = [
            'required' => __('validation.attributes.required'),
            'type' => __('The sort parameter accept only "aqar" or "car" value'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondError('Validation Error.', $validator->errors(), 400);

        } else {

            $InvoiceId = $request->InvoiceId;

            $data1   = $this->mfObj->getPaymentStatus($InvoiceId, 'InvoiceId');

            return $data1 ;

            $data=Payment::updateOrCreate([

                'invoice_id' => $data1->invoice_id,

                'invoice_status' => $data1->invoice_status,

                'invoice_value' => $data1->invoice_value,

                'book_id' => $data1->book_id,

                'user_id' => Auth::id(),

                'expiry_date' => $data1->expiry_date,

                'create_date' => $data1->create_date,

                'invoice_display_value' => $data1->invoice_display_value,

                'invoice_reference' => $data1->invoice_reference,

                'payment_getway' => $data1->payment_getway,

                'transaction_id' => $data1->transaction_id,

                'authorization_id' => $data1->authorization_id,

                'type'=>$data1->type,

                'customer_reference'=>$data1->customer_reference,

                'invoice_reference'=>$data1->invoice_reference,

                'value_of_currency_paid'=>$data1->value_of_currency_paid,

                'batch_number'=>$data1->batch_number,

                'operation_number'=>$data1->operation_number,

                'authorization_number'=>$data1->authorization_number,

                'follow_up_number'=>$data1->follow_up_number,

                'reference_number'=>$data1->reference_number,

                'transaction_date_time'=>$data1->transaction_date_time,

                'customer_email'=>$data1->customer_email,

                'customer_phone'=>$data1->customer_phone,

                'customer_name'=>$data1->customer_name,

                'total_before'=>$data1->total_before,

                'total_after'=>$data1->total_after,

                'vat_amount'=>$data1->vat_amount,

                'price'=>$data1->price,

                'quantity'=>$data1->quantity,

                'element'=>$data1->element,

                'response'=>$data1->all_data
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

    public function get_paymentstatus(Request $request)
    {

        try {
            $InvoiceId = $request->InvoiceId;
            $data      = $this->mfObj->getPaymentStatus($InvoiceId, 'InvoiceId');

            if ($data->InvoiceStatus == 'Paid') {
                $msg = trans('site.Invoice is paid.');
            } 
            else{
                $msg=trans('site.paid not complete please try again');
            }
            return $this->respondSuccess($data, $msg);
        } catch (\Exception $e) {
            return $this->respondError('Error.',  $e->getMessage(), 400);
        }
       
    }
      

}
