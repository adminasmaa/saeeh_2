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

            $table->dropColumn (['floor_id']);
            $table->dropColumn (['car_position_id']);
            $table->dropColumn (['service_id']);
            $table->dropColumn (['bathroom_id']);
            $table->dropColumn (['free_service_id']);
            $table->dropColumn (['laundry_id']);
            $table->dropColumn (['kitchen_id']);
            $table->dropColumn (['crew_id']);
            $table->dropColumn (['conditioning_type_id']);
            $table->dropColumn (['another_room_id']);
            $table->dropColumn (['floor_number_id']);
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
