<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - ex2</title>
</head>

<body>

    <h1>Partie 1 - ex2</h1>
    <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  
        Attention age est de type entier.  Afficher leur contenu.</p>

    <?php
        
        // déclaration des variables 
        $lastName = "JOURDAN";
        $firstName = "Vincent";
        $age = 37;

        // affichage de l'exercice
        echo 'Je m\'appelle ';
        echo $lastName;
        echo ' ';
        echo $firstName;
        echo ("<br>");
        echo 'J\'ai ';
        echo $age;
        echo ' ans';

    ?>

</body>

</html>