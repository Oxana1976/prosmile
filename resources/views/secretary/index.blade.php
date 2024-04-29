@extends('layouts.main')

@section('title', 'Liste des Secretaires')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Secretaires</title>
    
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
        <h2>Liste des Secretaires</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($secretaries as $secretary)
                            <tr>
                                <td>{{ $secretary->user->firstname }}</td>
                                <td>
                                    <a href="{{ route('secretary.edit', $secretary->id) }}">{{ $secretary->user->lastname }}</a>
                                </td>
                                <td>{{ $secretary->user->email }}</td>
                                <td>{{ $secretary->user->phone_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <ul>
        <li><a href="{{ route('secretary.create') }}">Ajouter</a></li>    
    </ul>
</body>
</html>

@endsection