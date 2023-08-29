<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;
use App\Http\Resources\CarReviewResource;

use App\Models\CarUser;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',

            "color" => $this->color ?? '',
            "car_delivery_date" => $this->car_delivery_date ?? '',
            "year" => $this->year ?? '',
            "car_numbers" => $this->car_numbers ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "videos" => asset('images/cars') . "/" . $this->videos,
            'path' => asset('images/cars') . "/",
            'images' =>explode(",",$this->images) ?? [],
            "reviews" => CarReviewResource::collection($this->CarReview)->unique('name'),
            "favorite" => (count(CarUser::where('car_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),
            "count_comment"=>$this->carComment->count() ?? 0,
            "count_review"=>$this->CarReview->count() ?? 0,
            'total' => $this->carComment->count() + $this->CarReview->count(),

            "comments" => CommentResource::collection($this->carComment),
            "rate" => round($this->carComment->avg('rating')) ?? 0,
            "fixed_price" => $this->fixed_price ?? 0,
            "Reservation_deposit" => $this->fixed_price ?? 0,

            "changed_price" => json_decode($this->changed_price) ?? [],
            "category" => new staticResource($this->categories),



        ];
    }
}
