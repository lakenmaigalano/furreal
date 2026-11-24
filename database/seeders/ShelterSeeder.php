<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shelter;
class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Shelter::create([
            'name' => 'Happy Paws Shelter',
            'address' => 'Baguio City',
            'contact_number' => '09171234567',
        ]);

        Shelter::create([
            'name' => 'Fur Haven Rescue Center',
            'address' => 'La Trinidad, Benguet',
            'contact_number' => '09181234567',
        ]);

        Shelter::create([
            'name' => 'Paws and Claws Foundation',
            'address' => 'Quezon City',
            'contact_number' => '09191234567',
        ]);

        Shelter::create([
            'name' => 'Safe Tails Animal Shelter',
            'address' => 'Makati City',
            'contact_number' => '09201234567',
        ]);

        Shelter::create([
            'name' => 'Second Chance Pet Home',
            'address' => 'Cebu City',
            'contact_number' => '09211234567',
        ]);

        Shelter::create([
            'name' => 'Little Paws Rescue',
            'address' => 'Davao City',
            'contact_number' => '09221234567',
        ]);

        Shelter::create([
            'name' => 'Kind Hearts Animal Center',
            'address' => 'Manila City',
            'contact_number' => '09231234567',
        ]);

        Shelter::create([
            'name' => 'Hopeful Tails Shelter',
            'address' => 'Pampanga',
            'contact_number' => '09241234567',
        ]);

        Shelter::create([
            'name' => 'Forever Friends Rescue',
            'address' => 'Cavite',
            'contact_number' => '09251234567',
        ]);

        Shelter::create([
            'name' => 'Pawfect Home Foundation',
            'address' => 'Bulacan',
            'contact_number' => '09261234567',
        ]);
        
    }
}
