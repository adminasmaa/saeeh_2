<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'groups';

    protected $fillable = [
        'name',// enum ,['Investor','client']
    ];
    // scope
    public function scopeType($query,$type){
        if($type){
            return $query->where('name', $type);
        }
    }
}
