<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;  //add the namespace

use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;    // HasMany
use App\Models\PlaceComment;    // HasMany
use App\Models\Ads;    // HasMany
use App\Models\Car;    // HasMany
use App\Models\CarComment;    // HasMany
use App\Models\Commission;    // HasMany
use App\Models\CarBooking;    // HasMany
use App\Models\AqarBooking;    // HasMany
use App\Models\Aqar;    // HasMany
use App\Models\AqarComment;    // HasMany
use App\Models\BookingNote;    // HasMany
use App\Models\Message;    // HasMany
use App\Models\Notification;    // HasMany
use App\Models\Balance;    // HasMany
use App\Models\Invoice;    // HasMany
use App\Models\Deposit;    // HasMany
class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'firstname',
        'lastname',
        'code',
        'image',
        'comision',
        'active',
        'latitude',
        'country_id',
        'city_id',
        'address',
        'longitude',
        'account_type',
        'phone',
        'country_code',
        'device_token',
        'token',
        'isguest'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token','account_type','comision','address',
        'email_verified_at','country_id','city_id','deleted_at','created_at','updated_at','isguest','token','active','image'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // relations
    public function places(){
        return $this->HasMany(Place::class);
    }
    // relations
    public function placeComments(){
        return $this->HasMany(PlaceComment::class);
    }
    // relations
    public function ads(){
        return $this->HasMany(Ads::class);
    }
    // relations
    public function car(){
        return $this->HasMany(Car::class);
    }
    // relations
    public function carComment(){
        return $this->HasMany(CarComment::class);
    }

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    // relations
    public function commission(){
        return $this->HasMany(Commission::class);
    }
    // relations
    public function carBooking(){
        return $this->HasMany(CarBooking::class);
    }
    // relations
    public function aqarBooking(){
        return $this->HasMany(AqarBooking::class);
    }
    // relations
    public function aqar(){
        return $this->HasMany(Aqar::class);
    }
    // relations
    public function aqarComment(){
        return $this->HasMany(AqarComment::class);
    }
    // relations
    public function bookingNote(){
        return $this->HasMany(BookingNote::class);
    }
    // relations
    public function message(){
        return $this->HasMany(Message::class);
    }
    // relations
    public function notification(){
        return $this->HasMany(Notification::class);
    }
    // relations
    public function balance(){
        return $this->HasMany(Balance::class);
    }
    // relations
    public function invoice(){
        return $this->HasMany(Invoice::class);
    }
    // relations
    public function deposit(){
        return $this->HasMany(Deposit::class);
    }

    public function favourite_aqars(){
        return $this->belongsToMany(Aqar::class,'aqar_user');
    }
    public function FavouriteCities(){
        return $this->belongsToMany(City::class,'city_user','city_id','user_id');
    }

    public function favourite_car(){
        return $this->belongsToMany(Car::class,'car_user');
    }

//    public function favourite_place(){
//        return $this->belongsToMany(Place::class,'user_palace','user_id', 'palace_id');
//    }

    public function favourite_place(){

        return $this->belongsToMany(Place::class, 'user_palace', 'user_id', 'palace_id');
    }
}
