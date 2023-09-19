<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPalace extends Model
{
    use HasFactory;

    protected $table = 'user_palace';
    protected $guarded = [];
}
