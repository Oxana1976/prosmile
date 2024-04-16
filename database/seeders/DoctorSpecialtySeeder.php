<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Models\User;

class DoctorSpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('doctor_specialty')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

      
    $doctorSpecialties = [
        ['doctor_id' => 6, 'specialty_id' => 4], // Marine: Chirurgien Maxillo-Facial
        ['doctor_id' => 6, 'specialty_id' => 3], // Marine: Orthodontiste

        ['doctor_id' => 5, 'specialty_id' => 1], // Pierre: Chirurgien-Dentiste
        ['doctor_id' => 5, 'specialty_id' => 6], // Pierre: Pédodontiste

        ['doctor_id' => 4, 'specialty_id' => 1], // Patricia: Chirurgien-Dentiste
        ['doctor_id' => 4, 'specialty_id' => 2], // Patricia: Endodontiste

        ['doctor_id' => 3, 'specialty_id' => 4], // Anna: Stomatologue
        ['doctor_id' => 3, 'specialty_id' => 6], // Anna: Pédodontiste

        ['doctor_id' => 2, 'specialty_id' => 5], // John: Parodontiste
        ['doctor_id' => 2, 'specialty_id' => 2], // John: Endodontiste
        ['doctor_id' => 1, 'specialty_id' => 1], // Bob: Chirurgien-Dentiste
    ];

    DB::table('doctor_specialty')->insert($doctorSpecialties);

    }
}
