<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('customers', function (Blueprint $table) {         
            $table->increments('cust_id');         
            $table->string('first_name');         
            $table->string('last_name');
            $table->string('street');         
            $table->string('suburb'); 
            $table->string('state');         
            $table->integer('post_code');  
            $table->string('email');
            $table->string('active');

            $table->timestamps();     
        }); 

         DB::update("ALTER TABLE customers AUTO_INCREMENT = 1001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
