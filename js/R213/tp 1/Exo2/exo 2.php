<!-- reponse.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body>
  <h1>TP #1 / Exo 2</h1>
  <p>
  <?php 
    // Récupération de la valeur du champ "annee" du formulaire
    $annee = $_POST["annee"];

    // Calcul de la première année du 21e siècle
    $debut_21e_siecle = 2000;

    // Vérification si l'utilisateur est né dans le 21e siècle ou pas
    if ($annee >= $debut_21e_siecle) {
      echo "Tu es né dans le 21e siècle.";
    } else {
      echo "Tu n'es pas né dans le 21e siècle.";
    }
  ?>
  </p>
</body>
</html>
