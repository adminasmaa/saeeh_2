<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Car;    // HasMany

class CarBrand extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = ['id'];

    protected $table = 'car_brands';

    protected $fillable = [
        'name',// required
        'logo',// required

    ];
    // // relations
    // public function car(){
    //     return $this->HasMany(Car::class);
    // }
}
