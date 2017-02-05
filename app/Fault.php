<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fault extends Model
{
    protected $primaryKey = 'fault_id';

    // define which attributes are mass assignable (for security) 
    protected $fillable = array('car_id', 'description', 'fixed_date');

    //---RELATIONSHIP------------------------------------------
    public function car(){
        return $this->hasOne('App\Car');
        //this car belongs to this booking. access to any data of this car
    }
	}
}
