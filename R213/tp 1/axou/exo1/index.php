<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body>
  <h1>TP #1 / Exo 1</h1>
  <p>
    <?php
    $jour = 8;
    $mois = ' octobre';
    $date = $jour . $mois;
    echo 'Nous sommes le '. $date;

    /* ou alors on peut faire 
    echo 'Nous sommes le' . $jour . $mois; */

    ?>
  </p>
</body>
</html>