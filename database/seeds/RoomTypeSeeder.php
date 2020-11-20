<?php

use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomTypes::create(['name' => 'single']);
        RoomTypes::create(['name' => 'apartment']);
    }
}
