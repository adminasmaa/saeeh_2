<?php

namespace App\Http\Resources;
use App\Http\Resources\CategoryOnlyResource;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class CityCategoryResource extends JsonResource
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

//        $city_id = $this->id;
//        $categories = [];
//        foreach (Category::where('type', '=', 0)->where('parent_id',null)->get() as $cat) {
//
//            $city = json_decode($cat->city_id);
//
//            if (in_array($city_id, $city)) {
//                array_push($categories, $cat);
//
//            }
//        }
        return [
            "id" => $this->id,
            "name" => $this->$name,
            "image" => asset('images/cities') . "/" . $this->image,
            "active" => $this->active,
            "categories" => CategoryOnlyResource::collection($this->categoriesTotal),
        ];
    }
}
