<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Property;   //belongsTo
use App\Models\Ads;   //belongsTo
use App\Models\AqarComment;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Aqar extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqars';

    protected $fillable = [
        'status', // required ,default (0)
        'fixed_price', // nullable ,float
        'changed_price', // nullable ,json
        'main_image_ads', // required
        'images', // required ,json
        'videos', // nullable
        'distance', // nullable
        'time', // nullable
        'comment_text', // nullable
        'comision', // required
        'category',// enum ,['duplex','room','sweet','studio','apartment','villa','castle']
        'property_id', //unsigned 
        'ads_id', //unsigned 
        'user_id', //unsigned 
    ];
     // scope
     public function scopeCategory($query,$category){
        if($category){
            return $query->where('category', $category);
        }
    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function property(){
        return $this->belongsTo(Property::class,'property_id');
    }// relations
    public function ads(){
        return $this->belongsTo(Ads::class,'ads_id');
    }
   // relations
   public function aqarComment(){
        return $this->HasMany(AqarComment::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
}
