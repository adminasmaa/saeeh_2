<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            "id" => $this->id,
            'name' => $this->$name ?? '',
            'description' => $this->$description ?? '',
            "name_ar" => $this->name_ar ?? '',
            "name_en" => $this->name_en ?? '',
            "descrption_ar" => $this->descrption_ar ?? '',
            "descrption_en" => $this->descrption_en ?? '',
            "address " => $this->address ?? '',
            "place_order" => $this->place_order ?? '',
            "place_error" => $this->place_error ?? '',
            "const_from" => $this->const_from ?? '',
            "const_to" => $this->const_to ?? '',
            "phone_one" => $this->phone_one ?? '',


            "const_time" => $this->const_time ?? '',
            "seen_counter" => $this->seen_counter ?? '',
            "time_check" => $this->time_check ?? '',
            "diff_time" => $this->diff_time ?? '',
            "phone_two" => $this->phone_two ?? '',
            "delivery" => $this->delivery ?? '',
            "longitude" => $this->longitude ?? '',
            "latitude" => $this->latitude ?? '',

            "google_mark_link" => $this->google_mark_link ?? '',
            "place_link" => $this->place_link ?? '',
            "rest_two" => $this->rest_two ?? '',
            "rest_one" => $this->rest_one ?? '',
            "social_media" => $this->social_media ?? '',
            "rest_three" => $this->rest_three ?? '',
            "share_link" => $this->share_link ?? '',
            "display_photo" => asset('images/places') . "/" . $this->display_photo,
            "notify_photo " => asset('images/places') . "/" . $this->notify_photo,
            "created_at" => $this->created_at ?? '',
            'comments' => $this->placeComments ?? '',
            'category' => new CategoryOnlyResource($this->category),
        ];
    }
}
