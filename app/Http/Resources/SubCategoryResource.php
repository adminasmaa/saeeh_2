<?php

namespace App\Http\Resources;
use App\Http\Resources\PlaceResource;

use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
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
            "image" => asset('images/categories')."/".$this->image,
            "places"=> PlaceResource::collection($this->places),
        ];
    }
}
