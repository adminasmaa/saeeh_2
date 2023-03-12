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
        Schema::table('aqar_comments', function (Blueprint $table) {
            $table->integer('aqar_booking_id')->nullable( )->unsigned();
            $table->foreign('aqar_booking_id')->references('id')->on('aqar_bookings')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aqar_comments', function (Blueprint $table) {
            //
        });
    }
};
