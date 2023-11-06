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
        Schema::table('car_comments', function (Blueprint $table) {

            $table->dropColumn (['status']);
            $table->dropColumn (['demo_clean']);
            $table->dropColumn (['demo_status']);
            $table->dropColumn (['demo_work']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_comments', function (Blueprint $table) {
            //
        });
    }
};
