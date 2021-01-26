<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Facade</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div>
            <h2>Usine</h2>
            @foreach ($usines as $usine)
                <p>{{ $usine->toString() }}</p>
            @endforeach
        </div>
        <div>
            <h2>Concessions</h2>
            @foreach ($concessions as $concession)
                <p><strong>{{ $concession->getNom() }}</strong></p>
                <ul>
                @foreach ($concession->getVoiture() as $voiture)
                    <li>{{ $voiture->toString() }}</li>
                @endforeach
                </ul>
            @endforeach
        </div>
        <div>
            <h2>Factures</h2>
            @foreach ($factures as $facture)
                <p>{{ $facture->getTexte() }}</p>
            @endforeach
        </div>
    </body>
</html>