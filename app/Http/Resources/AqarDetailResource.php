<?php

namespace App\Http\Resources;

use App\Http\Resources\staticResource;

use App\Models\AqarComment;
use App\Models\AqarReview;
use App\Models\AquarUser;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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
        $exchangecurrency=json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from=MAD&to=KWD'))->result->KWD;
    

        if ($lang == 'ar') {
            $name = 'name_ar';
            $currency ='currency_ar';


        } else {
            $name = 'name_en';
            $currency ='currency';


        }
        $cur=$this->city->country->currency;
            return [
                "id" => $this->id ?? '',
                "name" => $this->$name ?? '',
    //            "description" => html_entity_decode(substr($this->description, 0, 125)) ?? '',
                "description" => preg_replace("/\r|\n/", "", strip_tags($this->description)) ?? '',
                "distance" => $this->distance ?? 0,
                "latitude" => $this->latitude ?? 0,
                "longitude" => $this->longitude ?? 0,
                "address" => $this->details ?? '',
                "policy_place" =>  html_entity_decode($this->policy_place) ?? '',
                "roomnumbers"=>$this->roomnumbers($this->category_id,$this->id)?? NULL,
                "floornumbers"=>$this->floornumbers($this->category_id,$this->id)?? NULL,
                "unitnumber"=>$this->unitnumber?? NULL,
                "hallnumber"=>$this->hallnumber?? NULL,
                "bathroomnumber"=>$this->bathroomnumber?? NULL,
                "personnumber"=>$this->personnumber?? NULL,
                 "space"=>$this->space??NULL,
    //            "time" => $this->time ?? '',
                "time_from" => $this->time_from ?? '',
                "time_to" => $this->time_to ?? '',
                "image" => asset('images/aqars') . "/" . $this->main_image,
                "video" =>  $this->videos!=NULL ? asset('images/aqars') . "/" . $this->videos : NULL,
                'path' => asset('images/aqars') . "/",
                'images' => explode(",", $this->images) ?? [],
                "comision" => $this->comision ?? '',
                "area" => $this->area->name ?? '',
                "favorite" => (count(AquarUser::where('aqar_id', '=', $this->id)->where('user_id', '=', Auth::id())->get()) > 0 ? true : false),
                "count_review" => $this->aqarReview->count() ?? 0,
                "count_comment" => $this->aqarComment->count() ?? 0,
                // 'total' => $this->aqarReview->count() + $this->aqarComment->count(),
                'total' => $this->aqarReview->count()?? 0 ,
                "currency" => $this->city->country->$currency?? '',
                "currency_code" => $this->city->country->currency?? '',
                "rate" =>$this->avgRating,
                "exchange_KWD"=>number_format((json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from='.$cur.'&to=KWD'))->result->KWD), 5),
                // "rate" => round($this->aqarReview->avg('rate')) ?? 0,
                // "rate" => round(AqarReview::where('user_id', '=', Auth::id())->where('aqar_id', '=',$this->id)->avg('rate')) ?? 0,
                "comments" => CommentResource::collection($this->aqarComments),
                "reviews" => AqarReviewResource::collection($this->aqarReview),
                "fixed_price" =>$this->fixed_price ?? 0,

                "Reservation_deposit" => $this->fixed_price ?? 0,
    
                // "Reservation_deposit" => $this->day_count ? $this->total_price/$this->day_count :$this->total_price/1,
    
                "changed_price" =>$this->changed_price?(json_decode($this->changed_price)->person_num[0]?json_decode($this->changed_price) : NULL):NULL,
                "category" => new staticResource($this->category),
                'aqarSection' => $this->aqarSection
    
            ];
       
    }
}
