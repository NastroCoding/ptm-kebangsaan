<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a sample user
        User::create([
            'name' => 'Administrator',
            'email' => 'notadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // Hash the password
        ]);
    }
}
