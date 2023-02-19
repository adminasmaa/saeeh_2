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
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->required();
            $table->string('ads_link')->required();
            $table->string('ads_image')->nullable();
            $table->boolean('show_ads')->default (0);
            $table->integer('arranging_id')->default (0);
            $table->enum('position',['upper_middle','lower_middle','banner','slider']);

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
        Schema::dropIfExists('ads');
    }
};
