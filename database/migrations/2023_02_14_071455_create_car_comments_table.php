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
        Schema::create('car_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->integer('rating')->required();
            $table->boolean('status')->default (0);
            $table->integer('demo_clean')->default (0);
            $table->integer('demo_status')->default (0);
            $table->integer('demo_work')->default (0);

            $table->integer('car_id')->nullable( )->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('car_comments');
    }
};
