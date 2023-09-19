<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\CarBooking;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarBookingListResource extends JsonResource
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
            "id" => $this->car()->select('id')->get()[0]->id ?? 0,
            "book_id"=>$this->id,
            "name" => $this->car()->select($name)->get()[0]->$name ?? '',
            'day_count' => $this->day_count,
            "fixed_price" => $this->fixed_price ?? 0,
            "Reservation_deposit" => $this->fixed_price ?? $this->total_price/$this->day_count,
            'total' => $this->total_price ?? 0,
            "status" => $this->bookingStatus()->select($status)->get()[0]->$status ?? '',   
            "image" => asset('images/cars') . "/" . $this->car()->select('main_image_ads')->get()[0]->main_image_ads ?? '',
            "changed_price" => json_decode($this->changed_price) ?? NULL,
            "created_at" => $this->created_at ?? ''

        ];


    }
}
