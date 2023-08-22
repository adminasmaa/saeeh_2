<?php

namespace App\Http\Resources;

use App\Models\PlaceUser;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryOnlyResource;
use App\Http\Resources\PlaceReviewResource;
use Illuminate\Support\Facades\Auth;

class PlaceResource extends JsonResource
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
            $description='descrption_ar';
        } else {
            $name = 'name_en';
            $description='descrption_en';

        }

        return [
            "id" => $this->id ?? '',
            'name' => $this->$name ?? '',

            "description" =>preg_replace( "/\r|\n/", "", strip_tags($this->$description) ) ?? '',

            "address" => $this->address ?? '',
            "facebook" => $this->facebook ?? '',
            "instagram" => $this->instagram ?? '',
            "twitter" => $this->twitter ?? '',
            "phone_one" => $this->phone_one ?? '',
            "phone_two" => $this->phone_two ?? '',
            "longitude" => $this->longitude ?? '',
            "latitude" => $this->latitude ?? '',
            "favorite" => (count(PlaceUser::where('place_id','=',$this->id)->where('user_id','=',Auth::id())->get())>0 ? true : false),

            "rate" =>number_format($this->placeComments->avg('rating')) ?? 0,
            "reviewer_count" => $this->PlaceReview->count() ?? 0,
            "comment_count" => $this->placeComments->count() ?? 0,
            "PlaceReview" => PlaceReviewResource::collection($this->PlaceReview),

            "path"=>asset('images/places/'),
            "images" => explode(",",$this->images) ?? [],
            "display_photo" => asset('images/places') . "/" . $this->display_photo,
            "notify_photo " => asset('images/places') . "/" . $this->notify_photo,
            "created_at" => $this->created_at ?? '',
            'comments' => $this->placeComments ?? '',
            'category' => new CategoryOnlyResource($this->category),
        ];
    }
}
