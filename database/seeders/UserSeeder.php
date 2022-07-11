<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@example.com',
             'password' => Hash::make('password'),
            'gender' => 'Male',
             'role_id' => 2,
         ]);
        User::factory()->create([
            'name' => 'Doctor',
            'email' => 'doctor@example.com',
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'role_id' => 1,
        ]);
        User::factory()->create([
            'name' => 'Patient',
            'email' => 'patient@example.com',
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'role_id' => 3,
        ]);
    }
}
