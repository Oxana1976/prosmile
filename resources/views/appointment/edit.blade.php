@extends('adminlte::page')

@section('title', 'Fiche d\'un patient')

@section('content_header')
    <h1>Dashboard - Fiche d'un patient</h1>
@stop

@section('content')
    <div class="container">
        <h1> {{ $appointment->patient->user->firstname }} {{ $appointment->patient->user->lastname }} </h1>
        <h3>Rendez-vous à {{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y H:i') }}</h3>

        <form class="form" action="{{ route('appointment.update', $appointment->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <ul>
            <li class="form-group">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" placeholder="Entrez ici votre description" cols="50" rows="10">{{$appointment->description}}</textarea>
            </li>
            <li class="form-group">
                <label for="diagnostic">Diagnostique:</label>
                <input type="text" id="diagnostic" name="diagnostic" value="{{ $appointment->diagnostic }}">
            </li>
            <li class="form-group">
                <label for="status">Status :</label>
                <select id="status" name="status">
                    @foreach(\App\Models\Appointment::STATUS as $status)
                        <option value="{{ $status }}" @if($status === $appointment->status) selected="selected" @endif>{{ $status }}</option>
                    @endforeach
                </select>
            </li>
            <li><label for="doctor">Medecin:</label>
                {{ $appointment->doctor->user->firstname}} {{ $appointment->doctor->user->lastname}}</li>
            <li>
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo">
                @if($appointment->rx_image_url)
                    <div>
                        <a href="{{ route('appointment.image.delete', $appointment->id) }}"><i class="fa fa-times"></i></a>
                            <img src="{{ asset('storage/'.$appointment->rx_image_url) }}" alt="Imagerie de {{ $appointment->patient->user->firstname }}"
                                 style="width:150px; height:auto;">
                    </div>
                @endif
            </li>
        </ul>
            <input class="btn btn-primary" type="submit" value="Mettre à jour">
        </form>

    </div>
@endsection



