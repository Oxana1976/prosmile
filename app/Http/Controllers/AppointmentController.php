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
    public function create(Request $request)
    {
        //
        // // Récupérer l'ID du médecin à partir des données de la requête
       $doctorId = $request->doctor_id;

        // //  // Récupérer le médecin associé à l'ID
        $doctor = Doctor::find($doctorId);
           
      
        // //  // Récupérer l'ID du patient à partir des données de la requête
        //  $patientId = $request->patient_id;
        // // Récupérer le patient associé à l'ID
        // $patient = Patient::findOrFail($patientId);

       

        return view('appointment.create',[
            'doctor' => $doctor,
            
        ]);

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

    // public function showConfirmation($doctorId, $date, $time, $patientId)
    // {
    //     $doctor = Doctor::findOrFail($doctorId);
    //     $user = Auth::user(); // Récupérer l'utilisateur connecté
    //     $patient = Patient::findOrFail($patientId);

    //     // Passer toutes les variables nécessaires à la vue
    //     return view('confirm-appointment', compact('doctor', 'date', 'time', 'patient'));
    // }

}
