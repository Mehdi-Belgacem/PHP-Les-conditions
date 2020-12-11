<?php
  $isOk = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 2 Exercice 7</h1>
  <?php
    if ( $isOk == false ) { ?> <!-- Peut aussi être écrit de cette manière (!$isOk) $isOK simple correspond à true $isOk avec (!) devant correspond à false -->
      <p>c'est pas bon !!!</p><?php
    }else { ?>
      <p>c'est ok !!</p> <?php
    }
  ?>
  
</body>
</html>