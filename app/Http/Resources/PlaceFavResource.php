<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceFavResource extends JsonResource
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


        } else {
            $name = 'name_en';

        }
            return [
                "id" => $this->id,
                "name" => $this->$name ?? '',

                "description" =>$this->address ?? '',
                "image" => asset('images/places') . "/" . $this->display_photo,
                "phone_one" => $this->phone_one ?? 0,
                "rate" => $this->placeComments->avg('rating') ?? 0,

            ];
        }
    }
