<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Observeur</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
        $i = 1;
        foreach($sujet->getObserveur() as $observ)
        {
            echo "<p> Observeur n°".$i." : ".$observ->display()."</p>";
            $i++;
        }
    ?>
    <?php $sujet->update("En cour de changement") ?>
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
        $i = 1;
        foreach($sujet->getObserveur() as $observ)
        {
            echo "<p> Observeur n°".$i." : ".$observ->display()."</p>";
            $i++;
        }
    ?>
    <?php $sujet->update("Final") ?>
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
        $i = 1;
        foreach($sujet->getObserveur() as $observ)
        {
            echo "<p> Observeur n°".$i." : ".$observ->display()."</p>";
            $i++;
        }
    ?>
    <h3>Suppression d'un observeur</h3>
    <?php
        $sujet->suppObserveur($observeur1);
        $i = 1;
        foreach($sujet->getObserveur() as $observ)
        {
            echo "<p> Observeur n°".$i." : ".$observ->display()."</p>";
            $i++;
        }
    ?>
    </body>
</html>
