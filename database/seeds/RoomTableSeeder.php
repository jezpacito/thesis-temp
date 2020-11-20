<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Room::create([
            'name' => 'room 1',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam assumenda commodi deleniti explicabo inventore ipsam iste itaque',
            'room_types_id' => 1,
            'price' => 3500,
        ]);
        \App\Room::create([
            'name' => 'room 2 ',
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam assumenda commodi deleniti explicabo inventore ipsam iste itaque',
            'room_types_id' => 2,
            'price' => 4500,
        ]);
    }
}
