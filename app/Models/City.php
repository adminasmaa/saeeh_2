<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CarBooking;    // HasMany
use App\Models\AqarBooking;    // HasMany
use App\Models\Area;    // HasMany
class City extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'active',
        'country_id',
        'order',

    ];

    protected $hidden=['deleted_at','updated_at'];
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
    public function categories(){
        return $this->HasMany(Category::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
    // relations
    public function area(){
        return $this->HasMany(Area::class);
    }
}
