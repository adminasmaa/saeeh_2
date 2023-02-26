<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            "flag_image" => asset('images/countries')."/".$this->flag_image,
            "code" => $this->code,
            "image" => asset('images/countries')."/".$this->image,
            "currency" => $this->currency,
            "display_data" => $this->display_data,
            "active" => $this->active,
            'cities' => CityOnlyResource::collection($this->cities),
        ];
    }
}
