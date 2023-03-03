<?php
if 
(substr($_POST['mail'], -12) == '@univ-amu.fr' 
|| substr($_POST['mail'], -16) == '@etu.univ-amu.fr') {
    echo 'Adresse OK';}
else { 
    echo 'Adresse pas OK';}

?>

