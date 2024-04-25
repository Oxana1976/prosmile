@extends('layouts.main')

@section('title', 'Liste des Docteurs')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Docteurs</title>
      <!-- Formulaire de filtrage -->
        <form action="{{ route('doctors.filter') }}" method="GET" class="mb-4">
             <div class="form-group">
                <label for="specialty">Choisir une spécialité:</label>
                    <select name="specialty" id="specialty" class="form-control">
                        @foreach ($specialties as $specialty)
                            <option value="{{ $specialty->id }}">{{ $specialty->specialty }}</option>
                        @endforeach
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </form>
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
        <h2>Liste des Docteurs</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>INAMI</th>
                            <th>Genre</th>
                            <th>Spécialités</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->user->firstname }}</td>
                                <td>
                                    <a href="{{ route('doctor.show', $doctor->id) }}">{{ $doctor->user->lastname }}</a>
                                </td>
                                <td>{{ $doctor->inami }}</td>
                                <td>{{ $doctor->gender }}</td>
                                <td>{{ $doctor->specialties->pluck('specialty')->implode(', ') }}</td>
                                <td>{{ $doctor->user->email }}</td>
                                <td>{{ $doctor->user->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <ul>
        <li><a href="{{ route('doctor.create') }}">Ajouter</a></li>    
    </ul>
</body>
</html>

@endsection