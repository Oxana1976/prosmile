<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Carbon\Carbon;

class PageController extends Controller
{
    //
    public function index()
    {
        $doctors = Doctor::all();

        return view(
            'page.accueil',
            [
                'doctors' => $doctors,
                'resource' => 'doctors',
            ]
        );
    }

    public function show_all()
    {
        $doctors = Doctor::all();

        return view(
            'page.medecin',
            [
                'doctors' => $doctors,
                'resource' => 'doctors',

            ]
        );
    }

    public function medecin_show(string $id)
    {
        $doctor = Doctor::with('availabilities')->find($id);

        if (!$doctor) {
            return redirect()->route('doctor.index')->with('error', 'Docteur non trouvé.');
        }

        $availabilities = $doctor->formattedAvailabilities();

        $appointments = $doctor->appointments()->where('status', Appointment::STATUS_BOOKED)->pluck('date_time');

        foreach ($availabilities as $key => $availability) {
            foreach ($appointments as $appointment) {
                $availability_date = Carbon::createFromFormat(
                    'd/m/Y H:i',
                    $availability['day'] . " " . $availability['start']
                );
                $appointment_date = Carbon::createFromFormat(
                    'd/m/Y H:i',
                    Carbon::parse($appointment)->format('d/m/Y H:i')
                );

                if ($appointment_date->equalTo($availability_date)) {
                    unset($availabilities[$key]);
                    break;
                }
            }
        }

        $daysGrouped = collect($availabilities)->groupBy('day');
        $maxSlots = max($daysGrouped->map->count()->toArray());

        // Return the view with doctor data, including availabilities
        return view(
            'page.medecin_show',
            [
                'doctor' => $doctor,
                'availabilities' => $availabilities,
                'daysGrouped' => $daysGrouped,
                'maxSlots' => $maxSlots,
            ]
        );
    }

}
