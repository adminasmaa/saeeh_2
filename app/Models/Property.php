<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Commission;    // HasMany
use App\Models\Aqar;    // HasMany
use App\Models\Notification;    // HasMany
use App\Models\Balance;    // HasMany
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
    // relations
    public function aqar(){
        return $this->HasMany(Aqar::class);
    }
    // relations
    public function notification(){
        return $this->HasMany(Notification::class);
    }
     // relations
     public function balance(){
        return $this->HasMany(Balance::class);
    }
}
