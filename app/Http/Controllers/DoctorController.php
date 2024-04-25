<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
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
        $specialties = Specialty::all();
        return view('doctor.create', compact('specialties'));
        
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
            'inami' => 'required|string|max:20',
            'description' => 'required',
            'photo' =>  'required|image|max:2048',
            'specialties' => 'required|array',
            'specialties.*' => 'exists:specialties,id'
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

        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoName = time() . '.' . $photoFile->getClientOriginalExtension(); // Créer un nom de fichier unique
            $photoFile->move(public_path('images'), $photoName); // Stocker l'image dans le storage public

            
        } else {
            return back()->withErrors('Une erreur est survenue lors du téléchargement de l\'image.');
        }

           $doctor = new Doctor([
            'gender' => $request->gender,
            'inami' => $request->inami,
            'description' => $request->description,
            'photo_url' => $photoName,
        ]);

            $user->doctor()->save($doctor);
       

            // Associate default member role to the user
           $memberRole = Role::where('role', 'member')->first();
           $user->roles()->attach($memberRole);

            // Attach specialties
            $doctor->specialties()->sync($request->input('specialties', [])); 
            //$doctor->specialties()->sync($request->specialties);
            return redirect()->route('doctor.index')->with('success', 'Médecin enregistré avec succès.');

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
        $doctor = Doctor::find($id);
         //$doctor->load('user');
       // $doctor = Doctor::with('availabilities')->findOrFail($id);
        //$doctor = Doctor::with('specialties')->findOrFail($id);
        $specialties = Specialty::all();
        
        return view('doctor.edit',[
            'doctor' => $doctor,
            'specialties' => $specialties,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Validation des données du formulaire
         $request->validate([
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:20',
            'description' => 'required',
            'photo' => 'nullable|image|max:2048',

        ]);

        // Mise à jour du User associé
        $doctor = Doctor::find($id);
        $doctor->user->update([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);
        $doctor->update([
            'description' => $request->description,
        ]);


        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo, si nécessaire
            if ($doctor->photo_url && File::exists(public_path('images/' . $doctor->photo_url))) {
                File::delete(public_path('images/' . $doctor->photo_url));
            }
    
            // Stocker la nouvelle photo
            $photoFile = $request->file('photo');
            $photoName = time() . '.' . $photoFile->getClientOriginalExtension();
            $photoFile->move(public_path('images'), $photoName);
            $doctor->photo_url = $photoName;
            $doctor->save();
        }

        

        $doctor = Doctor::findOrFail($id);
        $doctor->specialties()->sync($request->specialties);
        // return view('doctor.show',[
        //     'doctor' => $doctor,
        // ]);

        // foreach ($request->availabilities as $index => $availabilityData) {
        //     // Vérifier si l'ID est fourni dans les données de disponibilité
        //     if (isset($availabilityData['id'])) {
        //         // ID disponible, continuer avec la mise à jour ou la création
        //         $availability = Availability::findOrNew($availabilityData['id']);
        //     } else {
        //         // ID non disponible, créer une nouvelle instance d'Availability
        //         $availability = new Availability();
        //     }
        
        //     // Mettre à jour les données de disponibilité
        //     $availability->day = $availabilityData['day'];
        //     $availability->start_time = $availabilityData['start_time'];
        //     $availability->end_time = $availabilityData['end_time'];
        //     $availability->doctor_id = $id; // Assigner l'ID du médecin
        //     $availability->save();
        // }
        return view('doctor.show',[
            'doctor' => $doctor,
        ]);
	  
    }




    /**
     * Remove the specified resource from storage.
     */
    

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
