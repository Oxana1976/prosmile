@extends('layouts.main')

@section('title', 'Inscription')

@section('content')
    <h2>Inscription</h2>

    <form action="{{ route('patient.store') }}" method="post" method="post" >
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
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
        </div>
        
        <div>
            <label for="phone_number">Numéro de téléphone:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
        </div>  
       
        <div>
            <label for="address">Adresse</label>
            <textarea name="address"> </textarea>
            
        </div>
        <div>
            <label for="birthdate">Date de naissance:</label>
            <input type="date" name="birthdate" id="birthdate" required>
        </div>
        <div>
            <label for="gender">Genre:</label>
            <select id="gender" name="gender" required>
                <option value="M">Homme</option>
                <option value="F">Femme</option>
                
            </select>
        </div>
        <div>
            <label for="about">Déscription:</label>
            <input type="text" id="about" name="about" required>
        </div>

        <div>
            <label for="emergency_contact_name">Contacter en cas d'urgence:</label>
            <input type="text" id="emergency_contact_name" name="emergency_contact_name" required>
        </div>

        <div>
            <label for="emergency_contact_phone">Numéro de téléphone en cas d'urgence</label>
            <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone" required>
        </div>

        

        <button>Inscription</button>
            <a href="">Annuler</a>
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