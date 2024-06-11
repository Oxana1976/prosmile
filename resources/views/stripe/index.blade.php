<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="container mx-auto">
<h1>Pour la patient {{ $appointment->patient->user->firstname. ' ' .  $appointment->patient->user->lastname }}</h1>

<form action="{{ route('stripe.store') }}" method="post" class="mt-16">
    {{ csrf_field() }}
    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
    Montant : <input type="text" value="50" name="amount" class="h-4 w-56"><br>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-10">
        Payment
    </button>
</form>

</body>
</html>
