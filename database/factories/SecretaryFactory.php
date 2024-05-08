<?php

namespace Database\Factories;

use App\Models\Secretary;
use Illuminate\Database\Eloquent\Factories\Factory;

class SecretaryFactory extends Factory
{
    protected $model = Secretary::class;

    public function definition(): array
    {
        return [
            'gender' => fake()->randomElement(['f', 'h']),
        ];;
    }
}
