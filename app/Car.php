<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey = 'car_id';

    // define which attributes are mass assignable (for security) 
    protected $fillable = array('rego_no', 'type', 'color', 'transmission', 'model_year', 'suburb_loc', 'description_loc', 'rate_day, status', 'retired');

    //---RELATIONSHIP------------------------------------------
    public function bookings(){
    return $this->belongsTo('App\Booking');
	}
}