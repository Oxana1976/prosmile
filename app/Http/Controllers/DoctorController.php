<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Specialty;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class DoctorController extends Controller
{
    public function index()
    {
        if (!Gate::any([Role::MEDIC, Role::CHIEF, Role:: SECRETARY])) {
            abort(403);
        }

        $doctors = Doctor::all();
        $specialties = Specialty::all(); // Récupérer toutes les spécialités

        return view(
            'doctor.index',
            [
                'doctors' => $doctors,
                'resource' => 'doctors',
                'specialties' => $specialties,
            ]
        );
    }

    public function create()
    {
        if (!Gate::allows(Role::CHIEF)) {
            abort(403);
        }

        $specialties = Specialty::all();

        return view(
            'doctor.create',
            [
                'specialties' => $specialties
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required|string|max:60',
                'lastname' => 'required|string|max:60',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'language' => 'required|string|max:2',
                'phone_number' => 'required|string|max:20',
                'gender' => 'required|string|max:1',
                'inami' => 'required|string|max:20',
                'description' => 'required',
                'photo' => 'required|image|max:2048',
                'specialties' => 'required|array',
                'specialties.*' => 'exists:specialties,id'
            ]
        );

        $user = User::create(
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'language' => $request->language,
                'phone_number' => $request->phone_number,
                'role_id' => Role::where('role', 'medecin')->value('id'),
            ]
        );

        $user->save();

        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoName = time() . '.' . $photoFile->getClientOriginalExtension(); // Créer un nom de fichier unique
            $photoFile->move(public_path('images'), $photoName); // Stocker l'image dans le storage public
        } else {
            return back()->withErrors('Une erreur est survenue lors du téléchargement de l\'image.');
        }

        $doctor = new Doctor(
            [
                'gender' => $request->gender,
                'inami' => $request->inami,
                'description' => $request->description,
                'photo_url' => $photoName,
            ]
        );

        $user->doctor()->save($doctor);

        // Associate default member role to the user
        // $memberRole = Role::where('role', 'member')->first();
        // $user->roles()->attach($memberRole);

        // Attach specialties
        $doctor->specialties()->sync($request->input('specialties', []));
        //$doctor->specialties()->sync($request->specialties);
        return redirect()->route('doctor.index')->with('success', 'Médecin enregistré avec succès.');
    }

    public function show(string $id)
    {
        $doctor = Doctor::with('availabilities')->find($id);

        if (!$doctor) {
            return redirect()->route('doctor.index')->with('error', 'Docteur non trouvé.');
        }

        $availabilities = $doctor->formattedAvailabilities();

        $appointments = $doctor->appointments()->where('status', Appointment::STATUS_BOOKED)->pluck('date_time');

        foreach ($availabilities as $key => $availability)
        {
            foreach ($appointments as $appointment)
            {
                $availability_date = Carbon::createFromFormat('d/m/Y H:i', $availability['day']." ".$availability['start']);
                $appointment_date = Carbon::createFromFormat('d/m/Y H:i', Carbon::parse($appointment)->format('d/m/Y H:i'));

                if($appointment_date->equalTo($availability_date))
                {
                    unset($availabilities[$key]);
                    break;
                }
            }
        }

        $daysGrouped = collect($availabilities)->groupBy('day');
        $maxSlots = max($daysGrouped->map->count()->toArray());

        // Return the view with doctor data, including availabilities
        return view(
            'doctor.show',
            [
                'doctor' => $doctor,
                'availabilities' => $availabilities,
                'daysGrouped' => $daysGrouped,
                'maxSlots' => $maxSlots,
            ]
        );
    }

    public function edit(string $id)
    {
        if (!Gate::allows(Role::CHIEF)) {
            abort(403);
        }
        $doctor = Doctor::find($id);
        //$doctor->load('user');
        // $doctor = Doctor::with('availabilities')->findOrFail($id);
        //$doctor = Doctor::with('specialties')->findOrFail($id);
        $specialties = Specialty::all();

        return view(
            'doctor.edit',
            [
                'doctor' => $doctor,
                'specialties' => $specialties,
            ]
        );
    }

    public function update(Request $request, string $id)
    {
        //Validation des données du formulaire
        $request->validate(
            [
                'email' => 'required|email|max:255',
                'phone_number' => 'required|max:20',
                'description' => 'required',
                'photo' => 'nullable|image|max:2048',

            ]
        );

        // Mise à jour du User associé
        $doctor = Doctor::find($id);
        $doctor->user->update(
            [
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]
        );
        $doctor->update(
            [
                'description' => $request->description,
            ]
        );


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

        return view(
            'doctor.show',
            [
                'doctor' => $doctor,
            ]
        );
    }

    public function filter(Request $request)
    {
        $specialtyId = $request->specialty;

        $doctors = Doctor::whereHas('specialties', function ($query) use ($specialtyId) {
            // Préciser que `id` se réfère à `specialties.id`
            $query->where('specialties.id', $specialtyId);
        })->get();

        $specialties = Specialty::all(); // Pour repopuler le formulaire de sélection

        return view(
            'doctor.index',
            [
                'doctors' => $doctors,
                'resource' => 'doctors',
                'specialties' => $specialties,
            ]
        );
    }
}
