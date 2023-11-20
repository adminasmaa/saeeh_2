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
        'response',
        'customer_reference',
        'expiry_time', //time
        'comments',
        'user_defined_field',
        'due_deposit', //float
        'deposit_status', //deposit , notdeposit
        'transaction_date', 
        'reference_id', 
        'track_id',
        'payment_id',
        'transaction_status', // succss , failed
        'transaction_value',
        'customer_service_charge',
        'total_service_charge',
        'due_value',
        'paid_currency',
        'paid_currency_value',
        'card_number',
        'ip_address',
        'error_code',
        'error',
        'invoice_error',
        'invoice_item', //array
        'suppliers', //array
        'total_before',
        'total_after',
        'vat_amount'
    ];

    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
