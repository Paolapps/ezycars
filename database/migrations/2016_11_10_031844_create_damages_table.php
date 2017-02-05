<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDamagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('damages', function (Blueprint $table) {
            $table->increments('damage_id');
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('booking_id')->on('bookings')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('car_id')->on('cars');
            $table->mediumText('description');
            $table->date('fixed_date')->nullable();

            $table->timestamps();
        });

        DB::update("ALTER TABLE damages AUTO_INCREMENT = 4001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('damages');
    }}
