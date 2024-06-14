<!DOCTYPE html>
<html>
<head>
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Facture</h1>
    <p>Rendez-vous: {{ $appointment->date_time }}</p>
    <p>Patient: {{ $patient->user->firstname }} {{ $patient->user->lastname }}</p>
    <p>Email: {{ $patient->user->email }}</p>
    <p>Amount Due: €{{ number_format($amount, 2) }}</p>
    <p>Status: {{ $payment->status }}</p>
</body>
</html>
