<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Aqar;   //HasMany

class AnotherRoom extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'another_rooms';

    protected $fillable = [
        'name_en', // nullable 
        'name_ar', // required
        'active', // required,default (0)
    ];
    // relations
    public function aqar(){
        return $this->HasMany(Aqar::class);
    }
}