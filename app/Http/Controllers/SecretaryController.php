<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $secretaries = Secretary::all();
        
        return view('secretary.index',[
            'secretaries' => $secretaries,
            'resource' => 'secretaries',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
        return view('secretary.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'language' => 'required|string|max:2',
            'login' => 'required|string|max:30|unique:users',
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|string|max:1',
          
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'language' => $request->language,
            'login' => $request->login,
            'phone_number' => $request->phone_number,
        ]);

        $user->save();

      

           $secretary = new Secretary([
            'gender' => $request->gender,
            
            
        ]);

            $user->secretary()->save($secretary);
            
       

            // Associate default admin role to the user
           $adminRole = Role::where('role', 'admin')->first();
           $user->roles()->attach($adminRole);
           return redirect()->route('secretary.index')->with('success', 'Secretaire enregistrée avec succès.');

          
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
        $secretary = Secretary::find($id);
         //$doctor->load('user');
       // $doctor = Doctor::with('availabilities')->findOrFail($id);
        //$doctor = Doctor::with('specialties')->findOrFail($id);
        //$specialties = Specialty::all();
        
        return view('secretary.edit',[
            'secretary' => $secretary,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $secretaries = Secretary::all();
        $request->validate([
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:20',
          

        ]);
        // Mise à jour du User associé
        $secretary = Secretary::find($id);
        $secretary->user->update([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);
        return view('secretary.index', [
            'secretaries' => $secretaries, 
           
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $secretary = Secretary::findOrFail($id);
        //   // Récupérer l'ID de l'utilisateur associé
        // $userId = $secretary->user->id;
        // $secretary->delete();
        // // Supprimer l'utilisateur associé
        //  User::destroy($userId);


           // Utiliser une transaction pour assurer l'intégrité des données
    DB::transaction(function () use ($id) {
        $secretary = Secretary::with('user')->findOrFail($id);  // Charger la secrétaire avec l'utilisateur associé
        $userId = $secretary->user->id;

        // Supprimer les entrées associées dans la table role_user
        DB::table('role_user')->where('user_id', $userId)->delete();

        // Supprimer la secrétaire
        $secretary->delete();

        // Supprimer l'utilisateur associé
        User::destroy($userId);
    });
        return redirect()->route('secretary.index')->with('success', 'Disponibilité supprimée avec succès.');
    }
}
