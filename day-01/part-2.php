<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  $last_suma = null;
  $increased = 0;

  for ($i = 2; $i < count($lines); $i++) {
    $suma = $lines[$i] + $lines[$i - 1] + $lines[$i - 2];

    if ($suma > $last_suma && $last_suma != null) {
      $increased++;
    }

    $last_suma = $suma;
  }

  echo $increased;