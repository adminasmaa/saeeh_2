<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

use App\Http\Resources\CategoryOnlyResource;
use App\Http\Resources\PlaceReviewResource;

class PaginateResource extends JsonResource
{



    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request) : Array
    {
        return [
            'current_page' => $this->current_page,
//            'data' => MyModelResource::collection($this->items()),
            'first_page_url' => $this->first_page_url,
            'from' => $this->firstItem,
            'last_page' => $this->last_page,
            'last_page_url' => $this->last_page_url,
            'next_page_url' => $this->nextPageUrl,
            'path' => $this->path,
            'per_page' => $this->per_page,
            'prev_page_url' => $this->previousPageUrl,
            'to' => $this->lastItem,
            'total' => $this->total,
        ];
    }
}
