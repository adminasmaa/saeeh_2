<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Place;   //belongsTo
class PlaceReview extends Model
{
    use HasFactory,SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'place_reviews';

    protected $fillable = [
        'rate', // required
        'place_id',
        'user_id',
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function place(){
        return $this->belongsTo(Place::class,'place_id');
    }
   
}
