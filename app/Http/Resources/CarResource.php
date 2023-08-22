<?php

namespace App\Http\Resources;

use App\Models\CarUser;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            "id" => $this->id,
            "name" => $this->name ?? '',

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',

            "favorite" => (count(CarUser::where('car_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),

            "comment_text" => $this->comment_text ?? '',
            "year" => $this->year ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "color" => $this->color ?? '',
//            "category" => $this->category ?? '',
            "car_numbers" => $this->car_numbers ?? '',
            "car_delivery_date" => $this->car_delivery_date ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price ?? '',
            "category" => new staticResource($this->categories),

        ];
    }
}
