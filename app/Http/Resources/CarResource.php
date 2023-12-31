<?php

namespace App\Http\Resources;

use App\Models\CarComment;
use App\Models\CarReview;
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
        $lang = $request->header('localization');
        if ($lang == 'ar') {
            $currency ='currency_ar';

        } else {
            $currency ='currency';

        }
        return [
            "id" => $this->id,
            "name" => $this->name ?? '',

            "description" => preg_replace("/\r|\n/", "", strip_tags($this->description)) ?? '',

            // "policy_place" =>  html_entity_decode($this->policy_place) ?? '',

            // "car_delivery_date" => $this->car_delivery_date ?? '',
            "favorite" => (count(CarUser::where('car_id', '=', $this->id)->where('user_id', '=', Auth::id())->get()) > 0 ? true : false),
            // "count_comment"=>$this->carComment->count() ?? 0,
            // "count_review"=>$this->CarReview->count() ?? 0,
            // "comments" => CommentCarResource::collection($this->carComment),
        //    "comment_text" => $this->comment_text ?? '',
            // "year" => $this->year ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            // "color" => $this->color ?? '',
//            "category" => $this->category ?? '',
            // "car_numbers" => $this->car_numbers ?? '',
//            "car_delivery_date" => $this->car_delivery_date ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price?(json_decode($this->changed_price)->day_num[0]?json_decode($this->changed_price) : NULL):NULL,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
//            "rate" => round($this->carComment->avg('rating')) ?? 0,
           // "rate" => round(CarReview::where('user_id', '=', Auth::id())->where('car_id', '=',$this->id)->avg('rate')) ?? 0,
            "rate" => $this->avgRating,

            "category" => new staticResource($this->categories),

        ];
    }
}
