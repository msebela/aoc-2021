<?php
  $file = file_get_contents('input.txt');
  $lines = explode("\n", $file);

  function get_part_02($lines, $most_common_bit) {
    if (!isset($lines[0])) {
      return;
    }

    for ($i = 0; $i < strlen($lines[0]); $i++) {
      $lines_with_bit = [];
      $ones = 0;

      foreach ($lines as $line) {
        if ($line[$i] == '1') {
          $ones++;
        }
      }

      $zeros = count($lines) - $ones;
      $bit = ($ones >= $zeros) ? $most_common_bit : !$most_common_bit;

      foreach ($lines as $line) {
        if ($line[$i] == $bit) {
          $lines_with_bit[] = $line;
        }
      }

      if (count($lines_with_bit) == 1) {
        break;
      }

      $lines = $lines_with_bit;
    }

    return bindec($lines_with_bit[0]);
  }

  $oxygen_generator = get_part_02($lines, 1);
  $co2_scrubber = get_part_02($lines, 0);

  echo $oxygen_generator * $co2_scrubber;