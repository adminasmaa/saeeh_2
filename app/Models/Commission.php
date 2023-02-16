<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Property;   //belongsTo
use App\Models\CarBooking;    // HasMany

class Commission extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'commissions';

    protected $fillable = [
        'price', // nullable
        'status', // default (0)
        'property_id', // unsigned
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function property(){
        return $this->belongsTo(Property::class,'property_id');
    }
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
}