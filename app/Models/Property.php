<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Commission;    // HasMany

class Property extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'properties';

    protected $fillable = [
        'name_ar', // required
        'name_en', // nullable
        'description', // nullable
        'images', // nullable
        'videos', // nullable
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function commission(){
        return $this->HasMany(Commission::class);
    }
}
