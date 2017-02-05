<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //setting up the relation of the role with the user
    public function users()
    {
    	return $this->belongsToMany('App\USer', 'role_user', 'role_id', 'user_id');
    }

    public function hasAnyRole($roles)
    {
    	//int the array of roles, check if the user has a role
        if (is_array($roles)) { 
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    
    public function hasRole($role)//user has an especific role?
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
