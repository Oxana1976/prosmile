@extends('layouts.main')

@section('title', 'Fiche d\'un patient')

@section('content')
    <h1> {{ $patient->user->firstname }} {{ $patient->user->lastname }} </h1>

    
    <ul>
        
        <li><strong>Adress:</strong> {{ $patient->address }}</li>
        <li><strong>Email:</strong> {{ $patient->user->email }}</li>
        <li><strong>Téléphone:</strong> {{ $patient->user->phone_number }}</li>
        <li><strong>Description:</strong> {{ $patient->about }}</li> 
        <li><strong>Contact en cas d'urgence:</strong> {{ $patient->emergency_contact_name }} {{ $patient->emergency_contact_phone }}</li>    
    </ul>

    <h3>Rendez-vous</h3>
    @if($patient->appointments->isEmpty())
        <p>Aucun rendez-vous trouvé.</p>
    @else
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>Date et Heure</th>
                    <th>Statut du Rendez-vous</th>
                    <th>Statut du Paiement</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patient->appointments as $appointment)
                    <tr>
                        <td>
                            <a href=" {{ route('patient.show_appointment', $patient->id, $appointment->id) }}">{{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y H:i') }}</a>
                        </td>
                        <td>{{ $appointment->status }}</td>
                        <td>
                            @if($appointment->payment)
                                {{ $appointment->payment->status }}
                            @else
                                Non effectué
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <div><a href="{{ route('patient.edit', $patient->id) }}">Mettre à jour les info</a></div>
    
@endsection
   


