<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\CarBooking;   //belongsTo
use App\Models\AqarBooking;   //belongsTo

class BookingNote extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'booking_notes';

    protected $fillable = [
        'note', // nullable 
        'book_status',// enum ,['refuse','cancel']
        'type_booking',// enum ,['aqars','cars']
        'aqar_booking_id', //unsigned 
        'car_booking_id', //unsigned 
        'user_id', //unsigned 
    ];
     // scope
     public function scopeBookStatus($query,$book_status){
        if($book_status){
            return $query->where('book_status', $book_status);
        }
    }
    // scope
    public function scopeTypeBook($query,$type_booking){
        if($type_booking){
            return $query->where('type_booking', $type_booking);
        }
    }
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
