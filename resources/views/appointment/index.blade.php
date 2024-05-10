@extends('layouts.main')

@section('title', 'Rendez-vous')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rendez-vous</title>
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
            .form-group {
            margin-bottom: 1em;
            }
            .btn-primary {
            background-color: grey; 
            border-color: black; 
            color: black; 
            font-weight: bold;
            }
            @media (max-width: 768px) {
                .btn-primary {
                    padding: 10px 20px; /* Plus grand pour les interactions tactiles */
                }
                .form-group label {
                    display: block; /* Assurez-vous que les labels sont au-dessus des entrées sur les petits écrans */
                }
                .table {
                    font-size: 0.8rem;
                }
                th, td {
                    padding: 4px; /* réduire le padding */
                }
            }
    </style>
</head>
<body>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->date_time }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td>{{ $appointment->duration }}</td>
                            
                            <td>{{ $appointment->diagnostic }}</td>
                            <td>{{ $appointment->patient->user->firstname }} {{ $appointment->patient->user->lastname }}</td>
                            <td>{{ $appointment->doctor->user->firstname }} {{ $appointment->doctor->user->lastname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <ul>
        <!-- Ajoutez vos liens ou boutons ici si nécessaire -->
    </ul>
</body>
</html>

@endsection
