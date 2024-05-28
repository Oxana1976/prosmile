@extends('layouts.main')

@section('title', 'Fiche d\'un docteur')

@section('content')
    <main class="container section-padding30">
        <h1> {{ $doctor->user->firstname }} {{ $doctor->user->lastname }} </h1>
        <img class="img-fluid" src="{{  asset('images/' . $doctor->photo_url) }}" alt="Photo de {{ $doctor->user->firstname }}"
             style="width:150px; height:auto;">
        <ul>
            <li><strong>Spécialités:</strong> {{ $doctor->specialties->pluck('specialty')->implode(', ') }}</li>

            <li><strong>Description:</strong> {{ $doctor->description }}</li>
        </ul>

        <h3 class="mt-30">Disponibilités</h3>
        @if (Auth::check())
            <form action="{{ route('appointment.create') }}" method="post">
                @csrf
                @if (empty($availabilities))
                    <p>Aucune disponibilité trouvée.</p>
                @else
                    <table class="table table-responsive-lg table-bordered">
                        <thead class="thead-light">
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
        @else
            <p>Vous devez être <a href="{{ route('login') }}">connecté</a> pour créer un rendez-vous. Si vous n'avez pas de compte,
                vous pouvez vous <a href="{{ route('register') }}">inscrire ici</a>.</p>
        @endif

        <nav><a class="btn" href="{{ route('page.show_all') }}">Retour</a></nav>
    </main>
@endsection
