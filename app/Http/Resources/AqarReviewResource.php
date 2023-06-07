<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AqarReviewResource extends JsonResource
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
            "id" => $this->reviewElement->id,

            "name" => $this->reviewElement->$name ?? '',
            "value" => $this->RateTotal($this->reviewElement->id) / $this->CountUser($this->reviewElement->id) ?? 0,

        ];
    }


}
