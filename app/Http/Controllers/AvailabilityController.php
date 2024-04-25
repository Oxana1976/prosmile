<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctor.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $availability = new Availability($request->all());
        $availability->save();

        return redirect()->back()->with('success', 'Disponibilité ajoutée avec succès.');
        // Créer une nouvelle disponibilité avec les données validées
       
        // Rediriger vers une page de confirmation ou une autre page
        //return redirect()->route('doctor.show', $request->doctor_id)->with('success', 'Disponibilité ajoutée avec succès.');
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
        // $availability = Availability::findOrFail($id);
         return view('doctor.show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Availability $availability)
    {
        //
        $request->validate([
            'day' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $availability->update($request->all());

        return redirect()->back()->with('success', 'Disponibilité mise à jour avec succès.');


        //return redirect()->route('doctor.show', $request->doctor_id)->with('success', 'Disponibilité mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Availability $availability)
    {
        //
        $availability->delete();

        return redirect()->back()->with('success', 'Disponibilité supprimée avec succès.');
    }
}
