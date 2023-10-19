<?php

namespace App\Http\Resources;

use App\Models\AqarReview;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AqarFavResource extends JsonResource
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
            $currency ='currency_ar';


        } else {
            $name = 'name_en';
            $currency ='currency';

        }
            return [
                "id" => $this->id,
                "name" => $this->$name ?? '',
                "favorite" =>true,
                "currency" => $this->city->country->$currency?? '',
                "currency_code" => $this->city->country->currency?? '',
                "description" =>strip_tags($this->description) ?? '',
                "policy_place" =>  html_entity_decode($this->policy_place) ?? '',
                "latitude" => $this->latitude ?? 0,
                "longitude" => $this->longitude ?? 0,
                "address" => $this->details ?? '',
                "image" => asset('images/aqars') . "/" . $this->main_image,
                "fixed_price" => $this->fixed_price ?? 0,
                // "rate" => round(AqarReview::where('user_id', '=', Auth::id())->where('aqar_id', '=',$this->id)->avg('rate')) ?? 0,
                "rate" => round($this->aqarReview->avg('rate')) ?? 0,

            ];
        }
    }
