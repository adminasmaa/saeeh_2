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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->required();
            $table->string('name_en')->nullable();
            $table->string('category_icon')->required();
            $table->string('category_photo')->required(); 
             $table->string('single_name')->required();
            $table->integer('exist_sub')->nullable()->default(0);
            $table->integer('eat')->nullable()->default(0);
            $table->integer('app_link')->nullable()->default(0);

            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('categories');
    }
};
