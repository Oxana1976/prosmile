@extends('adminlte::page')

@section('title', 'Liste des Secretaires')

@section('content_header')
    <h1>Dashboard - Liste des Secretaires</h1>
@stop

@section('content')
    <div class="container mt-5">
        <h2>Liste des Secretaires</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Mettre à jour</th>
                            <th>Effacer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($secretaries as $secretary)
                            <tr>
                                <td>{{ $secretary->user->firstname }}</td>
                                <td>{{ $secretary->user->lastname }}</td>
                                <td>{{ $secretary->user->email }}</td>
                                <td>{{ $secretary->user->phone_number }}</td>
                                <td><a href="{{ route('secretary.edit' ,$secretary->id) }}"><i class="fa fa-edit"></i></a></td>
                                <td> <form method="post" action="{{ route('secretary.delete', $secretary->id) }}" method="post"
                                           style="display: inline;">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">SUPPRIMER</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
