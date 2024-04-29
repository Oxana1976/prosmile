@extends('layouts.main')

@section('title', 'Spécialités')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spécialités</title>
    
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
        <h2>Spécialités</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Specialté</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($specialties as $specialty)
                            <tr>
                                <td>{{ $specialty->specialty}}</td>
                                <td>
                                    <!-- Formulaire de suppression -->
                                    <form action="{{ route('specialty.delete', $specialty->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Supprimer</button>
                                    </form>
                                </td>
                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    <form action="{{ route('specialty.store') }}" method="post" method="post" >
        @csrf  
       
        <div>
            <label for="specialty">Spécialité</label>
            <textarea name="specialty"> </textarea>   
        </div>
        <button>Ajouter</button>
            <a href="{{ route('specialty.index') }}">Annuler</a>
    </form>
    
</body>
</html>

@endsection