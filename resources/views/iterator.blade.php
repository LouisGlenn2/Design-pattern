<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iterator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    <h1>Mes voitures :</h1>
    <ul>
        <?php 
            for($i=0; $i<Count($listeVoiture); $i++) 
            {
                echo "<li>".$listeVoiture[$i]."</li>";
            }
        ?>
    </ul>
    </body>
</html>