<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - ex6</title>
</head>

<body>

    <h1>Partie 1 - ex6</h1>
    <p>
        Créer une variable name et l'initialiser avec la valeur de votre choix.  
        Afficher : Bonjour + name + , comment vas tu ?.
    </p>

    <?php
        // déclaration des variables 
        $name = 'Vincent';

        // affichage
        echo "Bonjour {$name} , comment vas-tu ?";
    ?>

    <!-- ou -->

    <p>
        <?="Rebonjour $name, comment vas-tu ?"; ?>
    </p>

</body>

</html>