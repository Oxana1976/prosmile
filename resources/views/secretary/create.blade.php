@extends('adminlte::page')

@section('title', 'Ajouter une secretaire')

@section('content_header')
    <h1>Dashboard - Ajouter une secretaire</h1>
@stop

@section('content')
    <div class="container">
    <h2>Ajouter une secretaire</h2>

    <form action="{{ route('secretary.store') }}" method="post" method="post">
        @csrf
        <div>
            <label for="firstname">Prénom:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>

        <div>
            <label for="lastname">Nom:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="language">Langue:</label>
            <input type="text" id="language" name="language" required>
        </div>

     

        <div>
            <label for="phone_number">Numéro de téléphone:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
        </div>


        <div>
            <label for="gender">Genre:</label>
            <select id="gender" name="gender" required>
                <option value="M">Homme</option>
                <option value="F">Femme</option>

            </select>
        </div>

        <button>Ajouter</button>
    </form>

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
    </div>
@endsection
