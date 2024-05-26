@extends('adminlte::page')

@section('content_header')
    <h1>Dashboard - Liste des rendez-vous</h1>
@stop

@section('content')
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="p-6 text-gray-900">
                        <!-- {{ __("You're logged in!") }} -->
                        Bonjour, {{ Auth::user()->firstname }}
                    </div>
                    <h3>Prochains rendez-vous</h3>
                    <ul>
                        @forelse($future_appointments as $future_appointment)
                            @if(Auth::user()->role->role === \App\Models\Role::CHIEF)
                                <li>{{ $future_appointment->patient->user->lastname . " " . $future_appointment->patient->user->firstname }}</li>
                            @endif
                            <li>{{ \Illuminate\Support\Carbon::parse($future_appointment->date_time)->format('d/m/Y H:i') }}
                                avec le
                                docteur {{ $future_appointment->doctor->user->lastname . " " . $future_appointment->doctor->user->firstname }}</li>
                        @empty
                            Pas de rendez-vous
                        @endforelse
                    </ul>
                    <h3>Rendez-vous passés</h3>
                    <ul>
                        @forelse($passed_appointments as $passed_appointment)
                            @if(Auth::user()->role->role === \App\Models\Role::CHIEF)
                                <li>{{ $passed_appointment->patient->user->lastname . " " . $passed_appointment->patient->user->firstname }}</li>
                            @endif
                            <li>{{ \Illuminate\Support\Carbon::parse($passed_appointment->date_time)->format('d/m/Y H:i') }}
                                avec le
                                docteur {{ $passed_appointment->doctor->user->lastname . " " . $passed_appointment->doctor->user->firstname }}</li>
                        @empty
                            Pas de rendez-vous
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
