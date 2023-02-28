<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryOnlyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
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
            "name" => $this->$name,
            "code" => $this->code,
            "currency" => $this->currency,
            "flag_image" => asset('images/countries')."/".$this->flag_image,
            "image" => asset('images/countries')."/".$this->image,
            "cities"=>CityOnlyResource::collection($this->cities)
        ];
    }
}