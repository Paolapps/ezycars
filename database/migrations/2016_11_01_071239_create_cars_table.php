<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {         
            $table->increments('car_id');         
            $table->string('rego_no');         
            $table->string('type');
            $table->string('color');         
            $table->string('transmission'); 
            $table->integer('model_year');         
            $table->string('suburb_loc')->nullable();  
            $table->mediumText('description_loc')->nullable(); 
            $table->decimal('rate_day', 5,2);
            $table->string('status'); 
            $table->string('retired');  

            $table->timestamps();     
        }); 

         DB::update("ALTER TABLE cars AUTO_INCREMENT = 3001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
