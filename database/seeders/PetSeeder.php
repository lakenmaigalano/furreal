<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
class PetSeeder extends Seeder
{
    public function run(): void
    {
        Pet::create([
            'shelter_id' => 1,
            'user_id' => 1,
            'name' => 'Mochi',
            'species' => 'Dog',
            'breed' => 'Shih Tzu',
            'age' => 2,
            'gender' => 'Female',
            'description' => 'A sweet and playful dog who loves cuddles.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 2,
            'user_id' => 1,
            'name' => 'Biscuit',
            'species' => 'Dog',
            'breed' => 'Golden Retriever',
            'age' => 3,
            'gender' => 'Male',
            'description' => 'A friendly dog who enjoys playing outdoors.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 3,
            'user_id' => 1,
            'name' => 'Luna',
            'species' => 'Cat',
            'breed' => 'Persian',
            'age' => 1,
            'gender' => 'Female',
            'description' => 'A calm and affectionate cat.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 4,
            'user_id' => 1,
            'name' => 'Oreo',
            'species' => 'Cat',
            'breed' => 'Domestic Shorthair',
            'age' => 2,
            'gender' => 'Male',
            'description' => 'A curious cat who loves attention.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 5,
            'user_id' => 1,
            'name' => 'Coco',
            'species' => 'Dog',
            'breed' => 'Poodle',
            'age' => 1,
            'gender' => 'Female',
            'description' => 'An energetic puppy who loves meeting people.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 6,
            'user_id' => 1,
            'name' => 'Simba',
            'species' => 'Cat',
            'breed' => 'Orange Tabby',
            'age' => 3,
            'gender' => 'Male',
            'description' => 'A relaxed cat who enjoys sunny spots.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 7,
            'user_id' => 1,
            'name' => 'Daisy',
            'species' => 'Dog',
            'breed' => 'Beagle',
            'age' => 2,
            'gender' => 'Female',
            'description' => 'A cheerful dog with lots of energy.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 8,
            'user_id' => 1,
            'name' => 'Milo',
            'species' => 'Cat',
            'breed' => 'Siamese',
            'age' => 1,
            'gender' => 'Male',
            'description' => 'A social kitten who loves companionship.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 9,
            'user_id' => 1,
            'name' => 'Max',
            'species' => 'Dog',
            'breed' => 'Aspen Mix',
            'age' => 4,
            'gender' => 'Male',
            'description' => 'A gentle and loyal dog looking for a home.',
            'status' => 'Available',
        ]);

        Pet::create([
            'shelter_id' => 10,
            'user_id' => 1,
            'name' => 'Nala',
            'species' => 'Cat',
            'breed' => 'Domestic Shorthair',
            'age' => 2,
            'gender' => 'Female',
            'description' => 'A playful cat who enjoys toys and treats.',
            'status' => 'Available',
        ]);//
    }
}
