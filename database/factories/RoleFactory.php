<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;
    public function definition(): array
    {
        return [
            'role' => $this->faker->unique()->randomElement(['admin', 'member', 'affiliate'])
        ];
    }
}
