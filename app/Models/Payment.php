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
        'payment_getway', // بوابة الدفع
        'transaction_id',
        'authorization_id',
        'type',
        'user_id', //unsigned
        'response',
        'customer_reference', // مرجع العميل
        'invoice_reference', //مرجع الفاتورة 
        'value_of_currency_paid', // قيمةالعملة المدفوعة
        'batch_number', // رقم الدفعة
        'operation_number', // رقم العملية
        'authorization_number', // رقم التفويض
        'follow_up_number',  // رقم المتابعة
        'reference_number', // رقم المرجع
        'transaction_date_time', // تاريخ الصفقة بالوقت
        'customer_email',// البريد الالكتروني للعميل
        'customer_phone', // جوال العميل
        'customer_name', // اسم العميل
        'total_before', // المجموع (غير شامل ضريبة القيمة المضافة)
        'total_after', //  المجموع بعد اضافة القيمة المضافة
        'vat_amount', // ضريبة القيمة المضافة
        'price', // السعر
        'quantity', // الكمية
        'element ' // العنصر
    ];

    // relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
