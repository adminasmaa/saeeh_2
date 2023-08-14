<?php

namespace App\Http\Resources;

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

        if ($lang == 'ar') {
            $name = 'name_ar';
        } else {
            $name = 'name_en';

        }

        return [
            "id" => $this->id,
            "name" => $this->$name,
            "description" => $this->description ?? '',
            "category" => $this->category ?? '',
            "status" => $this->status ?? '',
            "rate" => $this->aqarComment->avg('rating') ?? '',
            "favorite" => (count(AquarUser::where('aqar_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),


            "distance" => $this->distance ?? '',
            "time" => $this->time ?? '',
            "image" => asset('images/aqars')."/".$this->main_image_ads,
            "comment_text" => $this->comment_text ?? '',
            "comision" => $this->comision ?? '',
            "fixed_price" => $this->fixed_price ?? 0,
            "changed_price" => $this->changed_price ?? '',

        ];
    }
}
