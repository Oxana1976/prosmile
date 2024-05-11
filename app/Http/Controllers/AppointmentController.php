<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $patients = Patient::all(); // Récupérer toutes les spécialités
        return view('appointment.index',[
            'appointments' => $appointments,
            'resource' => 'appointments',
            'doctors' => $doctors,
            
            'patients' => $patients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
  

public function create($doctor_id,  $start_time, $end_time)
{
    // Vous pouvez récupérer les informations supplémentaires du docteur si nécessaire
    $doctor = Doctor::findOrFail($doctor_id);
    
    // Préparation des données pour le formulaire
    $data = [
        'doctor' => $doctor,
        
        'start_time' => $start_time,
        'end_time' => $end_time,
    ];

    // Afficher le formulaire de création de rendez-vous avec les données pré-remplies
    return view('appointment.create', $data);
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return redirect()->route('appointment.confirmation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
