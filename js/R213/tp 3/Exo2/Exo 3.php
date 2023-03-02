<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 3 - Validation</title>
</head>
<body>
  <h1>Résultat</h1>
  <?php
  $errors = array();
  
  // Vérification du nom
  if (empty($_POST['nom'])) {
    $errors[] = "Le nom est obligatoire.";
  } elseif (strlen($_POST['nom']) < 3) {
    $errors[] = "Le nom est trop court.";
  } elseif (strlen($_POST['nom']) > 20) {
    $errors[] = "Le nom est trop long.";
  }
  
  // Vérification de l'adresse e-mail
  if (empty($_POST['email'])) {
    $errors[] = "L'adresse e-mail est obligatoire.";
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse e-mail est invalide.";
  }
  
  // Vérification du message
  if (empty($_POST['message'])) {
    $errors[] = "Le message est obligatoire.";
  } elseif (strlen($_POST['message']) > 400) {
    $errors[] = "Le message est trop long.";
  }
  
  if (count($errors) === 0) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<p><a href='mailto:$email'>$nom</a> a dit : <q>$message</q></p>";
  } else {
    echo "<p>Les erreurs suivantes ont été trouvées :</p><ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul><p><a href='index.html'>Retour au formulaire</a></p>";
  }
  ?>
</body>
</html>
