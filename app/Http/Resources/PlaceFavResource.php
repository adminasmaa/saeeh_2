<?php

namespace App\Http\Resources;

use App\Models\PlaceComment;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PlaceFavResource extends JsonResource
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


        } else {
            $name = 'name_en';

        }
            return [
                "id" => $this->id,
                "name" => $this->$name ?? '',
                "favorite" =>true,
                "description" =>$this->address ?? '',
                "image" => asset('images/places') . "/" . $this->display_photo,
                "phone_one" => $this->phone_one ?? 0,
                "rate" => round(PlaceComment::where('user_id', '=', Auth::id())->where('place_id', '=',$this->id)->avg('rating')) ?? 0,

            ];
        }
    }
