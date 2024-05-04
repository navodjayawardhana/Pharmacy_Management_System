<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InitialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the initial user
        DB::table('users')->insert([
            'name' => 'Main Owner',
            'email' => 'mainowner@gmail.com',
            'password' => Hash::make('123456'),
            'type' => '0', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
