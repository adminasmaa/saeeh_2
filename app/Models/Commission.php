<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\CarBooking;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Commission extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'commissions';

    protected $fillable = [
        'price', // nullable
        'status', // default (0)
        'user_id', //unsigned 
        'booking_id',
        'type',
        'waseal_photo'
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
}