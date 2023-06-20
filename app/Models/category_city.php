<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_city extends Model
{
    use HasFactory;
    protected $table = 'cities-categories';


    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }// relations


}

