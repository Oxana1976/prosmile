@extends('layouts.main')

@section('title', 'Créer un Rendez-vous')

@section('content')
<h1>Créer un Rendez-vous pour {{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</h1>


<form method="POST" action="{{ route('appointment.store') }}">
    @csrf

    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
  
    <label for="start_time">Heure de début:</label>
    <input type="text" id="start_time" name="start_time" value="{{ $start_time }}" readonly>
    
    <label for="end_time">Heure de fin:</label>
    <input type="text" id="end_time" name="end_time" value="{{ $end_time }}" readonly>
    
    <button type="submit">Confirmer le rendez-vous</button>
</form>
@endsection
