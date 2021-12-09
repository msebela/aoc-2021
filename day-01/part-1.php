<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  if (!isset($lines[0])) {
    return;
  }

  $last_value = $lines[0];
  $increased = 0;

  foreach ($lines as $line) {
    if ($last_value < $line) {
      $increased++;
    }

    $last_value = 1 * $line;
  }

  echo $increased;