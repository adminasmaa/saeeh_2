<?php

namespace App\Http\Resources;

use App\Models\Aqar;
use App\Models\AqarBooking;
use Carbon\Carbon;
use App\Http\Resources\AqarDetailOnlyResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AqarBookDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request)
    {
        $lang = $request->header('localization');
        $exchangecurrency=json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from=MAD&to=KWD'))->result->KWD;

        if ($lang == 'en') {
            $name = 'name_en';
            $status ='status_en';
            $currency ='currency';


        } else {
            $name = 'name_ar';
            $status ='status_ar';
            $currency ='currency_ar';


        }

        $cur=$this->city->country->currency;
        return [
            "id" => $this->id,
            'day_count' => $this->day_count,
            "is_fixed"  =>$this->aqar['fixed_price']?true:false,
            "fixed_price" => $this->fixed_price ?? 0,
            "delivery_date" =>$this->delivery_date??'',
            "reciept_date"  =>$this->reciept_date??'',
            "Reservation_deposit" => $this->fixed_price ?? $this->total_price/$this->day_count,
            "changed_price" =>json_decode($this->changed_price) ?? NULL,
            'total' => $this->total_price,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            'person_num'=>$this->person_num,
            "status_id" => $this->booking_status_id,
            'cancel_reason' => $this->cancle_reason ?? '',
            "status" => $this->bookingStatus->$status ?? '',
            "created_at" => $this->created_at ?? '',
            "investor_name"=> $this->aqar->user->firstname ." ".$this->aqar->user->lastname,
            "investor_phone"=>$this->aqar->user->country_code.$this->aqar->user->phone,
            "cancel_byme" => $this->cancel_user_id ==Auth::id()?true:false,
            'invoice_id'=>$this->payment->invoice_id ?? NULL,
            "exchange_KWD"=>number_format((json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from='.$cur.'&to=KWD'))->result->KWD), 5),
            "data"   =>new AqarDetailOnlyResource($this->aqar),
            
        ];


    }
}
