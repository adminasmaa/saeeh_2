<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CarBooking;    // HasMany

class City extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'active',
        'country_id',
        'order',

    ];
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
}
