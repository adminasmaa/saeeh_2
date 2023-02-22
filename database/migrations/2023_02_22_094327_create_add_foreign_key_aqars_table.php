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
        Schema::table('aqars', function (Blueprint $table) {
            $table->integer('area_id')->nullable( )->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            $table->integer('floor_id')->nullable( )->unsigned();
            $table->foreign('floor_id')->references('id')->on('floors')->onDelete('cascade');

            $table->integer('car_position_id')->nullable( )->unsigned();
            $table->foreign('car_position_id')->references('id')->on('car_positions')->onDelete('cascade');

            $table->integer('service_id')->nullable( )->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->integer('bathroom_id')->nullable( )->unsigned();
            $table->foreign('bathroom_id')->references('id')->on('bathrooms')->onDelete('cascade');

            $table->integer('free_service_id')->nullable( )->unsigned();
            $table->foreign('free_service_id')->references('id')->on('free_services')->onDelete('cascade');

            $table->integer('laundry_id')->nullable( )->unsigned();
            $table->foreign('laundry_id')->references('id')->on('laundries')->onDelete('cascade');

            $table->integer('kitchen_id')->nullable( )->unsigned();
            $table->foreign('kitchen_id')->references('id')->on('kitchens')->onDelete('cascade');

            $table->integer('crew_id')->nullable( )->unsigned();
            $table->foreign('crew_id')->references('id')->on('crews')->onDelete('cascade');

            $table->integer('conditioning_type_id')->nullable( )->unsigned();
            $table->foreign('conditioning_type_id')->references('id')->on('conditioning_types')->onDelete('cascade');

            $table->integer('another_room_id')->nullable( )->unsigned();
            $table->foreign('another_room_id')->references('id')->on('another_rooms')->onDelete('cascade');

            $table->integer('floor_number_id')->nullable( )->unsigned();
            $table->foreign('floor_number_id')->references('id')->on('floor_numbers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aqars', function (Blueprint $table) {
            //
        });
    }
};
