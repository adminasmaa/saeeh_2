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
        Schema::create('place_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->integer('rating');
            $table->boolean('status') ->default (0);

            $table->integer('place_id')->nullable( )->unsigned();
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->foreignId('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('place_comments');
    }
};
