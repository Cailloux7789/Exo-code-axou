<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body>
  <h1>TP #1 / Exo 3</h1>
  <form method="post" action="reponse.php">
    <p>
      Donne ta date de naissance :
    </p>
    <p>
      Jour : <input type="number" name="jour">
    </p>
    <p>
      Mois : 
<?php
$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

for ($i = 0; $i <= 11; $i++) {
        echo '<input type="radio" name="mois" value="' . $i+1 . '">' . $mois [$i];
    }
// ...
?>
    </p>
    <p>
      Année : <input type="number" name="annee">
    </p>
    <p>
      <input type="submit" value="Envoyer">
    </p>    
  </form>
</body>
</html>