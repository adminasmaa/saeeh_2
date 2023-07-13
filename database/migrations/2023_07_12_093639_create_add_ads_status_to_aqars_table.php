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
            $table->integer('ads_status_id')->nullable( )->unsigned();
            $table->foreign('ads_status_id')->references('id')->on('ads_status');
            $table->dropColumn (['status']);

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
