<?php
function joinWords(array $arr, string $separator = " "): string {
    $result = "";
    for ($i = 0; $i < sizeof($arr) - 1; $i++) {
        $result .= $arr[$i];
        $result .= $separator;
    }

  $result .= $arr[sizeof($arr) - 1];
  return $result;
}