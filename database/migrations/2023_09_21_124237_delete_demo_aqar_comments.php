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
        Schema::table('aqar_comments', function (Blueprint $table) {
            
            $table->dropColumn (['status']);
            $table->dropColumn (['check_view']);
            $table->dropColumn (['demo_clean']);
            $table->dropColumn (['demo_status']);
            $table->dropColumn (['demo_work']);
            $table->dropColumn (['demo_loc']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aqar_comments', function (Blueprint $table) {
            //
        });
    }
};
