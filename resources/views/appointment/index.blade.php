@extends('adminlte::page')

@section('title', 'Liste des Rendez-vous')

@section('content_header')
    <h1>Dashboard - Liste des Rendez-vous</h1>
@stop

@section('content')
    <div class="container mt-5">
        <h2>Rendez-vous</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Date et heure</th>
                    <th>Status</th>
                    <th>Durée</th>
                    <th>Diagnostic</th>
                    <th>Patient</th>
                    <th>Médecin</th>
                    <th>Paiement</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>
                            <a href="{{ route('patient.show_appointment', $appointment->id) }}">
                                {{ $appointment->date_time }}
                            </a>
                        </td>
                        <td>{{ $appointment->status }}</td>
                        <td>{{ $appointment->duration }}</td>

                        <td>{{ $appointment->diagnostic }}</td>
                        <td>{{ $appointment->patient->user->firstname }} {{ $appointment->patient->user->lastname }}</td>
                        <td>{{ $appointment->doctor->user->firstname }} {{ $appointment->doctor->user->lastname }}</td>
                        <td>
                            @if($appointment->payment)
                                @if($appointment->payment->status === \App\Models\Payment::PENDING)
                                    Demande de paiement déjà envoyée
                                @elseif($appointment->payment->status === \App\Models\Payment::COMPLETED)
                                    Payé
                                @endif
                            @elseif($appointment->status === \App\Models\Appointment::STATUS_COMPLETED)
                                <a href="{{ route('stripe.index', $appointment->id) }}">
                                    Faire un paiement
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <h2>Liste des erreurs de validation</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection