<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>R213</title>
</head>
<body>
  <h1>TP #1 / Exo 4</h1>
  <p>
    <?php
    $jour = $_POST['jour'];
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];
    $jour_a = idate('d');
    $mois_a = idate('m');
    $annee_a = idate('Y');

      if ($mois_a < $mois) {
          $age = $annee_a - $annee - 1;
      } elseif ($mois_a == $mois && $jour_a < $jour) {
          $age = $annee_a - $annee - 1;
      } else {
          $age = $annee_a - $annee;
      }

echo "Tu as $age ans.";
?>
    </p>
</body>
</html>