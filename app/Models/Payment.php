<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;   //belongsTo

class Payment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'payments';

    protected $fillable = [
        'invoice_value', 
        'invoice_status', 
        'invoice_id',  
        'book_id', 
        'expiry_date',
        'create_date',
        'invoice_display_value',
        'invoice_reference',
        'payment_getway',
        'transaction_id',
        'authorization_id',
        'type',
        'user_id', //unsigned
    ];

    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
