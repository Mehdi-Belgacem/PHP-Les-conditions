<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 2 Exercice 1</h1>
  <?php
    $age = 26;
    if ( $age >= 18 ) { // Si l'âge est supérieur ou égale à 18ans alors on indiqueras ci dessous vous êtes majeur.
      echo '<p>Vous êtes majeur</p>';
    }else { // Sinon on indiqueras ci dessous vous êtes mineur.
      echo '<p>Vous êtes mineur</p>' ;
    }
  ?>
</body>
</html>