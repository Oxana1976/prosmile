<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition(): array
    {
        return [
            'gender' => fake()->randomElement(['f', 'h']),
            'inami' => fake()->randomDigit(),
            'description' => fake()->realText,
            'photo_url' => fake()->imageUrl(640, 480, 'doctor'),
        ];;
    }
}
