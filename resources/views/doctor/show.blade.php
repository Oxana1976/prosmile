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
    @php
        $availabilities = $doctor->formattedAvailabilities();
        $daysGrouped = collect($availabilities)->groupBy('day');
        $maxSlots = max($daysGrouped->map->count()->toArray());
    @endphp

    @if (empty($availabilities))
        <p>Aucune disponibilité trouvée.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    @foreach ($daysGrouped as $day => $slots)
                        <th>{{ $day }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < $maxSlots; $i++)
                    <tr>
                        @foreach ($daysGrouped as $slots)
                            <td>{{ $slots[$i]['start'] ?? '---' }}</td>
                        @endforeach
                    </tr>
                @endfor
            </tbody>
        </table>
    @endif
    <div><a href="{{ route('doctor.edit' ,$doctor->id) }}">Mettre à jour les info</a></div>
    
    <nav><a href="{{ route('doctor.index') }}">Retour à l'index</a></nav>
@endsection
   


