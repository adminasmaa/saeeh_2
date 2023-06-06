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
        Schema::create('place_reviews', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('rate')->required();

            $table->foreignId('user_id')->required( )->references('id')->on('users')->onDelete('cascade');

            $table->integer('place_id')->nullable( )->unsigned();
            $table->foreign('place_id')->references('id')->on('places');

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
        Schema::dropIfExists('place_reviews');
    }
};
