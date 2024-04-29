<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $specialties = Specialty::all();
        
        return view('specialty.index',[
            'specialties' => $specialties,
            'resource' => 'specialties',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('specialty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'specialty' => 'required|string|max:30', 
        ]);

        $specialty = new Specialty();

        //Assignation des données et sauvegarde dans la base de données
        $specialty->specialty = $validated['specialty'];
        

        $specialty->save();

        return redirect()->route('specialty.index');
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
        try {
            DB::beginTransaction();
    
            $specialty = Specialty::findOrFail($id);
    
            // Detach all associated doctors (clean up the pivot table)
            $specialty->doctors()->detach();
    
            // Now it is safe to delete the specialty
            $specialty->delete();
    
            DB::commit();
            return redirect()->route('specialty.index')->with('success', 'Spécialité supprimée avec succès.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('specialty.index')->with('error', 'Erreur lors de la suppression de la spécialité.');
        }
    }
}
