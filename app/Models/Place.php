<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//belongsTo
use App\Models\Category;

//belongsTo
use App\Models\PlaceComment;

// HasMany

class Place extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'places';

    protected $fillable = [
        'name_ar',// required
        'name_en',// nullable
        'place_order',// required
        'place_error',// required
        'const_from',// required
        'const_to',// required
        'address',// required
        'descrption_ar',// required
        'descrption_en',// nullable
        'display_photo',// required
        'phone_one',// required
        'phone_two',// nullable
        'notify_photo',// nullable
        'google_mark_link',// nullable
        'place_link',// nullable
        'share_link',// nullable
        // 'time_check',// nullable
        'seen_counter',// required
        'delivery',// nullable
        'facebook',// nullable
        'instagram',// nullable
        'twitter',// nullable
        // 'diff_time',// nullable
        // 'const_time',// nullable
        'latitude',// nullable
        'longitude',// nullable
        'images', // nullable
        'videos', // nullable
        'video_photo', // nullable
        'social_media',// enum ,['facebook','instagram']
        'active', // default (0)
        'category_id', //unsigned
        'sub_category_id', //unsigned
        'user_id', //unsigned
        'country_id',
        'city_id',
        'menu_link',// nullable
        'order_by',
        'work_day',

    ];
protected $appends=['descrption','name'];


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }

    public function getDescrptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->descrption_ar : $this->descrption_en;
    }

    protected $hidden = ['deleted_at', 'updated_at'];

    // scope
    public function scopeMediaType($query, $mediaType)
    {
        if ($mediaType) {
            return $query->where('social_media', $mediaType);
        }
    }

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relations


    public function PlaceReview()
    {
        return $this->HasMany(PlaceReview::class)->distinct();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id')->withDefault();
    }

    // relations
    public function placeComments()
    {
        return $this->HasMany(PlaceComment::class);
    }

    // relations
    public function placetables()
    {
        return $this->HasMany(PlaceTable::class);
    }
    public function favoriteuser(){

        return $this->belongsToMany(User::class, 'user_palace', 'user_id', 'palace_id');
    }

}
