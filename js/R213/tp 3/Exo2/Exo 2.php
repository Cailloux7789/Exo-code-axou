<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Validation</title>
</head>
<body>
  <h1>Validation</h1>

  <?php
  // Vérification des données entrées
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $errors = [];

  if (strlen($nom) < 3 || strlen($nom) > 20) {
    $errors[] = 'Le nom doit avoir entre 3 et 20 caractères.';
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L\'adresse e-mail n\'est pas valide.';
  }

  if (strlen($message) > 400) {
    $errors[] = 'Le message est trop long (maximum 400 caractères).';
  }

  // Affichage des données ou des erreurs
  if (empty($errors)) {
    echo '<p><a href="mailto:' . $email . '">' . $nom . '</a> a dit : <q>' . $message . '</q></p>';
  } else {
    echo '<p>Erreur : ' . implode(' ', $errors) . '</p>';
    echo '<p><a href="index.html">Retour au formulaire</a></p>';
  }
  ?>
</body>
</html>
