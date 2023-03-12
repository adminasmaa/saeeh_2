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
        Schema::table('car_comments', function (Blueprint $table) {
            $table->integer('car_booking_id')->nullable( )->unsigned();
            $table->foreign('car_booking_id')->references('id')->on('car_bookings')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_comments', function (Blueprint $table) {
            //
        });
    }
};
