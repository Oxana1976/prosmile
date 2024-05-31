<?php
namespace Database\Factories;

use App\Models\Availability;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvailabilityFactory extends Factory
{
    protected $model = Availability::class;

    public function definition()
    {
        return [
            'doctor_id' => Doctor::factory(),
            'day' => Carbon::parse('next monday')->toDateString(),
            'start_time' => Carbon::createFromTimeString('10:00:00'),
            'end_time' => Carbon::createFromTimeString('13:30:00'),
        ];
    }
}
