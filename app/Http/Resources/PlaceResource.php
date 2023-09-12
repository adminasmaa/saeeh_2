<?php

namespace App\Http\Resources;

use App\Models\PlaceComment;
use App\Models\PlaceReview;
use App\Models\PlaceUser;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryOnlyResource;
use App\Http\Resources\PlaceReviewResource;
use App\Http\Resources\PlaceTableResource;
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
            $description = 'descrption_ar';
        } else {
            $name = 'name_en';
            $description = 'descrption_en';
        }

        return [
            "id" => $this->id ?? '',
            'name' => $this->$name ?? '',

            "description" => preg_replace("/\r|\n/", "", strip_tags($this->$description)) ?? '',
            "longitude" => isset($this->longitude) ? $this->longitude : 0,
            "latitude" => isset($this->latitude) ? $this->latitude : 0,
            // "address" => $this->address ?? '',
            // "facebook" => $this->facebook ?? '',
            // "instagram" => $this->instagram ?? '',
            // "twitter" => $this->twitter ?? '',
            // "phone_one" => $this->phone_one ?? '',
            // "phone_two" => $this->phone_two ?? '',

            "place_link" => $this->place_link ?? '',
            "favorite" => (count(PlaceUser::where('place_id', '=', $this->id)->where('user_id', '=', Auth::id())->get()) > 0 ? true : false),
            // "rate" => round(PlaceReview::where('user_id', '=', Auth::id())->where('place_id', '=',$this->id)->avg('rate')) ?? 0,
            "rate" => round($this->placeReview->avg('rate')) ?? 0,

            // "count_review" => $this->PlaceReview->count() ?? 0,
            // "count_comment" => $this->placeComments->count() ?? 0,
            // 'total' => $this->PlaceReview->count() + $this->placeComments->count(),

            // "reviews" => [ new PlaceReviewResource($this->PlaceReview()->first())],

            // 'path' => asset('images/places') . "/",

            // "images" => explode(",", $this->images) ?? [],
            // "images" => $this->images?(explode(",", $this->images)?explode(",",$this->images) : NULL):NULL,

            "image" => asset('images/places') . "/" . $this->display_photo,
            // "notify_photo" => asset('images/places') . "/" . $this->notify_photo,
            // "videos" => $this->videos?(explode(",", $this->videos)?explode(",",$this->videos) : NULL):NULL,

            "created_at" => $this->created_at ?? '',
            // 'comments' => CommentPlaceResource::collection($this->placeComments) ?? '',
            // 'placetables' => $this->placetables ?? '',
            'placetables' => PlaceTableResource::collection($this->placetables) ?? '',
            'category' => new CategoryOnlyResource($this->category),
        ];
    }
}
