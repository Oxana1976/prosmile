@extends('adminlte::page')

@section('title', 'Disponibilités des Médecins')

@section('content_header')
    <h1>Dashboard - Disponibilités des Médecins</h1>
@stop

@section('content')
    <div class="container mt-5">
        <h2>Disponibilités des Médecins</h2>

        @foreach ($doctors as $doctor)
            <h3>{{ $doctor->user->firstname }} {{ $doctor->user->lastname }}</h3>
            <table border="1">
                <thead>
                <tr>
                    <th>Jour</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($doctor->availabilities as $availability)
                    <tr>
                        <form action="{{ route('availability.update', $availability->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('PUT')

                        <td><input type="text" name="day" value="{{ $availability->day }}"></td>
                        <td type="time"><input type="text" name="start_time" value="{{ $availability->start_time }}"></td>
                        <td type="time"><input type="text" name="end_time" value="{{ $availability->end_time }}"></td>
                        <td><button type="submit">Modifier</button>
                        </form>
                        </td>
                        <td>
                            <form method="post" action="{{ route('availability.delete', $availability->id) }}"
                                  method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Formulaire pour ajouter une nouvelle disponibilité -->
            <form action="{{ route('availability.store') }}" method="post">
                @csrf
                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                <div>
                    <label for="day_{{ $doctor->id }}">Jour :</label>
                    <input type="text" id="day_{{ $doctor->id }}" name="day" required>
                </div>
                <div>
                    <label for="start_time_{{ $doctor->id }}">Heure de début :</label>
                    <input type="time" id="start_time_{{ $doctor->id }}" name="start_time" required>
                </div>
                <div>
                    <label for="end_time_{{ $doctor->id }}">Heure de fin :</label>
                    <input type="time" id="end_time_{{ $doctor->id }}" name="end_time" required>
                </div>
                <button type="submit">Ajouter une disponibilité</button>
            </form>
            <hr>
        @endforeach

        @if ($errors->any())
            <div class="alert alert-danger">
                <h4>Liste des erreurs de validation</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <nav>
            <a href="{{ route('doctor.index') }}">Retour à l'index</a>
        </nav>
@endsection
