<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

//belongsTo
use App\Models\Aqar;

//belongsTo
use App\Models\ReviewElement;

// belongsTo
class AqarReview extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'aqar_reviews';
    protected $with = ['reviewElement'];
    protected $fillable = [
        'rate', // required
        'aqar_id',
        'user_id',
        'review_element_id',
    ];

    protected $hidden = ['deleted_at', 'updated_at', 'created_at'];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function aqar()
    {
        return $this->belongsTo(Aqar::class, 'aqar_id');
    }

    public function reviewElement()
    {
        return $this->belongsTo(ReviewElement::class, 'review_element_id');
    }
}
