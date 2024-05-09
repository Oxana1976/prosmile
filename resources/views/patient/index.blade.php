@extends('layouts.main')

@section('title', 'Liste des Patients')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="form-group">
    <form action="{{ route('patient.index') }}" method="GET">
        <label for="birthdate">Date de Naissance:</label>
        <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ request('birthdate') }}">
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>
</div>
    <title>Liste des Patients</title>
     
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
        <h2>Liste des Patient</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Genre</th>
                            <th>Date de naissance</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->user->firstname }}</td>
                                <td>
                                    <a href="{{ route('patient.show', $patient->id) }} ">{{ $patient->user->lastname }}</a>
                                </td>
                               
                                <td>{{ $patient->gender }}</td>
                                <td>{{ $patient->birthdate }}</td>
                                <td>{{ $patient->user->email }}</td>
                                <td>{{ $patient->user->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <ul>
        <li><a href="{{ route('patient.create') }}">Inscrire un patient</a></li>    
    </ul>
</body>
</html>

@endsection