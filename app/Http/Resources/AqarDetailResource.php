<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;
use App\Models\AnotherRoom;
use App\Models\Area;
use App\Models\Bathroom;
use App\Models\CarPosition;
use App\Models\ConditionType;
use App\Models\Crew;
use App\Models\Floor;
use App\Models\FloorNumber;
use App\Models\FreeService;
use App\Models\Kitchen;
use App\Models\Laundry;
use App\Models\Service;
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
            "status" => $this->status ?? '',
            "distance" => $this->distance ?? '',
            "time" => $this->time ?? '',
            "image" => asset('images/aqars') . "/" . $this->main_image_ads,
            "videos" => asset('images/aqars') . "/" . $this->videos,
            'path' => asset('images/aqars') . "/",
            "images" => $this->images ?? '',
            "comment_text" => $this->comment_text ?? '',
            "comision" => $this->comision ?? '',
            "area" => $this->area->name ?? '',

            "rate" => $this->aqarComment->avg('rating') ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price ?? '',
            "category" => new staticResource($this->category),
            'aqarSection' => $this->aqarSection->map(function ($category) {
                $category = $category->AqarDetail;
                return $category;
            })


        ];
    }
}
