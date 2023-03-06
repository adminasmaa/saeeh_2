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
            $table->integer('unitnumber')->nullable( );
            $table->integer('hallnumber')->nullable( );
            $table->integer('bathroomnumber')->nullable( );
            $table->integer('personnumber')->nullable( );
            $table->string('swimmingpool')->nullable( );
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
