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

        if ($lang == 'en') {
            $name = 'name_en';
            $status ='status_en';


        } else {
            $name = 'name_ar';
            $status ='status_ar';


        }
        return [
            "id" => $this->id,
            'day_count' => $this->day_count,
            "is_fixed"  =>$this->car['fixed_price']?true:false,
            "fixed_price" => $this->fixed_price ?? 0,
            "Reservation_deposit" => $this->fixed_price ?? 0,
            'total' => $this->day_count * $this->fixed_price,
            "delivery_date" =>$this->delivery_date??'',
            "reciept_date"  =>$this->reciept_date??'',
            "delivery_hour" =>$this->delivery_hour??'',
            "receipt_hour"  =>$this->receipt_hour??'',
            "place_arrive" =>$this->place_arrive??'',
            "place_leave"  =>$this->place_leave??'',
            "status" => $this->bookingStatus()->select($status)->get()[0]->$status ?? '', 
            "status_id" => $this->booking_status_id,  
            "changed_price" => $this->car['changed_price']?(json_decode($this->car['changed_price'])->day_num[0]?json_decode($this->car['changed_price']) : NULL):NULL,
            "created_at" => $this->created_at ?? '',
            "investor_name"=> $this->aqar->user->firstname ." ".$this->aqar->user->lastname,
            "investor_phone"=>$this->aqar->user->country_code.$this->aqar->user->phone,
            "data"=>new CarDetailOnlyResource($this->car),
           

        ];


    }
}
