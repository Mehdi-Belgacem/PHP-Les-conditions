<?php
  $magnitude = 5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 2 Exercice 4</h1>
  <?php
    switch ($magnitude)
    {
      case 1:?>
        <p>Micro-séisme impossible à ressentir.</p><?php
      break;
      case 2:?>
        <p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p><?php 
      break;
      case 3:?>
        <p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p><?php
      break;
      case 4:?>
        <p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p><?php
      break;
      case 5:?>
        <p>Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p><?php
      break;
      case 6:?>
        <p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p><?php
      break;
      case 7:?>
        <p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p><?php
      break;
      case 8:?>
        <p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p><?php
      break;
      case 9:?>
        <p>Séisme capable de tout détruire sur une très vaste zone.</p><?php
      break;
    }
  ?>
</body>
</html>