<?php
function manageMovements(string $movement): array {
    $arr = [];
    for ($i = 0; $i < strlen($movement); $i++) {
        $arr[] = $movement[$i];
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] == "R") {
                $arr[$j]  = "RIGHT";
            }
            if ($arr[$j]  == "L") {
                $arr[$j]  = "LEFT";
            }
            if ($arr[$j]  == "B") {
                $arr[$j]  = "BACKWARDS";
            }
            if ($arr[$j]  == "F") {
                $arr[$j]  = "FRONT";
            }
            if ($arr[$j] == $arr[$j+ 1]) {
                $arr[$j + 1] .= " AGAIN";
            }
        }
    }
    return $arr;
}
