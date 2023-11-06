<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

//belongsTo
use App\Models\Place;

//belongsTo

class PlaceComment extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'place_comments';

    protected $with = ['user'];
    protected $fillable = [
        'description', // required
        'rating', // integer
        'status', // integer
        'place_id', // unsigned
        'user_id', //unsigned
    ];
    protected $hidden = ['deleted_at', 'updated_at'];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relations
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id');
    }
}
