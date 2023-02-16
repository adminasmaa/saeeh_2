<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'settings';


    protected $fillable = [

        'terms_conditions',
        'website_address',
        'email',
        'website_link',
        'logo',
        'theme',
        'closing_message',
        'description',
        'key_words',
        'ads_top',
        'ads_bottom',
        'twitter',
        'facebook',
        'instagram',
        'youtube',
        'time_difference',
        'snapchat',
        'closing',
        'image'
    ];
}
