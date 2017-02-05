<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	//by default for laravel is id, to accept new one needs to be declared
    protected $primaryKey = 'booking_id';

    // define which attributes are mass assignable (for security)
    protected $fillable = array('cust_id', 'car_id', 'pick_date', 'return_date', 'returned_date' );

    // DEFINE RELATIONSHIPS --------------------------------------------------
    //function of relationships with foreign keys
		

    public function customer(){
        return $this->hasOne('App\Customer');
        //this customer belongs to this booking. access to any data of this customer
    }

    public function car(){
        return $this->hasOne('App\Car');
        //this car belongs to this booking. access to any data of this car
    }
}
