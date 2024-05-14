@extends('layouts.main')

@section('title', 'Créer un Rendez-vous')

@section('content')
<h1>Créer un Rendez-vous pour {{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</h1>


<form  action="{{ route('appointment.store') }}" method="post">
    @csrf
    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
    <input type="hidden" name="availability_id" value="{{ $availability_id }}">
    <label for="day">Jour de la réservation:</label>
    {{ $day }}
    
    <input type="hidden" name="day" value="{{ $day }}">

    <label for="start_time">Heure de début:</label>
    {{ $start_time }}
    
    <input type="hidden" name="start_time" value="{{ $start_time }}">

    <button type="submit">Confirmer le rendez-vous</button>
</form>
@endsection
