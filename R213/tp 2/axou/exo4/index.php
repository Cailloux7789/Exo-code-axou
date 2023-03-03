<?php
$notes = array(
  array('prenom' => 'Serge', 'nom' => 'Cotuand', 'note' => 12.6),
  array('prenom' => 'Roch', 'nom' => 'Ricard', 'note' => 8.0),
  array('prenom' => 'Aleron', 'nom' => 'Fresne', 'note' => 19.3),
  array('prenom' => 'Thibaut', 'nom' => 'Dubeau', 'note' => 14.8),
  array('prenom' => 'Vivienne', 'nom' => 'Louineaux', 'note' => 9.8),
  array('prenom' => 'Mathilde', 'nom' => 'Bois', 'note' => 11.6),
  array('prenom' => 'Eulalie', 'nom' => 'Poulin', 'note' => 16.3),
  array('prenom' => 'Tanguy', 'nom' => 'Michel', 'note' => 9.9),
  array('prenom' => 'Simone', 'nom' => 'Beaujolie', 'note' => 10.1),
  array('prenom' => 'Aubine', 'nom' => 'Leclerc', 'note' => 14.8),
  array('prenom' => 'Amedee', 'nom' => 'Dupéré', 'note' => 7.3),
  array('prenom' => 'Agathe', 'nom' => 'Dagenais', 'note' => 13.4),
  array('prenom' => 'Brunella', 'nom' => 'Duperré', 'note' => 12.9),
  array('prenom' => 'Prewitt', 'nom' => 'Norbert', 'note' => 18.5),
  array('prenom' => 'Carine', 'nom' => 'Lessard', 'note' => 6.2),
  array('prenom' => 'Brigitte', 'nom' => 'Guimond', 'note' => 13.4),
  array('prenom' => 'Marcel', 'nom' => 'Metivier', 'note' => 8.4),
  array('prenom' => 'Claude', 'nom' => 'Caouette', 'note' => 16.3),
  array('prenom' => 'Éric', 'nom' => 'Audet', 'note' => 14.6),
  array('prenom' => 'Platt', 'nom' => 'Lejeune', 'note' => 9.3),
  array('prenom' => 'Percy', 'nom' => 'Lebel', 'note' => 17.5)
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <style>
    .rouge {
      color: #e22;
    }
    .vert {
      color: #5b1;
    }
    table, td {
      border: 1px solid #333;
    }
    thead, tfoot {
      background-color: #333;
      color: #fff;
    }
  </style>
  <title>R213</title>
</head>
<body>
  <h1>TP #2 / Exo 3</h1>

  <table>
    <thead>
      <tr>
        <th>Noms</th>
        <th>Prénoms</th>
        <th>Notes</th>
      </tr>
    </thead>
    <tbody>
  
       <tr>
        
<?php

foreach ($notes as $tab) {
  if ($tab['note']>10)
    {echo '<td>'.$tab['prenom'].'<td>'
    .$tab['nom'].'<td class=vert>' 
    .$tab ['note'].'<tr>';
    }
  else 
    {echo '<td>'.$tab['prenom'].'<td>'
    .$tab['nom'].'<td class=rouge>' 
    .$tab ['note'].'<tr>';
    }
  }

function print_average_note($array) {
    $average = 0;
    foreach ($array as $tab) {
        $average += $tab['note'];
    }
    $nb_eleves = count($array);
    $average /= $nb_eleves;
    echo number_format($average,2);
}
?>
   
    </tbody>
    <tfoot>
      <th>Moyenne</th>
      <th>-</th>
      <th><?php print_average_note($notes); ?></th>
    </tfoot>
  </table>
</body>
</html>