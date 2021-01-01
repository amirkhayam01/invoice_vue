<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => "Amir Malik",
            'email' => 'amir@gmail.com',
            'address' => 'Peshawar',
            'company' => 'AntonX Peshawar',
            'country' => 'Pakistan',
            'phone' => '03449050899',
        ]);

        DB::table('clients')->insert([
            'name' => "Khizar Khayam",
            'email' => 'khizar@gmail.com',
            'address' => 'Peshawar',
            'company' => 'AntonX Peshawar',
            'country' => 'Pakistan',
            'phone' => '03449050123',
        ]);

        DB::table('clients')->insert([
            'name' => "Umair Khayam",
            'email' => 'umair@gmail.com',
            'address' => 'Peshawar',
            'company' => 'Peshawar Company',
            'country' => 'Pakistan',
            'phone' => '03449050123',
        ]);
    }
}
