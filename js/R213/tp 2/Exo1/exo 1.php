<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body>
  <h1>TP #2 / Exo 1</h1>
  <?php
  if (isset($_GET['id'])) {
    $film = $_GET['id'];
    echo "<p>Vous avez sélectionné le film $film.</p>";
  } else {
    echo "<p>Erreur : aucun film sélectionné.</p>";
  }
  ?>
</body>
</html>
