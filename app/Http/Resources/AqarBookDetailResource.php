<?php

namespace App\Http\Resources;

use App\Models\Aqar;
use App\Models\AqarBooking;
use Carbon\Carbon;
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

        if ($lang == 'ar') {
            $name = 'name_ar';


        } else {
            $name = 'name_en';


        }

        return [
            "id" => $this->id,
            "name" => $this->aqar()->select('name_ar')->get()[0]->name_ar ?? '',
            'day_count' => $this->day_count,
            "fixed_price" => $this->fixed_price ?? 0,
            'total' => $this->day_count * $this->fixed_price,
            "status" => $this->bookingStatus()->select('status_ar')->get()[0]->status_ar ?? '',   
            "image" => asset('images/aqars') . "/" . $this->aqar()->select('main_image')->get()[0]->main_image,
            'path' => asset('images/aqars') . "/",
            "changed_price" => json_decode($this->changed_price) ?? [],
            "created_at" => $this->created_at ?? ''

        ];


    }
}
