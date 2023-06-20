<?php

namespace App\Http\Resources;

use App\Models\Aqar;
use App\Models\AqarBooking;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AqarBookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request)
    {
        $delivery_date = $this->delivery_date;
        $reciept_date = $this->reciept_date;
//
//        $dates = $this->getBetweenDates($delivery_date, $reciept_date);

        $startDate = Carbon::parse($delivery_date);
        $endDate = Carbon::parse($reciept_date);
        $diff = $endDate->diffInDays($startDate);


        $aqar=Aqar::where('aqar_id',$this->aqar_id)->first();


        $aqar->update(['day_count'=>$diff]);

        return [
            "id" => $this->id,
            "book_status" => $this->book_status ?? '',
            "aqar_id" => $this->aqar_id ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            "delivery_date" => $this->delivery_date ?? '',
            "reciept_date" => $this->reciept_date ?? '',
            'day_count' => $diff,
            'total' => $diff * $this->fixed_price,
            "place_arrive" => $this->place_arrive ?? '',
            "place_leave" => $this->place_leave ?? '',
            "visit_count" => $this->visit_count ?? '',
            "note" => $this->note ?? ''

        ];


    }
}
