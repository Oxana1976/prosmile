@extends('layouts.main')

@section('title', 'Fiche d\'un docteur')

@section('content')
    <h1> {{ $doctor->user->firstname }} {{ $doctor->user->lastname }} </h1>

    <img src="{{ asset('images/' . $doctor->photo_url) }}" alt="Photo de {{ $doctor->user->firstname }}"
         style="width:150px; height:auto;">
    <ul>
        <li><strong>Spécialités:</strong> {{ $doctor->specialties->pluck('specialty')->implode(', ') }}</li>
        <li><strong>Numéro INAMI:</strong> {{ $doctor->inami }}</li>
        <li><strong>Email:</strong> {{ $doctor->user->email }}</li>
        <li><strong>Téléphone:</strong> {{ $doctor->user->phone_number }}</li>
        <li><strong>Description:</strong> {{ $doctor->description }}</li>
    </ul>

    <h3>Disponibilités</h3>
    <form action="{{ route('appointment.create') }}" method="post">
        @csrf
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
                        @foreach ($daysGrouped as $day => $slots)

                            <td>
                                @if (isset($slots[$i]) && !empty($slots[$i]['start']))
                                    <a href="{{ route('appointment.create', ['doctor_id' => $doctor->id,'availability_id' => $slots[$i]['id'], 'start_time' => $slots[$i]['start'], 'end_time' => $slots[$i]['end'], 'day' => base64_encode($day)]) }}">
                                        {{ $slots[$i]['start'] }} - {{ $slots[$i]['end'] }}
                                    </a>
                                @else
                                    ---
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endfor
                </tbody>
            </table>
        @endif
    </form>
    <div><a href="{{ route('doctor.edit' ,$doctor->id) }}">Mettre à jour les infos</a></div>

    <nav><a href="{{ route('doctor.index') }}">Retour à l'index</a></nav>
@endsection
