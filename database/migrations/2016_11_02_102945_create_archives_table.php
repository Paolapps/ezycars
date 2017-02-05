<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {         
            $table->increments('archive_id'); 
            $table->integer('booking_id');
            $table->integer('cust_id');
            $table->integer('car_id');       
            $table->date('pick_date');         
            $table->date('return_date');        
            $table->date('returned_date')->nullable(); 

            $table->timestamps();     
        }); 

         DB::update("ALTER TABLE archives AUTO_INCREMENT = 9001;");    
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archives');
    }
}
