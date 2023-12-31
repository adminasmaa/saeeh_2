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
        Schema::table('ads_status', function (Blueprint $table) {

            $table->dropColumn('status');

            $table->string('status_ar')->required( ); // حالات الحجز

            $table->string('status_en')->nullable( );
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads_status', function (Blueprint $table) {
            //
        });
    }
};
