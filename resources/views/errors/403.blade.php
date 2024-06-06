<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès Refusé</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 50px;
        }
        body {
            font: 20px Helvetica, sans-serif;
            color: #333;
        }
        article {
            display: block;
            text-align: left;
            width: 650px;
            margin: 0 auto;
        }
        a {
            color: #dc8100;
            text-decoration: none;
        }
        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
<article>
    <h1>Accès Refusé</h1>
    <div>
        <p>Vous n'avez pas les permissions nécessaires pour accéder à cette page.</p>
        <p><a href="{{ url('/') }}">Retour à l'accueil</a></p>
    </div>
</article>
</body>
</html>
