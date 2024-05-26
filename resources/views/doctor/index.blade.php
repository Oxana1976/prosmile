@extends('adminlte::page')

@section('title', 'Liste des Docteurs')

@section('content_header')
    <h1>Dashboard - Liste des Docteurs</h1>
@stop

@section('content')
    <div class="container mt-5">
        <h2>Liste des Docteurs</h2>
        <form action="{{ route('doctors.filter') }}" method="GET" class="mb-4">
            <div class="form-group">
                <label for="specialty">Choisir une spécialité:</label>
                <select name="specialty" id="specialty" class="form-control">
                    @foreach ($specialties as $specialty)
                        <option value="{{ $specialty->id }}">{{ $specialty->specialty }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>INAMI</th>
                            <th>Genre</th>
                            <th>Spécialités</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Mettre à jour</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->user->firstname }}</td>
                                <td>
                                    <a href="{{ route('doctor.show', $doctor->id) }}">{{ $doctor->user->lastname }}</a>
                                </td>
                                <td>{{ $doctor->inami }}</td>
                                <td>{{ $doctor->gender }}</td>
                                <td>{{ $doctor->specialties->pluck('specialty')->implode(', ') }}</td>
                                <td>{{ $doctor->user->email }}</td>
                                <td>{{ $doctor->user->phone_number }}</td>
                                <td><a href="{{ route('doctor.edit' ,$doctor->id) }}"><i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

@endsection
