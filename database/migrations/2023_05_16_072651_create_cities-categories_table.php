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
        Schema::create('cities-categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable()->references('id')->on('categories')->onDelete('cascade');
            $table->integer('city_id')->nullable( )->references('id')->on('cities')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities-categories');
    }
};
