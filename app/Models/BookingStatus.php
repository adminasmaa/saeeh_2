<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CarBooking;   //HasMany
use App\Models\AqarBooking;   //HasMany

class BookingStatus extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'booking_status';

    protected $fillable = [
        'status_ar', // required
        'status_en', // nullable

    ];
    // relations
    public function carBooking()
    {
        return $this->HasMany(CarBooking::class);
    }
    // relations
    public function aqarBooking()
    {
        return $this->HasMany(AqarBooking::class);
    }
}
