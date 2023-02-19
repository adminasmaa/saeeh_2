<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
use App\Models\Aqar;   //belongsTo

class AqarComment extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqar_comments';

    protected $fillable = [
        'description', // nullable 
        'rating', // required
        'status', // required ,default (0)
        'check_view', // default (0)
        'demo_clean', // default (0)
        'demo_status', // default (0)
        'demo_work', // default (0)
        'demo_loc', // default (0)
        'aqar_id', //unsigned 
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // relations
    public function aqar(){
        return $this->belongsTo(Aqar::class,'aqar_id');
    }
}