<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;    // HasMany

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'name_en',
        'active',
        'description',
        'image',
        'icon',
        'parent_id',
    ];
    // relations
    public function places(){
        return $this->HasMany(Place::class);
    }
}
