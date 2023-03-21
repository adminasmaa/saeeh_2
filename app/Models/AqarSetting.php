<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  //belongsTo

class AqarSetting extends Model
{
    public $guarded = ['ID'];

    protected $table = 'aqar_setting';

    protected $fillable = [
        'input_id', 
        'required', 
        'display', 
        'category_id', 
    ];
   
}