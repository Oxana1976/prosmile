@extends('adminlte::page')

@section('title', 'Liste des Paiements')

@section('content_header')
    <h1>Dashboard - Paiements</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Paiements</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        thead th {
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .btn-primary {
            background-color: grey; 
            border-color: black; 
            color: black; 
            font-weight: bold;
        }
        @media (max-width: 768px) {
            th, td {
                padding: 4px; /* réduire le padding */
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Paiements</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom du patient</th>
                        <th>Date de rendez-vous</th>
                        <th>Durée</th>
                        <th>Montant</th>
                        <th>Statut</th>
                        <th>Stripe Charge ID</th>
                        <th>Date Créée</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->patient->user->firstname }} {{ $payment->patient->user->lastname }}</td>    
                            <td>{{ $payment->appointment->date_time }}</td>
                            <td>{{ $payment->appointment->duration }}</td>
                            <td>{{ number_format($payment->amount, 2) }} €</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ $payment->stripe_charge_id }}</td>
                            <td>{{ $payment->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
@endsection
