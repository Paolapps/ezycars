<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'cust_id';

    //define which attributes are mass assignable (for security)
    protected $fillable = array('first_name', 'last_name', 'street', 'suburb', 'state', 'post_code', 'email');

    //---RELATIONSHIP------------------------------------------
    public function bookings(){
    return $this->hasMany('App\Booking');
	}

}
