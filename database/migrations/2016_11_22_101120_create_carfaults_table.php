<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarfaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carfaults', function (Blueprint $table) {
            $table->increments('car_fault_id'); 
            
            $table->integer('car_id')->unsigned();
            $table->foreign('car_id')->references('car_id')->on('cars')->onUpdate('cascade')->onDelete('cascade'); 
            
            $table->integer('fault_id')->unsigned();
            $table->foreign('fault_id')->references('fault_id')->on('faults')->onUpdate('cascade')->onDelete('cascade'); 

            $table->date('fixed_date')->nullable();  


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
        Schema::dropIfExists('carfaults');
    }
}
