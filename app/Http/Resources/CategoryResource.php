<?php

namespace App\Http\Resources;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\SubCategoryResource;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "icon" => asset('images/categories')."/".$this->icon,
            "image" => asset('images/categories')."/".$this->image,
            "active" => $this->active,
            "subcategories"=> SubCategoryResource::collection($this->whenLoaded('subcategories')),
            "places"=> $this->when($this->subcategories->isEmpty(),PlaceResource::collection($this->places)),
        ];
    }
}
