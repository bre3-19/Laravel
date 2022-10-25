<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->name = "Bruno Alejandro";
        $client->phone_number = "6121234567";
        $client->email = "bre3_19@alu.uabcs.mx";
        $client->save(); 

        $client = new Client();

        $client->name = "Angel Iran";
        $client->phone_number = "6121234567";
        $client->email = "angeliran@alu.uabcs.mx";
        $client->save(); 
    }
}
