<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 

    public function run(): void
    {
        User::factory(20)->create();
        //we create one "admin" here
        User::factory()->chief()->create(
            [
                'email' => 'chief@mail.com',
            ]
        );
    }
}
