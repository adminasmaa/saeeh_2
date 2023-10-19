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
            $currency ='currency_ar';
        } else {
            $name = 'name_en';
            $currency ='currency';
        }
        return [
            "id" => $this->id ?? '',
            "name" => $this->$name ?? '',
            "code" => $this->code ?? '',
            "currency" => $this->$currency ?? '',
            "currency_code" => $this->city->country->currency?? '',
            "image" => asset('images/countries')."/".$this->image,
            "flag_image" => asset('images/countries')."/".$this->flag_image,
//            "active" => $this->active,
//            'cities' => CityOnlyResource::collection($this->cities),
        ];
    }
}
