<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'FurReal Admin',
            'email' => 'admin@furreal.com',
            'password' => 'adminpassword',
            'is_admin' => true,
        ]);
        $users = [
            ['Laken Mai Galano', 'mai@example.com'],
            ['Rya Gem Raymundo', 'rya@example.com'],
            ['Levy Earl Calado', 'levy@example.com'],
            ['Taylor Reyes', 'taylor@example.com'],
            ['Jordan Lee', 'jordan@example.com'],
            ['Sam Garcia', 'sam@example.com'],
            ['Casey Flores', 'casey@example.com'],
            ['Riley Mendoza', 'riley@example.com'],
            ['Avery Torres', 'avery@example.com'],
            ['Morgan Reyes', 'morgan@example.com'],
        ];    

        foreach ($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => 'password123',
            ]);
        }
    }
}
