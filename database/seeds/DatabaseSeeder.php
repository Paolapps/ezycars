<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //here we call all the seeders

        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
