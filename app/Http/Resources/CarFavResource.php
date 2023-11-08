<?php

namespace App\Http\Resources;

use App\Models\CarComment;
use App\Models\CarReview;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarFavResource extends JsonResource
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
            $currency ='currency_ar';


        } else {
            $name = 'name_en';
            $currency ='currency';

        }
        return [
            "id" => $this->id,
            "name" => $this->$name ?? '',
            "favorite" =>true,
            "description" => $this->description ?? '',
            "policy_place" =>  html_entity_decode($this->policy_place) ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "fixed_price" => $this->fixed_price ?? 0,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            // "rate" => round($this->carReview->avg('rate')) ?? 0,
            "rate" =>$this->avgRating,

            // "rate" => round(CarReview::where('user_id', '=', Auth::id())->where('car_id', '=',$this->id)->avg('rate')) ?? 0,
        ];
    }
}
