<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    protected $primaryKey = 'damage_id';

    // define which attributes are mass assignable (for security) 
    protected $fillable = array('booking_id', 'description', 'fixed_date');

    //---RELATIONSHIP------------------------------------------
    public function bookings(){
    return $this->hasOne('App\Booking');
	}

    public function cars(){
        return $this->hasOne('App\Booking');
    }
}
