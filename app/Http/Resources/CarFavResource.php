<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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


        } else {
            $name = 'name_en';

        }
        return [
            "id" => $this->id,
            "name" => $this->$name ?? '',
            "description" => $this->description ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "fixed_price" => $this->fixed_price ?? 0,
            "rate" => $this->carComment->avg('rating') ?? 0,
        ];
    }
}