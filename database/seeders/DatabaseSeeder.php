<?php

namespace Database\Seeders;

//use App\Models\Secretary;

use App\Models\Specialty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,   
            SecretarySeeder::class,
            DoctorSeeder::class,
            SpecialtySeeder::class,
            DoctorSpecialtySeeder::class,
            AvailabilitySeeder::class,
            PatientSeeder::class,
            AppointmentSeeder::class,
            CommentSeeder::class,
            PaymentSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
