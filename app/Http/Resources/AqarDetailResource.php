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
            $postion = __('site.ar.car_positions');
            $floor = __('site.ar.floor');
            $service = __('site.ar.service');
            $bathroom = __('site.ar.bathroom');
            $free_service = __('site.ar.free_service');
            $laundry = __('site.ar.laundry');
            $kitchen = __('site.ar.kitchen');
            $crew = __('site.ar.crew');
            $conditioning_type = __('site.ar.conditioning_type');
            $another_room = __('site.ar.another_room');
            $floor_number = __('site.ar.floor_number');

        } else {
            $name = 'name_en';
            $postion = __('site.en.car_positions');
            $floor = __('site.en.floor');
            $service = __('site.en.service');
            $bathroom = __('site.en.bathroom');
            $free_service = __('site.en.free_service');
            $laundry = __('site.en.laundry');
            $kitchen = __('site.en.kitchen');
            $crew = __('site.en.crew');
            $conditioning_type = __('site.en.conditioning_type');
            $another_room = __('site.en.another_room');
            $floor_number = __('site.en.floor_number');

        }
        return [
            "id" => $this->id,
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
            "fixed_price" => $this->fixed_price ?? '',
            "changed_price" => $this->changed_price ?? '',
            "category" => new staticResource($this->category),

            $postion => staticResource::collection(CarPosition::whereIn('id', json_decode($this->car_position_id))->get()),
            $floor => staticResource::collection(Floor::whereIn('id', json_decode($this->floor_id))->get()),
            $service => staticResource::collection(Service::whereIn('id', json_decode($this->service_id))->get()),
            $bathroom => staticResource::collection(Bathroom::whereIn('id', json_decode($this->bathroom_id))->get()),
            $free_service => staticResource::collection(FreeService::whereIn('id', json_decode($this->free_service_id))->get()),
            $laundry => staticResource::collection(Laundry::whereIn('id', json_decode($this->laundry_id))->get()),
            $kitchen => staticResource::collection(Kitchen::whereIn('id', json_decode($this->kitchen_id))->get()),
            $crew => staticResource::collection(Crew::whereIn('id', json_decode($this->crew_id))->get()),
            $conditioning_type => staticResource::collection(ConditionType::whereIn('id', json_decode($this->conditioning_type_id))->get()),
            $another_room => staticResource::collection(AnotherRoom::whereIn('id', json_decode($this->another_room_id))->get()),
            $floor_number => staticResource::collection(FloorNumber::whereIn('id', json_decode($this->floor_number_id))->get()),

        ];
    }
}
