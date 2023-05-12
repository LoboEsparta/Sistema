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
            'name' =>'Jazmin Beatriz Angeles Molina',
            'username' => '9MU1T',
            'password' => bcrypt('JAZ0722'),
            'serie' =>'9MU1T',
        ])->assignRole('Admin');
    }
}

