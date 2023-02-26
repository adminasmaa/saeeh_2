<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo
class Balance extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'balances';

    protected $fillable = [
        'balance', // nullable
        'inside', // required ,default (0)
        'outside', // required ,default (0)
        'details', // nullable 
        'type', // enum ,['aqar','car']
        'user_id', //unsigned 
    ];
    // relations
    public function user(){
    return $this->belongsTo(User::class,'user_id');
    }
}
