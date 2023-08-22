<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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

            "rating " => $this->rating ?? 0,
//            "status" => $this->status ?? '',
            'user' => new UserResource($this->user),
            "created_at" => $this->created_at ?? '',

        ];
    }
}
