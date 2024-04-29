@extends('layouts.main')

@section('title', 'Mettre à jour les information')

@section('content')
    <h2>Mettre à jour les information</h2>

    <form action="{{ route('secretary.update' ,$secretary->id) }}" method="post" >
        @csrf
        @method('PUT')
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $secretary->user->email }}"
                @if(old('email'))
                    value="{{ old('email') }}" 
                @else
                    value="{{ $secretary->user->email}}" 
                @endif
	            class="@error('email') is-invalid @enderror">

	            @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="phone_number">Téléphone</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $secretary->user->phone_number }}"
                @if(old('phone_number'))
                    value="{{ old('phone_number') }}" 
                @else
                    value="{{ $secretary->user->phone_number}}" 
                @endif
	            class="@error('phone_number') is-invalid @enderror">

	            @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
      
      
     

    

        

        <button>Modifier</button>
            <a href="{{ route('secretary.index',$secretary->id) }}">Annuler</a>

    </form>
    <form method="post" action="{{ route('secretary.delete', $secretary->id) }}"method="post"style="display: inline;">
		                @csrf
                        @method('DELETE')
		                    
		                <button type="submit">Supprimer</button>
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

  

  

    <nav><a href="{{ route('secretary.index') }}">Retour à l'index</a></nav>
@endsection