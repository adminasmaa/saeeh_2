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
            $table->enum('category',['duplex','room','sweet','studio','apartment','villa','castle'])->required();
            $table->boolean('status')->required()->default (0);
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();
            $table->string('main_image_ads')->nullable();
            $table->json('images')->nullable();
            $table->string('videos')->nullable();
            $table->string('distance')->nullable();
            $table->time('time')->nullable();
            $table->string('comment_text')->nullable();
            $table->string('comision')->required();

            $table->integer('property_id')->nullable( )->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
           
            $table->integer('ads_id')->nullable( )->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');
           
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
