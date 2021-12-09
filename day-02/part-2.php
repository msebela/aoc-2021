<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  $depth = 0;
  $horiz = 0;
  $aim = 0;

  foreach ($lines as $line) {
    $input = explode(' ', $line);

    if (!isset($input) || count($input) != 2) {
      continue;
    }

    $cmd = $input[0];
    $arg = $input[1];

    if ($cmd == 'forward') {
      $horiz += $arg;
      $depth += $arg * $aim;
    }
    elseif ($cmd == 'down') {
      $aim += $arg;
    }
    elseif ($cmd == 'up') {
      $aim -= $arg;
    }
  }

  echo $depth * $horiz;