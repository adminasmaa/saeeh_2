<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

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
        'time_check',// nullable
        'seen_counter',// required
        'delivery',// nullable
        'facebook',// nullable
        'instagram',// nullable
        'twitter',// nullable
        'diff_time',// nullable
        'const_time',// nullable
        'latitude',// nullable
        'longitude',// nullable
        'rest_one',// nullable
        'rest_two',// nullable
        'rest_three',// nullable
        'images', // nullable
        'social_media',// enum ,['facebook','instagram']
        'category_id', //unsigned
        'sub_category_id', //unsigned
        'user_id', //unsigned
        'country_id',
        'city_id',
    ];

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
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

    // relations
    public function placeComments()
    {
        return $this->HasMany(PlaceComment::class);
    }

}
