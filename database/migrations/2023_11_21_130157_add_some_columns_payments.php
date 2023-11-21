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
            $table->string('invoice_reference')->nullable();
            $table->string('value_of_currency_paid')->nullable();
            $table->string('batch_number')->nullable();
            $table->string('operation_number')->nullable();
            $table->string('authorization_number')->nullable();
            $table->string('follow_up_number')->nullable();
            $table->string('reference_number')->nullable();
            $table->dateTime('transaction_date_time')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_name')->nullable();
            $table->float('total_before')->nullable();
            $table->float('total_after')->nullable();
            $table->float('vat_amount')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('element')->nullable();
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
