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
        $lang = $request->header('localization');

        if ($lang == 'ar') {
            $name = 'name_ar';

        } else {
            $name = 'name_en';


        }
        return [
            "id" => $this->id,
            "name" => $this->$name,

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',

            "icon" => asset('images/categories')."/".$this->icon,
            "image" => asset('images/categories')."/".$this->image,
            "subcategories"=> (count($this->subcategories)>0 ? true : false),
            "active" => $this->active,
        ];
    }
}
