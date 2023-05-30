<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryOnlyResource;

class PlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $lang = $request->header('localization');

        if ($lang == 'ar') {
            $name = 'name_ar';
            $description='descrption_ar';
        } else {
            $name = 'name_en';
            $description='descrption_en';

        }

        return [
            "id" => $this->id ?? '',
            'name' => $this->$name ?? '',
            'description' => $this->$description ?? '',
            "address " => $this->address ?? '',
            "facebook" => $this->facebook ?? '',
            "instagram" => $this->instagram ?? '',
            "twitter" => $this->twitter ?? '',
            "phone_one" => $this->phone_one ?? '',
            "phone_two" => $this->phone_two ?? '',
            "longitude" => $this->longitude ?? '',
            "latitude" => $this->latitude ?? '',
            "path"=>asset('images/places/'),
            "images" => $this->images,
            "display_photo" => asset('images/places') . "/" . $this->display_photo,
            "notify_photo " => asset('images/places') . "/" . $this->notify_photo,
            "created_at" => $this->created_at ?? '',
            'comments' => $this->placeComments ?? '',
            'category' => new CategoryOnlyResource($this->category),
        ];
    }
}
