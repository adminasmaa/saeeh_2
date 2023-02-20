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
        Schema::create('car_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['website','application'])->required();
            $table->integer('book_status')->required()->default(2);
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();
            $table->string('note')->nullable();
            $table->date('delivery_date')->required();
            $table->date('reciept_date')->required();
            $table->integer('day_count')->nullable();
            $table->boolean('active')->required()->default(0);
            $table->string('cancle_reason')->nullable();
            $table->string('place_arrive')->nullable();
            $table->string('place_leave')->nullable();
            $table->integer('7agz_type')->required()->default(1);
            $table->integer('car_id')->nullable( )->unsigned();
            $table->foreign('car_id')->references('id')->on('cars');
            $table->integer('ads_id')->nullable( )->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->foreignId('city_id')->required( )->references('id')->on('cities')->onDelete('cascade');
            $table->integer('commission_id')->nullable( )->unsigned();
            $table->foreign('commission_id')->references('id')->on('commissions');
            $table->foreignId('user_id')->required( )->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('car_bookings');
    }
};
