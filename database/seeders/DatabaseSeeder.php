<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Creating a single doctor
// $doctor = Doctor::factory()->create();
// // Creating multiple doctors
// $doctors = Doctor::factory()->count(5)->create();


// // Creating a single patient
// $patient = Patient::factory()->create();


// // Creating multiple patients
// $patients = Patient::factory()->count(10)->create();


// // Creating a patient with a specific doctor
// $doctor = Doctor::factory()->create();

// $patient = Patient::factory()->create(['doctor_id' => $doctor->id]);

Doctor::factory()
->count(5)
->has(Patient::factory()->count(10))
->create();
    }
}
