## reponse.php ##
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
    if($_POST['annee']>2000 &&$_POST['annee']<=2100) {
        echo 'Vous êtes né dans le 21eme siècle';
    } else {
        echo 'Vous n êtes pas né dans le 21eme siecle';
    }
?>
  </p>
</body>
</html>

