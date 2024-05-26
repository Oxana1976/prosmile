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

                    <div class="container">
                        <h1> {{ $patient->user->firstname }} {{ $patient->user->lastname }} </h1>

                        <h3>Rendez-vous à {{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y H:i') }}</h3>
                        <ul>
                            <li><strong>Description:</strong>{{$appointment->description}}</li>
                            <li><strong>Diagnostique:</strong>{{$appointment->diagnostic}}</li>
                            <li><strong>Medecin:</strong>{{$doctor->user->firstname}} {{$doctor->user->lastname}}</li>
                        </ul>

                        <img src="{{ asset('images/' . $appointment->rx_image_url) }}" alt="Imagerie de {{ $patient->user->firstname }}"
                             style="width:150px; height:auto;">
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
