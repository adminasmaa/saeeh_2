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
        Schema::create('user_palace', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');
            $table->integer('palace_id')->nullable( )->references('id')->on('places')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_palace');
    }
};
