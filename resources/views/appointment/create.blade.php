@extends('layouts.main')

@section('title', 'Confirmation de Rendez-vous')

@section('content')
    <h1>Confirmation de Rendez-vous pour </h1>
    <p>Date: </p>
    <p>Heure: </p>
    <p>Médecin: </p>
    <p>Patient: </p>
    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <!-- Vous pouvez ajouter d'autres champs du formulaire ici si nécessaire -->
        <button type="submit">Confirmer le rendez-vous</button>
    </form>
   
@endsection