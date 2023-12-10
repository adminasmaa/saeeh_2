<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;
use App\Http\Resources\CarReviewResource;

use App\Models\CarComment;
use App\Models\CarReview;
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

        if ($lang == 'en') {
            $currency ='currency';

        } else {
            $currency ='currency_ar';

        }
        $cur=$this->city->country->currency;
           
        return [
            "id" => $this->id ?? '',
            "name" => $this->name ?? '',
            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',
            // "policy_place" =>preg_replace( "/\r|\n|\t|&|;|nbsp/", "", strip_tags($this->policy_place) ) ?? '',
            
            "policy_place" =>  html_entity_decode($this->policy_place) ?? '',
            "color" => $this->color ?? '',

            "car_delivery_date" =>  $this->car_delivery_date!='00:00:00' ? $this->car_delivery_date : NULL,

            "year" => $this->year ?? '',
            "car_numbers" => $this->car_numbers ?? '',
            "image" => asset('images/cars') . "/" . $this->main_image_ads,
            "video" =>  $this->videos!=NULL ? asset('images/cars') . "/" . $this->videos : NULL,
            'path' => asset('images/cars') . "/",
            'images' =>explode(",",$this->images) ?? [],
            "reviews" => CarReviewResource::collection($this->CarReview)->unique('name'),
            "favorite" => (count(CarUser::where('car_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),
            "count_comment"=>$this->carComment->count() ?? 0,
            "count_review"=>$this->CarReview->count() ?? 0,
            // 'total' => $this->carComment->count() + $this->CarReview->count(),
            'total' => $this->CarReview->count()?? 0,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            "exchange_KWD"=>number_format((json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from='.$cur.'&to=KWD'))->result->KWD), 5),

            "comments" => CommentCarResource::collection($this->carComments),

            "rate" => round($this->carReview->avg('rate')) ?? 0,

            // "rate" => round(CarReview::where('user_id', '=', Auth::id())->where('car_id', '=',$this->id)->avg('rate')) ?? 0,

            "fixed_price" => $this->fixed_price ?? 0,

            "Reservation_deposit" => $this->fixed_price ?? 0,
            
            // "Reservation_deposit" => $this->day_count ? $this->total_price/$this->day_count :$this->total_price/1,

            "changed_price" => $this->changed_price?(json_decode($this->changed_price)->day_num[0]?json_decode($this->changed_price) : NULL):NULL,
            "category" => new staticResource($this->categories),
        ];
    }
}
