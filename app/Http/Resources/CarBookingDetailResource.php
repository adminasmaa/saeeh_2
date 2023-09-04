<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\CarBooking;
use Carbon\Carbon;
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

        if ($lang == 'ar') {
            $name = 'name_ar';


        } else {
            $name = 'name_en';


        }

        return [
            "id" => $this->id,
            "name" => $this->car()->select('name_ar')->get()[0]->name_ar ?? '',
            'day_count' => $this->day_count,
            "fixed_price" => $this->fixed_price ?? 0,
            'total' => $this->day_count * $this->fixed_price,
            "status" => $this->bookingStatus()->select('status_ar')->get()[0]->status_ar ?? '',   
            "image" => asset('images/cars') . "/" . $this->car()->select('main_image_ads')->get()[0]->main_image_ads,
            'path' => asset('images/cars') . "/",
            "changed_price" => json_decode($this->changed_price) ?? [],
            "created_at" => $this->created_at ?? ''

        ];


    }
}