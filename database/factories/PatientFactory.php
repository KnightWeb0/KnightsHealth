<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // we need to reference the doctor because
            'doctor_id' => Doctor::factory(),
            'first_name' => fake()->lastName(),
            'surname' => fake()->lastName(),
            'age' => fake()->dateTimeAD(),
            'gender' => fake()->randomElement(['male', 'female']),
        ];
    }
}
