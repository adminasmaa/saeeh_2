<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

//belongsTo
use App\Models\Ads;

//belongsTo
use App\Models\Category;

//belongsTo
use App\Models\CarComment;
use App\Models\CarReview;

// HasMany
use App\Models\CarBooking;

// HasMany

class

Car extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'cars';

    protected $fillable = [
        'name_ar', // required
        'name_en', // required
        'year', // required
        'color', // required
        'category', // required
        'car_numbers', // required
        'car_delivery_date', // required
        'fixed_price', // nullable
        'changed_price', // nullable
        'description_ar', // required
        'description_en', // required
        'main_image_ads', // required
        'images', // required
        'videos', // nullable
        'comment_text', // nullable
        'active', // default (0)
        'user_id', //unsigned
        'category_id', //unsigned
        'policy_place',
        'sub_category_id',
        'country_id',
        'ads_status_id',
        'city_id',
    ];

    protected $appends = ["avgRating"];  
    protected $hidden = ['averageRating'];


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }

    public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }
    public function CarReview(){
        return $this->HasMany(CarReview::class)->distinct();
    }

    public function adsstatus()
    {
        return $this->belongsTo(AdsStatus::class, 'ads_status_id');
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
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    
    public function carComments()
    {
        return $this->HasMany(CarComment::class)->orderBy('rating','desc')->limit(3);
    }
    // relations
    public function carComment()
    {
        return $this->HasMany(CarComment::class);
    }

    // relations
    public function carBooking()
    {
        return $this->HasMany(CarBooking::class);
    }

    public function subcategories()
    {
        return $this->HasMany(Car::class,'sub_category_id');


    }

    public function favoriteuser(){

        return $this->belongsToMany(User::class,'car_user','car_id','user_id');
    }
    
    public function carReviews()
    {
        return $this->HasMany(CarReview::class ,'car_id');

    }


    public function averageRating(){
        $results= $this->carReviews()
        ->selectRaw('round(avg(rate)) as avgRating, car_id')
        ->groupBy('car_id');

        return $results;
    }

    public function getAvgRatingAttribute()
    {
        if ( ! array_key_exists('averageRating', $this->relations)) {
        $this->load('averageRating');
        }

        $relation = $this->getRelation('averageRating')->first();

        return ($relation) ? round($relation->avgRating ) : 0;
    }
}
