<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $user= \App\User::create([
            'name' =>'Jon',
            'last_name' =>'Doe',
            'email' =>'landlord@gmail.com',
            'password' =>'password'
            ]);
       $user->assignRole('landlord');

        $user= \App\User::create([
            'name' =>'Jane',
            'last_name' =>'Doe',
            'email' =>'staff@gmail.com',
            'password' =>'password'
        ]);
        $user->assignRole('staff');
    }
}
