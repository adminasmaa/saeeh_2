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
        Schema::table('aqars', function (Blueprint $table) {
            $table->foreignId('country_id')->nullable( )->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('city_id')->nullable( )->references('id')->on('cities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aqars', function (Blueprint $table) {
            //
        });
    }
};
