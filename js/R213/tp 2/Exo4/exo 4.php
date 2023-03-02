<?php
function print_average_note($array)
{
  $total = 0;
  $count = count($array);

  foreach ($array as $note) {
    $total += $note;
  }

  $average = $total / $count;

  echo number_format($average, 2);
}
?>
