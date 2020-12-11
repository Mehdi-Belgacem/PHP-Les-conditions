<?php
  $age = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 2 Exercice 6</h1>
  <?php
    if ($age >= 18) { ?>
      <p>Tu es majeur.</p><?php
    }else{ ?>
      <p>Tu n'es pas majeur.</p><?php
    }
  ?>
</body>
</html>