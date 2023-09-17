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
            "is_fixed"  =>$this->aqar['fixed_price']?true:false,
            "fixed_price" => $this->fixed_price ?? 0,
            "delivery_date" =>$this->delivery_date??'',
            "reciept_date"  =>$this->reciept_date??'',
            "Reservation_deposit" => $this->fixed_price ?? 0,
            "changed_price" => $this->aqar['changed_price']?(json_decode($this->aqar['changed_price'])->person_num[0]?json_decode($this->aqar['changed_price']) : NULL):NULL,
            'total' => $this->day_count * $this->fixed_price,
            "status_id" => $this->booking_status_id,
            'cancel_reason' => $this->cancle_reason,
            "status" => $this->bookingStatus()->select($status)->get()[0]->$status ?? '', 
            "created_at" => $this->created_at ?? '',
            "investor_name"=> $this->aqar->user->firstname ." ".$this->aqar->user->lastname,
            "investor_phone"=>$this->aqar->user->country_code.$this->aqar->user->phone,
            "data"   =>new AqarDetailOnlyResource($this->aqar),
            
        ];


    }
}
