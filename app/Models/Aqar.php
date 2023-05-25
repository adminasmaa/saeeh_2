<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Ads;   //belongsTo
use App\Models\AqarComment;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Aqar extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqars';

    protected $fillable = [
        'name_ar', // required
        'name_en', // nullable
        'status', // required ,default (0)
        'fixed_price', // nullable ,float
        'changed_price', // nullable ,json
        'main_image', // required
        'images', // required ,json
        'videos', // nullable
        'space', // nullable
        'time_to', // nullable
        'time_from', // nullable
        'description', // nullable
        'comment_text', // nullable
        'comision', // required
        'ads_id', //unsigned
        'area_id',//nullable
        'floor_id',//nullable
        'car_position_id',//nullable
        'service_id',//nullable
        'bathroom_id',//nullable
        'free_service_id',//nullable
        'laundry_id',//nullable
        'kitchen_id',//nullable
        'crew_id',//nullable
        'conditioning_type_id',//nullable
        'another_room_id',//nullable
        'floor_number_id',//nullable
        'category_id', //unsigned
        'user_id', //unsigned
        'masterroom',//nullable
        'normalroom',//nullable
        'unitnumber',//nullable
        'hallnumber',//nullable
        'bathroomnumber',//nullable
        'personnumber',//nullable
        'swimmingpool',//nullable
        'details',//nullable
        'map_link',//nullable
        'country_id',
        'city_id',
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function area(){
        return $this->belongsTo(Area::class,'area_id');
    }
    // relations
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }// relations
    public function ads(){
        return $this->belongsTo(Ads::class,'ads_id');
    }
   // relations
   public function aqarComment(){
        return $this->HasMany(AqarComment::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }

    public function aqarSection(){
        return $this->HasMany(AqarSections::class);
    }

}
