<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\CarBooking;
use Carbon\Carbon;
use App\Http\Resources\CarDetailOnlyResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarBookingDetailResource extends JsonResource
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
            "is_fixed"  =>$this->car['fixed_price']?true:false,
            "fixed_price" => $this->fixed_price ?? 0,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            "Reservation_deposit" => $this->fixed_price ?? $this->total_price/$this->day_count,
            "delivery_date" =>$this->delivery_date??'',
            "reciept_date"  =>$this->reciept_date??'',
            "delivery_hour" =>$this->delivery_hour??'',
            "receipt_hour"  =>$this->receipt_hour??'',
            "place_arrive" =>$this->place_arrive??'',
            "place_leave"  =>$this->place_leave??'',
            "status" => $this->bookingStatus->$status ?? '', 
            "status_id" => $this->booking_status_id,  
            "changed_price" =>json_decode($this->changed_price) ?? NULL,
            'total' => $this->total_price ?? 0,
            "created_at" => $this->created_at ?? '',
            'cancel_reason' => $this->cancle_reason ?? '',
            "investor_name"=> $this->car->user->firstname ." ".$this->car->user->lastname,
            "investor_phone"=>$this->car->user->country_code.$this->car->user->phone,
            "cancel_byme" => $this->cancel_user_id ==Auth::id()?true:false,
            'invoice_id'=>$this->payment->invoice_id ?? NULL,
            "exchange_KWD"=>number_format((json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from='.$cur.'&to=KWD'))->result->KWD), 5),
            "data"=>new CarDetailOnlyResource($this->car),

        ];


    }
}
