@extends('layouts.main')

@section('title', 'Mettre à jour les information')

@section('content')
    <h2>Mettre à jour les information</h2>

    <form action="{{ route('doctor.update' ,$doctor->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $doctor->user->email }}"
                @if(old('email'))
                    value="{{ old('email') }}" 
                @else
                    value="{{ $doctor->user->email}}" 
                @endif
	            class="@error('email') is-invalid @enderror">

	            @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="phone_number">Téléphone</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $doctor->user->phone_number }}"
                @if(old('phone_number'))
                    value="{{ old('phone_number') }}" 
                @else
                    value="{{ $doctor->user->phone_number}}" 
                @endif
	            class="@error('phone_number') is-invalid @enderror">

	            @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description">{{ $doctor->description }}</textarea>
            
        </div>
        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo">
        </div>
     

        <h3>Spécialités</h3>
                @foreach ($specialties as $specialty)
            <div>
                <input type="checkbox" name="specialties[]" value="{{ $specialty->id }}"
                    {{ $doctor->specialties->contains($specialty) ? 'checked' : '' }}>
                <label>{{ $specialty->specialty }}</label>
            </div>
                @endforeach

        

        <button>Modifier</button>
            <a href="{{ route('doctor.show',$doctor->id) }}">Annuler</a>
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

  

  

    <nav><a href="{{ route('doctor.index') }}">Retour à l'index</a></nav>
@endsection