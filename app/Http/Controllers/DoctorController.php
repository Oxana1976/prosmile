<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialty;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::all();
        $specialties = Specialty::all(); // Récupérer toutes les spécialités
        return view('doctor.index',[
            'doctors' => $doctors,
            'resource' => 'doctors',
            'specialties' => $specialties,
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
       // $doctor = Doctor::find($id);
        $doctor = Doctor::with('availabilities')->find($id);

        // Check if the doctor was found
        if (!$doctor) {
            return redirect()->route('doctor.index')->with('error', 'Docteur non trouvé.');
        }
    
        // Return the view with doctor data, including availabilities
        return view('doctor.show', [
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

    public function filter(Request $request)
    {
    $specialtyId = $request->specialty;

    $doctors = Doctor::whereHas('specialties', function ($query) use ($specialtyId) {
        // Préciser que `id` se réfère à `specialties.id`
        $query->where('specialties.id', $specialtyId);
    })->get();

    $specialties = Specialty::all(); // Pour repopuler le formulaire de sélection

    return view('doctor.index',[
        'doctors' => $doctors,
        'resource' => 'doctors',
        'specialties' => $specialties,
    ]);
    }
}
