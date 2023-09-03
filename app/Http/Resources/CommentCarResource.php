<?php

namespace App\Http\Resources;

use App\Models\CarReview;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CommentCarResource extends JsonResource
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

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',

            "rate" => round(CarReview::where('user_id', '=', $this->user->id)->where('car_id', '=',$this->car_id)->avg('rate')) ?? 0,


//            "rating " => $this->rating ?? 0,
//            "status" => $this->status ?? '',
            'user' => new UserResource($this->user),
            "created_at" => $this->created_at ?? '',

        ];
    }
}
