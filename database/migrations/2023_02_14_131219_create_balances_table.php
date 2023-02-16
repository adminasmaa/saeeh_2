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
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id');
            $table->float('balance')->nullable();
            $table->boolean('inside')->required()->default (0);
            $table->boolean('outside')->required()->default (0);
            $table->string('details')->nullable();
            $table->enum('type',['aqar','car'])->required();

            $table->integer('property_id')->nullable( )->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            
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
        Schema::dropIfExists('balances');
    }
};
