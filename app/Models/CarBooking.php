<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Car;   //belongsTo
use App\Models\City;   //belongsTo
use App\Models\Ads;   //belongsTo
use App\Models\Commission;   //belongsTo

class CarBooking extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'car_bookings';

    protected $fillable = [
        'book_status', // default(2) ,integer
        'fixed_price', // nullable ,float
        'changed_price', // json ,nullable
        'note', // nullable
        'delivery_date', // required,date
        'reciept_date', // required,date
        'day_count', // nullable,integer
        'active', // default (0)
        'cancle_reason', // nullable
        'place_arrive', // nullable
        'place_leave', // nullable
        '7agz_type', // required ,default(1)
        'type',// enum ,['website','application']
        'car_id', // unsigned
        'ads_id', // unsigned
        'city_id', // unsigned
        'commission_id', // unsigned
        'user_id', //unsigned
    ];
    // scope
    public function scopeCarBookingType($query,$Type){
        if($Type){
            return $query->where('type', $Type);
        }
    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }// relations
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }// relations
    public function ads(){
        return $this->belongsTo(Ads::class,'ads_id');
    }// relations
    public function commission(){
        return $this->belongsTo(Commission::class,'commission_id');
    }
}
