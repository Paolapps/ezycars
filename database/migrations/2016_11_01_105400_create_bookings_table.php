<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {         
            $table->increments('booking_id'); 
            $table->integer('cust_id')->unsigned();
            $table->foreign('cust_id')->references('cust_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('car_id')->on('cars')->onUpdate('cascade')->onDelete('cascade');        
            $table->date('pick_date');         
            $table->date('return_date');        
            $table->date('returned_date')->nullable(); 

            $table->timestamps();     
        }); 

         DB::update("ALTER TABLE bookings AUTO_INCREMENT = 2001;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
