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
        Schema::create('aqar_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['website','application'])->nullable();
            $table->integer('book_status')->nullable()->default(2);
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();
            $table->string('note')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('reciept_date')->nullable();
            $table->integer('day_count')->nullable();
            $table->integer('visit_count')->nullable();
            $table->boolean('active')->nullable()->default(1);
            $table->string('cancle_reason')->nullable();
            $table->string('place_arrive')->nullable();
            $table->string('place_leave')->nullable();
            $table->integer('7agz_type')->nullable()->default(1);
            $table->string('wasel_photo')->nullable();
            $table->string('date')->nullable();

            $table->integer('aqar_id')->nullable( )->unsigned();
            $table->foreign('aqar_id')->references('id')->on('aqars');

            $table->integer('ads_id')->nullable( )->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');

            $table->foreignId('city_id')->nullable( )->references('id')->on('cities')->onDelete('cascade');

            $table->integer('commission_id')->nullable( )->unsigned();
            $table->foreign('commission_id')->references('id')->on('commissions');

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
        Schema::dropIfExists('aqar_bookings');
    }
};
