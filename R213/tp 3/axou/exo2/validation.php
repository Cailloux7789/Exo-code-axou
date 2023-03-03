<?php


if (strlen($_POST['Nom'])<=3 
|| strlen($_POST['Nom'])>=21){
    echo 'Le nom doit etre compris entre 3 et 21 caractères';
    echo '<a href="index.html">Retour</a>';}

elseif (substr($_POST['mail'], -12) != '@univ-amu.fr' 
&& substr($_POST['mail'], -16) != '@etu.univ-amu.fr') {
    echo 'L adresse doit finir par @univ-amu.fr ou @etu.univ-amu.fr';
    echo '<a href="index.html">Retour</a>';}

elseif (strlen($_POST['text'])>400){
    echo 'Votre texte ne doit pas dépasser les 400 caractères';
    echo '<a href="index.html">Retour</a>';}

else {
    echo '<p> <a href="mailto:' . $_POST['mail'] . '">' . $_POST['Nom'] . '</a> a dit : <q>' . $_POST['text'] . '</q>. </p>';
}
?>



