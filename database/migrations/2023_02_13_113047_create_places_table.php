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
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->required();
            $table->string('name_en')->nullable();
            $table->integer('place_order')->required();
            $table->integer('place_error')->required()->default(0);
            $table->string('const_from')->required();
            $table->string('const_to')->required();
            $table->string('address')->required();
            $table->string('descrption_ar')->required();
            $table->string('descrption_en')->nullable();
            $table->string('display_photo')->required();
            $table->string('phone_one')->required()->unique();
            $table->string('phone_two')->nullable()->unique();
            $table->string('notify_photo')->nullable()->unique();
            $table->string('google_mark_link')->nullable();
            $table->string('place_link')->nullable();
            $table->string('share_link')->nullable();
            $table->integer('time_check')->nullable();
            $table->integer('seen_counter')->required()->default(0);
            $table->integer('delivery')->nullable();
            $table->integer('diff_time')->nullable();
            $table->integer('const_time')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('rest_one')->nullable();
            $table->string('rest_two')->nullable();
            $table->string('rest_three')->nullable();
            $table->enum('social_media',['facebook','instagram']);

            $table->foreignId('user_id')->references('id')->on('users');

            $table->integer('category_id')->nullable( )->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
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
        Schema::dropIfExists('places');
    }
};
