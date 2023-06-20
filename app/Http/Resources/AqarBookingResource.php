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
        $lang = $request->header('localization');

        if ($lang == 'ar') {
            $name = 'name_ar';


        } else {
            $name = 'name_en';


        }

        $delivery_date = $this->delivery_date;
        $reciept_date = $this->reciept_date;
//
//        $dates = $this->getBetweenDates($delivery_date, $reciept_date);

        $startDate = Carbon::parse($delivery_date);
        $endDate = Carbon::parse($reciept_date);
        $diff = $endDate->diffInDays($startDate);


        $aqar=Aqar::where('id',$this->aqar_id)->first();


//        $aqar->update(['day_count'=>$diff]);

        return [
            "id" => $this->id,
            "status" => $this->status ?? '',
            'day_count' => $diff,
            'total' => $diff * $this->fixed_price,
            "name" => $this->$name ?? '',
            "description" => $this->description ?? '',
            "distance" => $this->distance ?? 0,
            "time" => $this->time ?? '',
            "banner" => asset('images/aqars') . "/" . $this->main_image_ads,
            "videos" => asset('images/aqars') . "/" . $this->videos,
            'path' => asset('images/aqars') . "/",
            'images' =>explode(",",$this->images) ?? [],
            "comision" => $this->comision ?? '',
            "area" => $this->area->name ?? '',
            "favorite" => (count($this->favoriteuser)>0 ? true : false),
            "rate" => $this->aqarComment->avg('rating') ?? 0,
            "aqarReview" => AqarReviewResource::collection($this->aqarReview)->unique('name'),
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => json_decode($this->changed_price) ?? [],
            "created_at" => $this->created_at ?? '',
            "category" => new staticResource($this->category),
            'aqarSection' => $this->aqarSection

        ];


    }
}
