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
        if (! Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }
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
            'phone_number' => $request->phone_number,
            'role_id' => Role::where('role', Role::PATIENT)->first()->id,
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
        $patient = Patient::with(['user', 'appointments.payment'])->findOrFail($id);
        return view('patient.show', compact('patient'));
        $patient = Patient::find($id);
        return view('patient.show', [
            'patient' => $patient,
        ]);
    }

    public function show_appointment(string $id)
    {   
        $appointment = Appointment::findOrFail($id);
        $patient = $appointment->patient;
        $doctor = $appointment->doctor;

        if (auth()->user()->role->role === Role::PATIENT && auth()->user()->id === $patient->user_id)
     
        {
            return view('user_appointment_show', [
                'patient' => $patient,
                'appointment' => $appointment,
                'doctor' => $doctor,
            ]);
        }
        if (! Gate::any([Role::MEDIC, Role::CHIEF,  Role:: SECRETARY])) {
            abort(403);
        }
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
        if (! Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }
        $patient = Patient::find($id);


       return view('patient.edit',[
           'patient' => $patient,

       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $patients = Patient::all();
        $request->validate([
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:20',
            'address'=> 'required',
            'about'=> 'required',
            'emergency_contact_name' => 'required|string|max:60',
            'emergency_contact_phone' => 'required|string|max:20'


        ]);
        // Mise à jour du User associé
        $patient = Patient::find($id);
        $patient->user->update([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        $patient->update([
            'about' => $request->about,
            'address' => $request->address,
            'emergency_contact_name' =>$request->emergency_contact_name,
            'emergency_contact_phone'=>$request->emergency_contact_phone,

        ]);
        return view('patient.show', [
            'patient' => $patient,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
