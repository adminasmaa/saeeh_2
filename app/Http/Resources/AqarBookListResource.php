<?php

namespace App\Http\Resources;

use App\Models\Aqar;
use App\Models\AqarBooking;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AqarBookListResource extends JsonResource
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
            "id" => $this->aqar()->select('id')->get()[0]->id ?? 0,
            "book_id"=>$this->id,
            "name" => $this->aqar()->select($name)->get()[0]->$name ?? '',
            'day_count' => $this->day_count,
            "fixed_price" => $this->fixed_price ?? 0,
            "Reservation_deposit" => $this->fixed_price ?? $this->total_price/$this->day_count,
            'total' => $this->total_price,
            "status" => $this->bookingStatus()->select($status)->get()[0]->$status ?? '',   
            "image" => asset('images/aqars') . "/" . $this->aqar()->select('main_image')->get()[0]->main_image ??'',
            "changed_price" => json_decode($this->changed_price) ?? NULL,
            "cancel_byme" => $this->cancel_user_id ==Auth::id()?true:false,
            "created_at" => $this->created_at ?? ''

        ];


    }
}
