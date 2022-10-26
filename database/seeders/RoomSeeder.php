<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new Room();

        $room->number = "101";
        $room->capacity = 2;
        $room->type = "Double";
        $room->save(); 

        $room = new Room();

        $room->number = "501";
        $room->capacity = 2;
        $room->type = "Suite";
        $room->save(); 
    }
}
