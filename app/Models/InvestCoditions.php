<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestCoditions extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'invest_conditions';
    public $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'conditions',


    ];

    protected $hidden=['updated_at','deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
