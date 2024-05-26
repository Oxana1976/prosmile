@extends('layouts.main')

@section('title', 'Créer un Rendez-vous')

@section('content')
    <div class="container" id="confirm-appointment">
<h1>Créer un Rendez-vous pour {{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</h1>


<form  action="{{ route('appointment.store') }}" method="post">
    @csrf
    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
    <input type="hidden" name="availability_id" value="{{ $availability_id }}">
    @if($patient_list)
    <select name="patient">
        @foreach($patient as $p)
            <option value="{{ $p->id }}">{{ $p->user->firstname }} {{ $p->user->lastname }} </option>
        @endforeach
    </select>
    @else
        <b class="name"> {{ $patient->user->firstname }} {{ $patient->user->lastname }}</b>
    @endif
    <br>
    <label for="day">Jour de la réservation:</label>
    <strong>{{ $day }}</strong>

    <input type="hidden" name="day" value="{{ $day }}">
    <br>
    <label for="start_time">Heure de début:</label>
    <strong>{{ $start_time }}</strong>

    <input type="hidden" name="start_time" value="{{ $start_time }}">
<br>
    <button class="btn" type="submit">Confirmer le rendez-vous</button>
</form>
    </div>
@endsection
