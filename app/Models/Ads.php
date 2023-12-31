<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Car;    // HasMany
use App\Models\CarBooking;    // HasMany
use App\Models\Aqar;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Ads extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'ads';

    protected $fillable = [
        'title', // required
        'ads_link', // required
        'ads_image', // required
        'arranging_id', // default (0)
        'position',// enum ,['upper_middle','lower_middle','banner','slider']
        'user_id', //unsigned
    ];
    // scope
//    public function scopePosition($query,$position){
//        if($position){
//            return $query->where('position', $position);
//        }
//    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function car(){
        return $this->HasMany(Car::class);
    }
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
    // relations
    public function aqar(){
        return $this->HasMany(Aqar::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
}
