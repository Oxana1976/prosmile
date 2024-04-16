<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Specialty;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Specialty::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
           //Define data
           $specialties = [
            ['specialty'=>'La chirurgie dentaire'],
            ['specialty'=>'L\'endodontie'],
            ['specialty'=>'L\'orthodontie'],
            ['specialty'=>'La chirurgie maxillo-facial'],
            ['specialty'=>'La parodontologie'],
            ['specialty'=>'La pédodontie'],
        ];
        
        //Insert data in the table
        DB::table('specialties')->insert($specialties);
    }
}
