<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Availability;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $patients = Patient::all(); // Récupérer toutes les spécialités

        return view(
            'appointment.index',
            [
                'appointments' => $appointments,
                'resource' => 'appointments',
                'doctors' => $doctors,

                'patients' => $patients,
            ]
        );
    }

    public function create(Request $request)
    {
        //$day = $request->get('day');
        $day = base64_decode($request->get('day'));
        //dd($day);
        //dd($request->all());
        $start_time = $request->get('start_time');
        // Vous pouvez récupérer les informations supplémentaires du docteur si nécessaire
        $doctor = Doctor::findOrFail($request->get('doctor_id'));

        // Afficher le formulaire de création de rendez-vous avec les données pré-remplies
        return view(
            'appointment.create',
            [
                'doctor' => $doctor,
                'start_time' => $start_time,
                'day' => $day,
            ]
        );
    }

    public function store(Request $request)
    {
       // $formattedDay = Carbon::createFromFormat('d/m/Y', $request->get('day'));
        //TODO enregistrer les réservations ici
        //dd($request->all(), $formattedDay);
        // $request->validate(
        //     [
        //         'doctor_id' => 'required|exists:doctors,id',
        //         'day' => 'required|date_format:Y-m-d', // Assurez-vous que le format de date correspond à ce que vous attendez
        //         'start_time' => 'required|date_format:H:i:s', // Vérifiez également le format de l'heure
        //     ]
        // );
        // // Combinaison de la date et de l'heure pour créer un datetime
         //$dateTime =  Carbon::createFromFormat('d/m/Y', $request->get('day'));
        // $dateTime = $validatedData['day'] . ' ' . $validatedData['start_time'];
        // $validatedData['day'] . ' ' . $validatedData['start_time'];
            
      
        $validatedData = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            
            'day' => 'required|date_format:d/m/Y', //  format de date correspond à ce que vous attendez
            'start_time' => 'required|date_format:H:i', // Vérifie également le format de l'heure
        ]);
       // $date = Carbon::createFromFormat('d/m/Y H:i', $validatedData['day'] . ' ' . $validatedData['start_time']);
        //dd($request->all());
        // Combinaison de la date et de l'heure pour créer un datetime
        //$dateTime = $validatedData['day'] . ' ' . $validatedData['start_time'];
        //$dateTime = $validatedData['day'] . ' ' . $validatedData['start_time'];
        $dateTime = Carbon::createFromFormat('d/m/Y H:i', $validatedData['day'] . ' ' . $validatedData['start_time'])
                      ->format('Y-m-d H:i:s'); // Format nécessaire pour MySQL
         // Création du rendez-vous
            $appointment = new Appointment;
           // $appointment->doctor_id = $validatedData['doctor_id'];
            $appointment->doctor_id = $validatedData['doctor_id'];
            $appointment->patient_id = auth()->user()->patient->id;//l'utilisateur est connecté et qu'il s'agit du patient
            //dd(auth()->user(), auth()->user()->patient);
            $appointment->date_time = $dateTime;
            $appointment->status = 'Planifié'; // Statut initial du rendez-vous
            $appointment->duration = 30; // Durée fixe
            $appointment->save();

        // Supprimer la plage horaire réservée
        Availability::where('id', $request->availability_id)->delete();
        dd( $request->availability_id);
        return redirect()->route('appointment.index');

    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
