<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::create([
            'name' =>'Hilario',
            'username' => 'Hilario14',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
    }
}

