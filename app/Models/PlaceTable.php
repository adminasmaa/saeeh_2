<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;  //belongsTo

class PlaceTable extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'place_tables';

    protected $fillable = [
        'name_ar',// required
        'name_en',// nullable
        'place_id',// nullable
        'type',// nullable

    ];
    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }
    protected $hidden = ['deleted_at', 'updated_at'];

    // relations
    public function place(){
        return $this->belongsTo(Place::class,'place_id');
    }
}
