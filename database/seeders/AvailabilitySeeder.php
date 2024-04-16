<?php

namespace Database\Seeders;

use App\Models\Availability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Availability::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $availabilities = [ 
         [
            'doctor_id' => 1,
            'day' =>  Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 1,
            'day' => Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 2,
            'day' =>  Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 3,
            'day' => Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 4,
            'day' =>  Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 4,
            'day' => Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],

        [
            'doctor_id' => 5,
            'day' =>  Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 5,
            'day' => Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 6,
            'day' =>  Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 4,
            'day' => Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 2,
            'day' =>  Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 3,
            'day' => Carbon::parse('next tuesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],

        [
            'doctor_id' => 2,
            'day' =>  Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 2,
            'day' => Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 3,
            'day' =>  Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 4,
            'day' => Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 1,
            'day' =>  Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 5,
            'day' => Carbon::parse('next wednesday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],

        [
            'doctor_id' => 3,
            'day' =>  Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 3,
            'day' => Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 2,
            'day' =>  Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 1,
            'day' => Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 3,
            'day' =>  Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 6,
            'day' => Carbon::parse('next thursday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],

        [
            'doctor_id' => 4,
            'day' =>  Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 4,
            'day' => Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 1,
            'day' =>  Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 2,
            'day' => Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],
        [
            'doctor_id' => 6,
            'day' =>  Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 6,
            'day' => Carbon::parse('next friday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('14:30:00'),
            'end_time' => Carbon::createFromTimeString('19:00:00'),
        ],

        [
            'doctor_id' => 6,
            'day' =>  Carbon::parse('next saturday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 3,
            'day' =>  Carbon::parse('next saturday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],
        [
            'doctor_id' => 5,
            'day' =>  Carbon::parse('next saturday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ],


    ];
     //Insert data in the table
     DB::table('availabilities')->insert($availabilities);

    }
}
