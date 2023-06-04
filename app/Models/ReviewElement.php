<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewElement extends Model
{
    use HasFactory,SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'review_elements';

    protected $fillable = [
        'name_ar', // required
        'name_en', // nullable
        'icon', // required
    
    ];
   
}
