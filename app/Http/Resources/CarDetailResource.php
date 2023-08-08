<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;
use App\Http\Resources\CarReviewResource;

use Illuminate\Http\Resources\Json\JsonResource;

class CarDetailResource extends JsonResource
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


        return [
            "id" => $this->id ?? '',
            "name" => $this->name ?? '',
            "description" => $this->description ?? '',
           "color" => $this->color ?? '',
            "car_numbers" => $this->car_numbers ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "videos" => asset('images/cars') . "/" . $this->videos,
            'path' => asset('images/cars') . "/",
            'images' =>explode(",",$this->images) ?? [],
            "CarReview" => CarReviewResource::collection($this->CarReview)->unique('name'),
            "favorite" => (count($this->favoriteuser)>0 ? true : false),

            "rate" => $this->carComment->avg('rating') ?? 0,
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => json_decode($this->changed_price) ?? [],
            "category" => new staticResource($this->category),



        ];
    }
}
