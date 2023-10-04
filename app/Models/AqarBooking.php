<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\City;   //belongsTo
use App\Models\Commission;   //belongsTo
use App\Models\Ads;   //belongsTo
use App\Models\Aqar;   //belongsTo
use App\Models\BookingNote;    // HasMany
use App\Models\Deposit;    // HasMany
use App\Models\AqarComment;    // HasMany
use App\Models\BookingStatus;   //belongsTo

class AqarBooking extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqar_bookings';

    protected $fillable = [
        'fixed_price', // nullable
        'changed_price', // nullable ,json
        'note', // nullable
        'delivery_date', // required
        'reciept_date', // required
        'day_count', // nullable
        'visit_count', // nullable
        'active', // required ,default(0)
        'cancle_reason', // nullable
        'place_arrive', // nullable
        'place_leave', // nullable
        'wasel_photo', // nullable
        'type',// enum ,['website','application']
        'aqar_id', //unsigned
        'ads_id', //unsigned
        'city_id', //unsigned
        'commission_id', //unsigned
        'user_id', //unsigned
        'booking_status_id', // unsigned
        'book_status',
        'total_price',
        'person_num',
        'cancel_user_id'
    ];
    protected $hidden=['deleted_at','updated_at'];

    // scope
     public function scopeType($query,$type){
        if($type){
            return $query->where('type', $type);
        }
    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function aqar(){
        return $this->belongsTo(Aqar::class,'aqar_id');
    }
    // relations
    public function ads(){
        return $this->belongsTo(Ads::class,'ads_id');
    }
    // relations
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
    // relations
    public function commission(){
        return $this->belongsTo(Commission::class,'commission_id');
    }
    // relations
    public function bookingNote(){
        return $this->HasMany(BookingNote::class);
    }
    // relations
    public function deposit(){
        return $this->HasMany(Deposit::class);
    }
    // relations
    public function bookingStatus(){
        return $this->belongsTo(BookingStatus::class,'booking_status_id');
    }

    // public function Currancy($country_id)
    // {
    //     $currancy=City::select('currancy')->where('country_id', '=', $this->currancy)->distinct()->get();
  
    // }
}
