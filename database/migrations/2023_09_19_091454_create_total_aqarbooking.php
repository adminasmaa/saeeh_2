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
        Schema::table('aqar_bookings', function (Blueprint $table) {
            $table->double('total_price')->nullable(); //
            $table->integer('person_num')->nullable(); //

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aqar_bookings', function (Blueprint $table) {
            //
        });
    }
};