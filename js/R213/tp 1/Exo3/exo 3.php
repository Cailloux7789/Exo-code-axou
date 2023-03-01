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
      // afficher <input type="radio" name="mois" value="1">Janvier <input type="radio" name="mois" value="2">Février ...
      $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
      for ($i = 0; $i < count($mois); $i++) {
          echo '<input type="radio" name="mois" value="' . ($i + 1) . '">' . $mois[$i];
      }
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
