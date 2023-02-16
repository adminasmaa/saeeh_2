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
        Schema::create('aqar_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->integer('rating')->required();
            $table->boolean('status')->default (0);
            $table->boolean('check_view')->default (0);
            $table->integer('demo_clean')->required()->default (0);
            $table->integer('demo_status')->required()->default (0);
            $table->integer('demo_work')->required()->default (0);
            $table->integer('demo_loc')->required()->default (0);

            $table->integer('aqar_id')->nullable( )->unsigned();
            $table->foreign('aqar_id')->references('id')->on('aqars')->onDelete('cascade');
            
            $table->foreignId('user_id')->required( )->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('aqar_comments');
    }
};
