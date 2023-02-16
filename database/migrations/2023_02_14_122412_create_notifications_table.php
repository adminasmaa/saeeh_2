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
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->required();
            $table->boolean('status')->required()->default (0);

            $table->integer('property_id')->nullable( )->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            
            $table->integer('place_id')->nullable( )->unsigned();
            $table->foreign('place_id')->references('id')->on('places');
            
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
        Schema::dropIfExists('notifications');
    }
};
