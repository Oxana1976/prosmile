<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        //$patients = Patient::all();
        $patients = Patient::with('user')
        ->byBirthdate($request->birthdate)
        ->get();
        
        return view('patient.index',[
            'patients' => $patients,
            'resource' => 'patients',

           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $patient = Patient::with(['user', 'appointments.payments'])->findOrFail($id);
        return view('patient.show', compact('patient'));
        $patient = Patient::find($id);
        return view('patient.show', [
            'patient' => $patient,
        ]);
    }

    public function show_appointment(string $id)
    {
        //
        $patient = Patient::with(['user', 'appointments.payments'])->findOrFail($id);
        $appointment = Appointment::find($id);
        $doctor = Doctor::find($id);
       
       
        return view('patient.show_appointment', [
            'patient' => $patient,
            'appointment' => $appointment,
            'doctor' => $doctor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
