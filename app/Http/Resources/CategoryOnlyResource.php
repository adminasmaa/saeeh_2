<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryOnlyResource extends JsonResource
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
            "id" => $this->id,
            "city_id " => $this->city_id ,
            "name" => $this->name,
            "name_en" => $this->name_en,
            "icon" => $this->icon,
            "image" => asset('images/categories')."/".$this->image,
            "active" => $this->active,
        ];
    }
}
