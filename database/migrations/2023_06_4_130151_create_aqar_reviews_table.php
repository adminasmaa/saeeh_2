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
        Schema::create('aqar_reviews', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('rate')->required();

            $table->foreignId('user_id')->required( )->references('id')->on('users')->onDelete('cascade');

            $table->integer('aqar_id')->nullable( )->unsigned();
            $table->foreign('aqar_id')->references('id')->on('aqars');

            $table->integer('review_element_id')->nullable( )->unsigned();
            $table->foreign('review_element_id')->references('id')->on('review_elements');

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
        Schema::dropIfExists('aqar_reviews');
    }
};
