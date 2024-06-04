<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class AppointmentController extends Controller
{
    public function index()
    {
        if (! Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }
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

        $day = $validatedData['day'];
        $start_time = $validatedData['start_time'];
        $doctor_id = $validatedData['doctor_id'];

        $patient = $request->get('patient');

        $dateTime = Carbon::createFromFormat('d/m/Y H:i', $day . ' ' . $start_time)
            ->format('Y-m-d H:i:s');

        $isValidAppointment = Appointment::query()
            ->where('patient_id', $patient)
            ->where('doctor_id', $doctor_id)
            ->where('date_time', $dateTime)
            ->doesntExist();

        if ($isValidAppointment) {
            $appointment = new Appointment;
            $appointment->doctor_id = $doctor_id;

            if (auth()->user()->role->role === Role::PATIENT) {
                $appointment->patient_id = auth()->user()->patient->id;
            } else {
                $appointment->patient_id = $patient;
            }

            $appointment->date_time = $dateTime;
            $appointment->status = Appointment::STATUS_BOOKED;
            $appointment->duration = 30;
            $appointment->save();

            $confirmMessage = ['success', 'Votre rendez-vous a bien été pris'];
        } else {
            $confirmMessage = ['error', 'Rendez-vous impossible car le médecin est déjà pris'];
        }

        if (auth()->user()->role->role === Role::PATIENT) {
            return redirect()->route('user.dashboard')->with($confirmMessage[0], $confirmMessage[1]);
        } else {
            return redirect()->route('appointment.index')->with($confirmMessage[0], $confirmMessage[1]);
        }
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id);

        return view(
            'appointment.edit',
            [
                'appointment' => $appointment
            ]
        );
    }

    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $picture = $request->file('photo');

        if($picture)
        {
            if (Storage::disk('public')->exists($picture)) {
                Storage::disk('public')->delete($picture);
            }

            $path = Storage::disk('public')->put('image', $picture);
            $appointment->rx_image_url = $path;
        }

        $appointment->description = $request->get('description');
        $appointment->diagnostic = $request->get('diagnostic');
        $appointment->status = $request->get('status');
        $appointment->save();

        return redirect()->route('patient.show_appointment', $appointment->id);
    }

    public function imageDelete(int $id)
    {
        $appointment = Appointment::findOrFail($id);

        if (Storage::disk('public')->exists($appointment->rx_image_url)) {
            Storage::disk('public')->delete($appointment->rx_image_url);
        }

        $appointment->rx_image_url = null;
        $appointment->save();

        return redirect()->route('appointment.edit', $appointment->id);
    }

    public function destroy(string $id)
    {
    }
}
