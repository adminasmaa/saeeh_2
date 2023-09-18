<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;
use App\Http\Resources\CarReviewResource;

use App\Models\CarComment;
use App\Models\CarReview;
use App\Models\CarUser;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarDetailOnlyResource extends JsonResource
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

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',
            "color" => $this->color ?? '',
            "car_delivery_date" => $this->car_delivery_date ?? '',
            "year" => $this->year ?? '',
            "car_numbers" => $this->car_numbers ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "video" => asset('images/cars') . "/" . $this->videos,
            'path' => asset('images/cars') . "/",
            "favorite" => (count(CarUser::where('car_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),
            "count_comment"=>$this->carComment->count() ?? 0,
            "count_review"=>$this->CarReview->count() ?? 0,
            'total' => $this->carComment->count() + $this->CarReview->count(),
           "rate" => round($this->carReview->avg('rate')) ?? 0,
            "fixed_price" => $this->fixed_price ?? 0,
            "Reservation_deposit" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price?(json_decode($this->changed_price)->day_num[0]?json_decode($this->changed_price) : NULL):NULL,



        ];
    }
}
