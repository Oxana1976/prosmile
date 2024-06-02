<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         
        if (! Gate::allows( Role::CHIEF)) {
             abort(403);
         }

         
     }
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
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|string|max:1',

        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'language' => $request->language,
            'phone_number' => $request->phone_number,
            'role_id' => Role::where('role', 'secrétaire')->value('id'),
        ]);

        $user->save();
           $secretary = new Secretary([
            'gender' => $request->gender,
        ]);

        $user->secretary()->save($secretary);
     
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

    public function destroy(string $id): RedirectResponse
    {
        $secretary = Secretary::findOrFail($id);
        $user = $secretary->user;
        $secretary->delete();
        $user->delete();

        return redirect()->route('secretary.index')->with('success', 'Disponibilité supprimée avec succès.');
    }
}
