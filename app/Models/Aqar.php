<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Property;   //belongsTo
use App\Models\Ads;   //belongsTo
use App\Models\AnotherRoom;   //belongsTo
use App\Models\Area;   //belongsTo
use App\Models\Bathroom;   //belongsTo
use App\Models\CarPosition;   //belongsTo
use App\Models\ConditionType;   //belongsTo
use App\Models\Crew;   //belongsTo
use App\Models\Floor;   //belongsTo
use App\Models\FloorNumber;   //belongsTo
use App\Models\FreeService;   //belongsTo
use App\Models\Kitchen;   //belongsTo
use App\Models\Laundry;   //belongsTo
use App\Models\Service;   //belongsTo
use App\Models\AqarComment;    // HasMany
use App\Models\AqarBooking;    // HasMany
class Aqar extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqars';

    protected $fillable = [
        'status', // required ,default (0)
        'fixed_price', // nullable ,float
        'changed_price', // nullable ,json
        'main_image_ads', // required
        'images', // required ,json
        'videos', // nullable
        'distance', // nullable
        'time', // nullable
        'comment_text', // nullable
        'comision', // required
        'category',// enum ,['duplex','room','sweet','studio','apartment','villa','castle']
        'property_id', //unsigned
        'ads_id', //unsigned
        'area_id',//unsigned
        'floor_id',//unsigned
        'car_position_id',//unsigned
        'service_id',//unsigned
        'bathroom_id',//unsigned
        'free_service_id',//unsigned
        'laundry_id',//unsigned
        'kitchen_id',//unsigned
        'crew_id',//unsigned
        'conditioning_type_id',//unsigned
        'another_room_id',//unsigned
        'floor_number_id',//unsigned
        'user_id', //unsigned
    ];
     // scope
     public function scopeCategory($query,$category){
        if($category){
            return $query->where('category', $category);
        }
    }
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function property(){
        return $this->belongsTo(Property::class,'property_id');
    }// relations
    public function anotherRoom(){
        return $this->belongsTo(AnotherRoom::class,'another_room_id');
    }// relations
    public function area(){
        return $this->belongsTo(Area::class,'area_id');
    }// relations
    public function bathroom(){
        return $this->belongsTo(Bathroom::class,'bathroom_id');
    }// relations
    public function carPosition(){
        return $this->belongsTo(CarPosition::class,'car_position_id');
    }// relations
    public function conditioningType(){
        return $this->belongsTo(ConditionType::class,'conditioning_type_id');
    }// relations
    public function crew(){
        return $this->belongsTo(Crew::class,'crew_id');
    }// relations
    public function floor(){
        return $this->belongsTo(Floor::class,'floor_id');
    }// relations
    public function floorNumber(){
        return $this->belongsTo(FloorNumber::class,'floor_number_id');
    }// relations
    public function freeService(){
        return $this->belongsTo(FreeService::class,'free_service_id');
    }// relations
    public function kitchen(){
        return $this->belongsTo(Kitchen::class,'kitchen_id');
    }// relations
    public function laundry(){
        return $this->belongsTo(Laundry::class,'laundry_id');
    }// relations
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
   // relations
   public function aqarComment(){
        return $this->HasMany(AqarComment::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
}
