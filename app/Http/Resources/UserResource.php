<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CountryResource;

class UserResource extends JsonResource
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
            "name" => $this->firstname.''.$this->lastname,
            "image" => asset('images/users')."/".$this->image,
            // "country" => $this->country()->pluck('flag_image'),
            "flag_image" => asset('images/countries')."/".$this->country->flag_image?? '',
            // "flag_image" => asset('images/countries')."/".$this->country()->select('flag_image')->get()[0],
            // 'image'     => asset('images/products/' . $this->country()->$flag_image),

        ];
    }
}
