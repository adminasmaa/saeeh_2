<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlacesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id ?? '',
            "address" => $this->address ?? '' ,
            "name" => $this->name ?? '',
            "phone" => $this->phone ?? '',
            "phone2" => $this->phone2 ?? '',
            'placetables' => $this->placetables ?? '',

            "display_photo" => asset('images/places')."/".$this->display_photo,
        ];
    }
}
