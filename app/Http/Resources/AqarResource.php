<?php

namespace App\Http\Resources;

use App\Models\AqarComment;
use App\Models\AqarReview;
use App\Models\AquarUser;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AqarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $lang = $request->header('localization');

        if ($lang == 'en') {
            $name = 'name_en';
            $currency ='currency';
        } else {
            $name = 'name_ar';
            $currency ='currency_ar';

        }

        return [
            "id" => $this->id,
            "name" => $this->$name,
            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',
            "address" => $this->details ?? '',

            "category" => new staticResource($this->category),
            // "status" => $this->status ?? '',
//            "rate" => $this->aqarComment->avg('rating') ?? '',
            "favorite" => (count(AquarUser::where('aqar_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),
//            "rate" => round($this->aqarComment->avg('rating')) ?? 0,
            // "rate" => round(AqarReview::where('user_id', '=', Auth::id())->where('aqar_id', '=',$this->id)->avg('rate')) ?? 0,
        //    "rate" => round($this->aqarReview->avg('rate')) ?? 0,
              "rate" =>$this->avgRating,
            // "policy_place" =>  html_entity_decode($this->policy_place) ?? '',

            // "distance" => $this->distance ?? '',
            // "time" => $this->time ?? '',
            "image" => asset('images/aqars')."/".$this->main_image,
            // "comment_text" => $this->comment_text ?? '',
            // "comision" => $this->comision ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            // "Reservation_deposit" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price?(json_decode($this->changed_price)->person_num[0]?json_decode($this->changed_price) : NULL):NULL,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            'roomnubers'=>$this->total_rooms??0


        ];
    }
}
