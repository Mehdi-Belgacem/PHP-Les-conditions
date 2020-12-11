<?php
  $age = 18;
  $gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 2 Exercice 3</h1>
  <?php
    if ( $age >= 18 && $gender == 'Homme'){ ?>
      <p>Vous êtes un homme et vous êtes majeur</p><?php
    }elseif ( $age <= 18 && $gender == 'Homme') { ?>
      <p>Vous êtes un homme et vous êtes mineur</p><?php
    }elseif ( $age >= 18 && $gender == 'Femme') { ?>
      <p>Vous êtes une femme et vous êtes majeure</p><?php
    }elseif ( $age <= 18 && $gender == 'Femme') { ?>
      <p>Vous êtes une femme et vous êtes mineur</p><?php
    }?>
</body>
</html>