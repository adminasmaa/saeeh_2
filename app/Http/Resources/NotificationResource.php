<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
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
        } else {
            $name = 'name_ar';

        }
        return [
            "id" => $this->id ?? '',
            "title" => $this->title ?? '',
            "description" => $this->description ?? '',
            "status" => $this->status,
            "booking_id" => $this->booking_id,
            "type" => $this->type,
            'created_at' => $this->created_at,
        ];
    }
}
