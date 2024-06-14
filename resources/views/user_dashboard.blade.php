<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->
                    Bonjour, {{ Auth::user()->firstname }}

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                <h3>Prochains rendez-vous</h3>
                                <ul>
                                    @forelse($future_appointments as $future_appointment)
                                        @if(Auth::user()->role->role === \App\Models\Role::CHIEF)
                                            <li>{{ $future_appointment->patient->user->lastname . " " . $future_appointment->patient->user->firstname }}</li>
                                        @endif
                                        <li>
                                            <a style="text-decoration: underline;" href="{{ route('patient.show_appointment', $future_appointment->id) }}">
                                                {{ \Illuminate\Support\Carbon::parse($future_appointment->date_time)->format('d/m/Y H:i') }}
                                            </a>
                                            avec le docteur {{ $future_appointment->doctor->user->lastname . " " . $future_appointment->doctor->user->firstname }}
                                        </li>
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
                                        <li>
                                            <a style="text-decoration: underline;" href="{{ route('patient.show_appointment', $passed_appointment->id) }}">
                                                {{ \Illuminate\Support\Carbon::parse($passed_appointment->date_time)->format('d/m/Y H:i') }}
                                            </a>
                                            avec le docteur {{ $passed_appointment->doctor->user->lastname . " " . $passed_appointment->doctor->user->firstname }}
                                              <!-- Ajouter le bouton de téléchargement de facture -->
                                            <a style="text-decoration: underline;" href="{{ route('invoice.download',  $passed_appointment->payment->id) }} " >
                                                Télécharger la facture
                                            </a>
                                        </li>
                                    @empty
                                        Pas de rendez-vous
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
