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
            $table->time('const_from')->required();
            $table->time('const_to')->required();
            $table->string('address')->required();
            $table->string('descrption_ar')->required();
            $table->string('descrption_en')->nullable();
            $table->string('display_photo')->nullable();
            $table->string('phone_one')->required()->unique();
            $table->string('phone_two')->nullable()->unique();
            $table->string('notify_photo')->nullable()->unique();
            $table->string('google_mark_link')->nullable();
            $table->string('place_link')->nullable();
            $table->string('share_link')->nullable();
            $table->time('time_check')->nullable();
            $table->integer('seen_counter')->required()->default(0);
            $table->integer('delivery')->nullable();
            $table->time('diff_time')->nullable();
            $table->time('const_time')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->json('rest_one')->nullable(); //eat_types
            $table->json('rest_two')->nullable(); //break_type
            $table->json('rest_three')->nullable(); //place_table(tawla)
            $table->enum('social_media',['facebook','instagram']);

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
        Schema::dropIfExists('places');
    }
};
