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
        Schema::create('booking_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note')->nullable();

            $table->enum('book_status',['refuse','cancel'])->required();

            $table->enum('type_booking',['aqars','cars'])->required();

            $table->integer('aqar_booking_id')->nullable( )->unsigned();
            $table->foreign('aqar_booking_id')->references('id')->on('aqar_bookings')->onDelete('cascade');
            
            $table->integer('car_booking_id')->nullable( )->unsigned();
            $table->foreign('car_booking_id')->references('id')->on('car_bookings')->onDelete('cascade');
            
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_notes');
    }
};
