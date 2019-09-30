<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo3</title>
</head>
<body>
    
    <?php

    $age = 35 ;
    $gender = "Homme";

    if ( $gender == "Homme" && $age >= 18) {
        
        echo "Vous êtes un homme et vous êtes majeur";
    }

    elseif ( $gender == "Homme" && $age <= 18) {

        echo "Vous êtes un homme et vous êtes mineur";
    }

    elseif ( $gender == "Femme" && $age >= 18) {

        echo "Vous êtes une femme et vous êtes majeur";
    }

    elseif ( $gender == "Femme" && $age <= 18) {

        echo "Vous êtes une femme et vous êtes mineur";
    }

    ?>




</body>
</html>