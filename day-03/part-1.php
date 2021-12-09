<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  $gama = '';

  if (!isset($lines[0])) {
    return;
  }

  for ($i = 0; $i < strlen($lines[0]); $i++) {
    $ones = 0;

    foreach ($lines as $line) {
      if ($line[$i] == '1') {
        $ones++;
      }
    }

    $gamma .= (int) ($ones > count($lines) - $ones);
  }

  $epsilon = strtr($gamma, [1, 0]);
  $power_consumption = bindec($gamma) * bindec($epsilon);

  echo $power_consumption;