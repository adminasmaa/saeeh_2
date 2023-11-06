<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo

class CarComment extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'car_comments';

    protected $fillable = [
        'description', // nullable
        'rating', // required
        'car_id', //unsigned 
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }
}

           