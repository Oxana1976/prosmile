@extends('layouts.main')

@section('title', 'Fiche d\'un patient')

@section('content')
    <h1> {{ $patient->user->firstname }} {{ $patient->user->lastname }} </h1>

    <h3>Rendez-vous à {{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y H:i') }}</h3>
        <ul>
            <li><strong>Description:</strong>{{$appointment->description}}</li>
            <li><strong>Diagnostique:</strong>{{$appointment->diagnostic}}</li>
            <li><strong>Medecin:</strong>{{$doctor->user->firstname}} {{$doctor->user->lastname}}</li>
        </ul>
        
        <img src="{{ asset('images/' . $appointment->rx_image_url) }}" alt="Imagerie de {{ $patient->user->firstname }}" style="width:150px; height:auto;">

    <nav><a href="{{ route('patient.show' ,$patient->id) }}">Retour</a></nav>
@endsection
   


