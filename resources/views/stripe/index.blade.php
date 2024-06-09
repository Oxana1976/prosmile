<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="container mx-auto">
<h1>Payer la consultation</h1>

<form action="{{ route('stripe.post') }}" method="post" class="mt-16">
    {{ csrf_field() }}
    Montant : <input type="text" value="5" name="amount" class="h-4 w-56"><br>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-10">
        Payment
    </button>
</form>

</body>
</html>
