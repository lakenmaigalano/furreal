<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalRecord;
class MedicalRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalRecord::create([
            'pet_id' => 1,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed initial health checkup and vaccination.',
            'record_date' => '2026-10-01',
        ]);

        MedicalRecord::create([
            'pet_id' => 2,
            'medical_condition' => 'Skin irritation',
            'treatment' => 'Applied prescribed skin ointment.',
            'record_date' => '2026-10-03',
        ]);

        MedicalRecord::create([
            'pet_id' => 3,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed deworming and routine checkup.',
            'record_date' => '2026-10-05',
        ]);

        MedicalRecord::create([
            'pet_id' => 4,
            'medical_condition' => 'Ear infection',
            'treatment' => 'Received veterinary ear drops.',
            'record_date' => '2026-10-07',
        ]);

        MedicalRecord::create([
            'pet_id' => 5,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed puppy vaccination.',
            'record_date' => '2026-10-09',
        ]);

        MedicalRecord::create([
            'pet_id' => 6,
            'medical_condition' => 'Minor dental buildup',
            'treatment' => 'Received dental cleaning.',
            'record_date' => '2026-10-11',
        ]);

        MedicalRecord::create([
            'pet_id' => 7,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed routine veterinary examination.',
            'record_date' => '2026-10-13',
        ]);

        MedicalRecord::create([
            'pet_id' => 8,
            'medical_condition' => 'Eye irritation',
            'treatment' => 'Received prescribed eye drops.',
            'record_date' => '2026-10-15',
        ]);

        MedicalRecord::create([
            'pet_id' => 9,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed annual vaccination.',
            'record_date' => '2026-10-17',
        ]);

        MedicalRecord::create([
            'pet_id' => 10,
            'medical_condition' => 'Healthy',
            'treatment' => 'Completed routine health checkup and deworming.',
            'record_date' => '2026-10-19',
        ]);
    }
}
