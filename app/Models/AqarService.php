<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AqarService extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'aqar_details';

    protected $fillable = [
        'name_ar', // required
        'name_en', // required
        'icon', // nullable
        'parent_id', // nullable

    ];
    // relations
    public function subservices(){
        return $this->HasMany(AqarService::class,'parent_id');
    }

}
