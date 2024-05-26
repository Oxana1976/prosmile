@extends('adminlte::page')

@section('title', 'Fiche d\'un patient')

@section('content_header')
    <h1>Dashboard - Fiche d'un patient</h1>
@stop

@section('content')
    <div class="container">
        <h1> {{ $patient->user->firstname }} {{ $patient->user->lastname }} </h1>

        <h3>Rendez-vous à {{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y H:i') }} [{{$appointment->status}}]</h3>
        <ul>
            <li><strong>Description:</strong>{{$appointment->description}}</li>
            <li><strong>Diagnostique:</strong>{{$appointment->diagnostic}}</li>
            <li><strong>Medecin:</strong>{{$doctor->user->firstname}} {{$doctor->user->lastname}}</li>
        </ul>

        @if($appointment->rx_image_url)
        <img src="{{ asset('storage/'.$appointment->rx_image_url) }}" alt="Imagerie de {{ $appointment->patient->user->firstname }}"
             style="width:150px; height:auto;">
            <br>
            <br>
        @endif

        <a class="btn btn-primary" href="{{ route('appointment.edit', $appointment->id) }}">Editer la fiche du patient</a>
    </div>
@endsection



