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
        Schema::table('settings', function (Blueprint $table) {
       
            $table->string('play_store')->nullable();
            $table->string('google_play')->nullable();
            $table->time('availability_time_from')->required();
            $table->time('availability_time_to')->required();
           $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->enum('activate',['active','not-active']);
            $table->dropColumn('theme')->required();
            $table->dropColumn('ads_top')->nullable();
            $table->dropColumn('ads_bottom')->nullable();
            $table->dropColumn('closing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
