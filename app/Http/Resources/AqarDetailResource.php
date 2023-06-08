<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;

use Illuminate\Http\Resources\Json\JsonResource;

class AqarDetailResource extends JsonResource
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
            "id" => $this->id ?? '',
            "name" => $this->$name ?? '',
            "description" => $this->description ?? '',
//            "status" => $this->status ?? '',
            "distance" => $this->distance ?? 0,
            "time" => $this->time ?? '',
            "banner" => asset('images/aqars') . "/" . $this->main_image_ads,
            "videos" => asset('images/aqars') . "/" . $this->videos,
            'path' => asset('images/aqars') . "/",
            'images' =>explode(",",$this->images) ?? [],
//            "comment_text" => $this->comment_text ?? '',
            "comision" => $this->comision ?? '',
            "area" => $this->area->name ?? '',
            "favorite" => (count($this->favoriteuser)>0 ? true : false),

            "rate" => $this->aqarComment->avg('rating') ?? 0,
            "aqarReview" => AqarReviewResource::collection($this->aqarReview)->unique('name'),
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => json_decode($this->changed_price) ?? [],
            "category" => new staticResource($this->category),
            'aqarSection' => $this->aqarSection->map(function ($category) {
                $category = $category->AqarDetail;
                return $category;
            })


        ];
    }
}
