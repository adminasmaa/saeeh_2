<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Car;   //belongsTo
class CarReview extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'car_reviews';

    protected $fillable = [
        'rate', // required
        'car_id',
        'user_id',
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }

    public function RateTotal($id){
        return CarReview::where('car_id',$id)->sum('rate');


    }

    public function CountUser($id){
        return CarReview::where('car_id',$id)->count('user_id');


    }

}
