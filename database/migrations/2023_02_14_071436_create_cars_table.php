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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('year')->nullable();
            $table->string('color')->nullable();
            $table->string('category')->nullable();
            $table->integer('car_numbers')->nullable();
            $table->string('car_delivery_date')->nullable();
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();

            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('main_image_ads')->nullable();
            $table->json('images')->nullable();
            $table->string('videos')->nullable();
            $table->string('comment_text')->nullable();

            $table->integer('car_brand_id')->nullable( )->unsigned();
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->integer('ads_id')->nullable( )->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->foreignId('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('cars');
    }
};
