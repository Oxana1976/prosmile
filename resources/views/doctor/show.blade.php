@extends('layouts.main')

@section('title', 'Fiche d\'un docteur')

@section('content')
    <h1> {{ $doctor->user->firstname }} {{ $doctor->user->lastname }} </h1>

    <img src="{{ asset('images/' . $doctor->photo_url) }}" alt="Photo de {{ $doctor->user->firstname }}" style="width:150px; height:auto;">
    <ul>
        <li><strong>Spécialités:</strong> {{ $doctor->specialties->pluck('specialty')->implode(', ') }}</li>
        <li><strong>Numéro INAMI:</strong> {{ $doctor->inami }}</li>
        <li><strong>Email:</strong> {{ $doctor->user->email }}</li>
        <li><strong>Téléphone:</strong> {{ $doctor->user->phone_number }}</li>
        <li><strong>Description:</strong> {{ $doctor->description }}</li>    
    </ul>

    <h3>Disponibilités</h3>
    <ul>
        @forelse ($doctor->formattedAvailabilities() as $availability)
            <li>Date: {{ $availability['day'] }}, de {{ $availability['start'] }} à {{ $availability['end'] }}</li>
        @empty
            <li>Aucune disponibilité trouvée.</li>
        @endforelse
    </ul>

    <nav><a href="{{ route('doctor.index') }}">Retour à l'index</a></nav>
@endsection