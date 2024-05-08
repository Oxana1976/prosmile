<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'birthdate' => fake()->dateTimeBetween('-30 years', '-18 years'),
            'gender' => fake()->randomElement(['f', 'h']),
            'address' => fake()->address,
            'about' => fake()->realText,
            'emergency_contact_name' => fake()->firstName . ' ' . fake()->lastName,
            'emergency_contact_phone' => fake()->phoneNumber,
        ];;
    }
}