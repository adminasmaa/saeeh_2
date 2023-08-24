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
        Schema::create('aqars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->required();
            $table->string('name_en')->nullable();
            $table->boolean('status')->required()->default (0);
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();
            $table->string('main_image')->nullable();
            $table->json('images')->nullable();
            $table->string('videos')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('space')->nullable();
            $table->time('time_to')->nullable();
            $table->time('time_from')->nullable();
            $table->string('description')->nullable();
            $table->string('comision')->required();

            $table->string('area_id')->nullable( );
            $table->string('floor_id')->nullable( );
            $table->string('car_position_id')->nullable( );
            $table->string('service_id')->nullable( );
            $table->string('bathroom_id')->nullable( );
            $table->string('free_service_id')->nullable( );
            $table->string('laundry_id')->nullable( );
            $table->string('kitchen_id')->nullable( );
            $table->string('crew_id')->nullable( );
            $table->string('conditioning_type_id')->nullable( );
            $table->string('another_room_id')->nullable( );
            $table->string('floor_number_id')->nullable( );

            $table->integer('property_id')->nullable( )->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');

            $table->integer('ads_id')->nullable( )->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');

            $table->foreignId('category_id')->required()->unsigned()->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('aqars');
    }
};
