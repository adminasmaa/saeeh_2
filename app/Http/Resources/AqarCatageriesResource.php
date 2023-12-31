<?php

namespace App\Http\Resources;


use App\Http\Resources\AqarDetailResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AqarCatageriesResource extends JsonResource
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
            $description = 'description_ar';
        } else {
            $name = 'name_en';
            $description = 'description_en';

        }
        return [
            "id" => $this->id,
            "name" => $this->$name,
            "description" =>strip_tags($this->$description) ?? '',

            "image" => asset('images/categories') . "/" . $this->image,
            "active" => $this->active ?? '',
            'roomnumbers'=>$this->roomnumbers($this->id),
            'floornumbers'=>$this->floornumbers($this->id),

//            "aqar" =>AqarDetailResource::collection($this->aqars)

        ];
    }
}
