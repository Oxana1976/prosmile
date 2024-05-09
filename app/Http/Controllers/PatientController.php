<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (! Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }
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
        return view('patient.create');
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
            'address'=> 'required',
            'birthdate'=> 'required|date',
            'about'=> 'required',
            'emergency_contact_name' => 'required|string|max:60',
            'emergency_contact_phone' => 'required|string|max:20'
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'language' => $request->language,
            'login' => $request->login,
            'phone_number' => $request->phone_number,
            'role_id' => Role::where('role', 'patient')->value('id'),
        ]);

        $user->save();

        $patient = new Patient([
            'gender' => $request->gender,
            'address' => $request->address,
            'about' => $request->about,
            'birthdate' => $request->birthdate,
            'emergency_contact_name' => $request-> emergency_contact_name,
            'emergency_contact_phone' => $request-> emergency_contact_phone,
            
        ]);

            $user->patient()->save($patient);
            return view('patient.show', [
                'patient' => $patient,
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /////
        $user_id = Auth::id(); 
        $patient = Patient::where('user_id', $user_id)->first();
        
        if (! Gate::any([Role::MEDIC, Role::CHIEF,  Role::PATIENT,  Role:: SECRETARY])) {
            abort(403);
        }
        if ($patient && $patient->id != $id) {
            abort(403); // Interdire l'accès avec une erreur 403
        }
        //////
        $patient = Patient::with(['user', 'appointments.payments'])->findOrFail($id);
        return view('patient.show', compact('patient'));
        $patient = Patient::find($id);
        return view('patient.show', [
            'patient' => $patient,
        ]);
    }

    public function show_appointment(string $id)
    {
        
          $user_id = Auth::id(); 
        $patient = Patient::where('user_id', $user_id)->first();
        
        if (! Gate::any([Role::MEDIC, Role::PATIENT, ])) {
            abort(403);
        }
        if ($patient && $patient->id != $id) {
            abort(403); // Interdire l'accès avec une erreur 403
        }
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