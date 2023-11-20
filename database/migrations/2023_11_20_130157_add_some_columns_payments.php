<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {

            $table->string('customer_reference')->nullable();
            $table->time('expiry_time')->nullable();
            $table->string('comments')->nullable();
            $table->string('user_defined_field')->nullable();
            $table->float('due_deposit')->nullable();
            $table->enum('deposit_status',['deposit','not_deposit']);
            $table->date('transaction_date')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('track_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->enum('transaction_status',['success','failed']);
            $table->string('transaction_value')->nullable();
            $table->string('customer_service_charge')->nullable();
            $table->string('total_service_charge')->nullable();
            $table->string('due_value')->nullable();
            $table->string('paid_currency')->nullable();
            $table->string('paid_currency_value')->nullable();
            $table->string('card_number')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('error_code')->nullable();
            $table->string('error')->nullable();
            $table->string('invoice_error')->nullable();
            $table->json('invoice_item')->nullable();
            $table->json('suppliers')->nullable();
            $table->string('total_before')->nullable();
            $table->string('total_after')->nullable();
            $table->string('vat_amount')->nullable();

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            //
        });
    }
};
