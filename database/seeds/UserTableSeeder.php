<?php

use Illuminate\Database\Seeder;
use App\User;//requires this extention
use App\Role;//requires this extention

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //retriving the role
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = 'Maria';
        $user->last_name = 'Staff';
        $user->email = 'maria@gmail.com';
        $user->password = bcrypt('staff');
        $user->save();//--------------------------saves the role
        $user->roles()->attach($role_user);//--------attach role to user

        $user = new User();
        $user->first_name = 'Paola';
        $user->last_name = 'Admin';
        $user->email = 'paola@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);//--------attach role to user
    }
}
