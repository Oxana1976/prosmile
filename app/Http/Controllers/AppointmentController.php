<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view(
            'appointment.index',
            [
                'appointments' => $appointments,
                'resource' => 'appointments',
                'doctors' => $doctors,
                'patients' => $patients,
            ]
        );
    }

    public function create(Request $request)
    {
        $day = base64_decode($request->get('day'));
        $availability_id = $request->get('availability_id');
        $start_time = $request->get('start_time');

        
        $doctor = Doctor::findOrFail($request->get('doctor_id'));
        
        if (auth()->user()->role->role === Role::PATIENT) {
            
            $patient = auth()->user()->patient;
            $patient_list = false;
        } else {
            $patient = Patient::with('user')->get();
            $patient_list = true;
        }

        return view(
            'appointment.create',
            [
                'doctor' => $doctor,
                'start_time' => $start_time,
                'day' => $day,
                'availability_id' => $availability_id,
                'patient' => $patient,
                'patient_list' => $patient_list,
                
            ]
        );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'doctor_id' => 'required|exists:doctors,id',
                'day' => 'required|date_format:d/m/Y',
                'start_time' => 'required|date_format:H:i',
            ]
        );

        $patient = $request->get('patient');

        $dateTime = Carbon::createFromFormat('d/m/Y H:i', $validatedData['day'] . ' ' . $validatedData['start_time'])
            ->format('Y-m-d H:i:s');

        $appointment = new Appointment;
        $appointment->doctor_id = $validatedData['doctor_id'];
       
    // 
        
        if (auth()->user()->role->role === Role::PATIENT) {
            $appointment->patient_id = auth()->user()->patient->id;
        } else {
            $appointment->patient_id = $patient;
        }


        $appointment->date_time = $dateTime;
        $appointment->status = 'Planifié';
        $appointment->duration = 30;
        $appointment->save();


//        Availability::where('id', $request->availability_id)->delete();

        return redirect()->route('appointment.index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
