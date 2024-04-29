<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

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
            'resource' => 'artistes',
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
