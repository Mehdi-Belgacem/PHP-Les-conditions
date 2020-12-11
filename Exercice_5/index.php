<?php
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
  <h1>Partie 2 Exercice 5</h1>
  <?php
    if ( $gender != 'Homme') { ?>
      <p>C'est une développeuse !!!</p><?php
    }else { ?>
      <p>C'est un développeur !!!</p><?php
    } 
  ?>
</body>
</html>