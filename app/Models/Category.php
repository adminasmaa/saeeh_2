<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;    // HasMany
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

    // relations
    public function places(){
        return $this->HasMany(Place::class);
    }
    public function subcategories(){
        return $this->HasMany(Category::class,'parent_id');
    }
    // relations
    public function aqar(){
        return $this->belongsTo(Aqar::class,'aqar_id');
    }
}
