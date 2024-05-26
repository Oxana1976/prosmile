@extends('adminlte::page')

@section('title', 'Mettre à jour les information')

@section('content_header')
    <h1>Dashboard - Mettre à jour les information</h1>
@stop

@section('content')
    <div class="container">
    <h2>Mettre à jour les information</h2>

    <form action="{{ route('patient.update' ,$patient->id) }}" method="post" >
        @csrf
        @method('PUT')
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $patient->user->email }}"
                @if(old('email'))
                    value="{{ old('email') }}"
                @else
                    value="{{ $patient->user->email}}"
                @endif
	            class="@error('email') is-invalid @enderror">

	            @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="phone_number">Téléphone</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $patient->user->phone_number }}"
                @if(old('phone_number'))
                    value="{{ old('phone_number') }}"
                @else
                    value="{{ $patient->user->phone_number}}"
                @endif
	            class="@error('phone_number') is-invalid @enderror">

	            @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="about">Description</label>
            <input type="text" id="about" name="about" value="{{ $patient->about }}"
                @if(old('about'))
                    value="{{ old('about') }}"
                @else
                    value="{{ $patient->about}}"
                @endif
	            class="@error('about') is-invalid @enderror">

	            @error('about')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="address">Adresse</label>
            <input type="text" id="address" name="address" value="{{ $patient->address }}"
                @if(old('address'))
                    value="{{ old('address') }}"
                @else
                    value="{{ $patient->address}}"
                @endif
	            class="@error('about') is-invalid @enderror">

	            @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="emergency_contact_name">Contacter en cas d'urgence:</label>
            <input type="text" id="emergency_contact_name" name="emergency_contact_name" value="{{ $patient->emergency_contact_name }}"
                @if(old('emergency_contact_name'))
                    value="{{ old('emergency_contact_name') }}"
                @else
                    value="{{ $patient->emergency_contact_name}}"
                @endif
	            class="@error('emergency_contact_name') is-invalid @enderror">

	            @error('emergency_contact_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="emergency_contact_phone">Numéro de téléphone en cas d'urgence</label>
            <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone" value="{{ $patient->emergency_contact_phone }}"
                @if(old('emergency_contact_phone'))
                    value="{{ old('emergency_contact_phone') }}"
                @else
                    value="{{ $patient->emergency_contact_phone}}"
                @endif
	            class="@error('emergency_contact_phone') is-invalid @enderror">

	            @error('emergency_contact_phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <button>Modifier</button>
        <a href="{{ route('patient.show',$patient->id) }}">Annuler</a>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    </div>


@endsection
