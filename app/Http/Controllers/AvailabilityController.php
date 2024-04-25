<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;
use App\Models\Doctor;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::with(['user', 'availabilities'])->get();
        return view('availability.index', compact('doctors'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('availability.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $availability = new Availability([
            'doctor_id' => $request->doctor_id,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        $availability->save();

        return redirect()->route('availability.index')->with('success', 'Disponibilité ajoutée avec succès.');
        
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
        $availability = Availability::findOrFail($id);
        return view('availability.edit', compact('availability'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'day' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $availability = Availability::findOrFail($id);
        $availability->update($request->all());

        return redirect()->route('availability.index')->with('success', 'Disponibilité mise à jour avec succès.');
    }
      


      

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $availability = Availability::findOrFail($id);
        $availability->delete();

        return redirect()->route('availability.index')->with('success', 'Disponibilité supprimée avec succès.');
    }
       
    


}
