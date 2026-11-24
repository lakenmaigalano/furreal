<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adopter;
class AdopterSeeder extends Seeder
{
    public function run(): void
    {
        $adopters = [
            [2, '09171230001', 'Baguio City'],
            [3, '09171230002', 'La Trinidad, Benguet'],
            [4, '09171230003', 'Quezon City'],
            [5, '09171230004', 'Makati City'],
            [6, '09171230005', 'Cebu City'],
            [7, '09171230006', 'Davao City'],
            [8, '09171230007', 'Manila City'],
            [9, '09171230008', 'Pampanga'],
            [10, '09171230009', 'Cavite'],
            [11, '09171230010', 'Bulacan'],
        ];

        foreach ($adopters as $adopter) {
            Adopter::create([
                'user_id' => $adopter[0],
                'phone' => $adopter[1],
                'address' => $adopter[2],
            ]);
        }

        $applications = [
            [1, 1, 'Pending', '2026-11-01'],
            [2, 2, 'Approved', '2026-11-02'],
            [3, 3, 'Pending', '2026-11-03'],
            [4, 4, 'Rejected', '2026-11-04'],
            [5, 5, 'Pending', '2026-11-05'],
            [6, 6, 'Approved', '2026-11-06'],
            [7, 7, 'Pending', '2026-11-07'],
            [8, 8, 'Pending', '2026-11-08'],
            [9, 9, 'Approved', '2026-11-09'],
            [10, 10, 'Pending', '2026-11-10'],
        ];

        foreach ($applications as $application) {
            Adopter::findOrFail($application[0])
                ->pets()
                ->attach($application[1], [
                    'status' => $application[2],
                    'applied_on' => $application[3],
                ]);
    }
}
}