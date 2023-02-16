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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('terms_conditions')->required();
            $table->string('website_address')->required();
            $table->string('email')->required()->unique();
            $table->string('website_link')->required();
            $table->string('logo')->nullable();
            $table->string('theme')->required();
            $table->string('closing_message')->required();
            $table->string('description')->required();
            $table->json('key_words')->required();
            $table->string('ads_top')->nullable();
            $table->string('ads_bottom')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('snapchat')->nullable();
            $table->time('time_difference')->required();
            $table->enum('closing',['open','closed']);
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
        Schema::dropIfExists('settings');
    }
};
