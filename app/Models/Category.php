<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;    // HasMany
use App\Models\Car;    // HasMany
use App\Models\Aqar;   //belongsTo
class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'active',
        'description',
        'image',
        'icon',
        'parent_id',
        'type',
        'city_id'
    ];

    protected $hidden=['deleted_at','updated_at'];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }
    // relations
    public function places(){
        return $this->HasMany(Place::class,'sub_category_id');
    }
    // relations
    public function cars(){
        return $this->HasMany(Car::class,'category_id');
    }
    public function subcategories(){
        return $this->HasMany(Category::class,'parent_id');
    }  public function subcategoriesWithCars(){
        return $this->HasMany(Category::class,'parent_id')->whereHas('cars');
    }
    // relations
    public function aqar(){
        return $this->belongsTo(Aqar::class,'aqar_id');
    }

    public function aqars(){
        return $this->HasMany(Aqar::class,'category_id');
    }

    public function carscategories(){

        return $this->HasMany(Car::class,'sub_category_id');
    }



}
