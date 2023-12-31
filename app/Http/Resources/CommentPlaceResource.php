<?php

namespace App\Http\Resources;

use App\Models\CarReview;
use App\Models\PlaceComment;
use App\Models\PlaceReview;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CommentPlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $user_id = $this->user->id ?? 0;

        return [
            "id" => $this->id,

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->description) ) ?? '',

           //"rate" => round(PlaceReview::where('user_id', '=', $user_id)->where('place_id', '=',$this->place_id)->avg('rate')) ?? 0,

             "rate" => $this->rating ?? 0,
//            "status" => $this->status ?? '',
            'user' => new UserResource($this->user),
            "created_at" => $this->created_at ?? '',

        ];
    }
}
