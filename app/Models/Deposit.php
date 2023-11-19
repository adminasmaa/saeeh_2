<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\CarBooking;   //belongsTo
use App\Models\AqarBooking;   //belongsTo

class Deposit extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'deposits';

    protected $fillable = [
        'deposit', // required 
        'booking_id', //unsigned 
        'type', // required 
        'status', // required 
        'waseal_photo', // required 
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
    return $this->belongsTo(User::class,'user_id');
    }
     // relations
     public function aqarBooking(){
        return $this->belongsTo(AqarBooking::class,'aqar_booking_id');
    }
    // relations
    public function carBooking(){
        return $this->belongsTo(CarBooking::class,'car_booking_id');
    }
}