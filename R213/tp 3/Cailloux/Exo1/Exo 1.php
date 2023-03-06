<?php
$email = $_POST['email'];

if (substr($email, -12) === '@univ-amu.fr' || substr($email, -16) === '@etu.univ-amu.fr') {
  echo "<p>Adresse e-mail valide : $email</p>";
} else {
  echo "<p>Adresse e-mail non valide. Veuillez utiliser une adresse e-mail de l'université Aix-Marseille : <br><a href=\"index.html\">Retour au formulaire</a></p>";
}
?>
