<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FloorNumber extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'floor_numbers';

    protected $fillable = [
        'name_en', // nullable 
        'name_ar', // required
        'active', // required,default (0)
    ];

}
