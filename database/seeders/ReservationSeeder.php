<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();

        $reservation->date_entry = Carbon::parse('2022-10-25');
        $reservation->date_exit = Carbon::parse('2022-10-28');
        $reservation->client_id = 1;
        $reservation->room_id = 1;
        $reservation->cost_per_night = 400.00;
        $reservation->save(); 

        $reservation = new Reservation();

        $reservation->date_entry = Carbon::parse('2022-10-25');
        $reservation->date_exit = Carbon::parse('2022-10-29');
        $reservation->client_id = 2;
        $reservation->room_id = 2;
        $reservation->cost_per_night = 600.00;
        $reservation->save(); 
    }
}
