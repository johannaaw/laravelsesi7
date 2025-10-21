<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::updateOrCreate([
            'name' => 'Anderies',
            'email' => 'anderies@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create related profile
        $user->profile()->updateOrCreate([
            'phone' => '08123456789',
            'bio' => 'Lecturer and tech enthusiast.',
        ]);
    }
}
