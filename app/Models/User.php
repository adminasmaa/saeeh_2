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
use App\Models\Property;    // HasMany
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
        'country_code'
    ];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
    // relations
    public function property(){
        return $this->HasMany(Property::class);
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
}
