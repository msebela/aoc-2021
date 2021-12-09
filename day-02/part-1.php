<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  $depth = 0;
  $horiz = 0;

  foreach ($lines as $line) {
    $input = explode(' ', $line);

    if (!isset($input) || count($input) != 2) {
      continue;
    }

    $cmd = $input[0];
    $arg = $input[1];

    if ($cmd == 'forward') {
      $horiz += $arg;
    }
    elseif ($cmd == 'down') {
      $depth += $arg;
    }
    elseif ($cmd == 'up') {
      $depth -= $arg;
    }
  }

  echo $depth * $horiz;