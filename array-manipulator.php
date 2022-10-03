<?php
function reverse(array $arr): array {
    return array_reverse($arr);
}

$arr = array();
function push(array &$arr, string... $str): int {
    return array_push($arr, ...$str);
}
$arr = push($arr);

function sum(array $arr): int {
    return array_sum($arr);
}

function arrayContains(array $arr, int|string|float $mix): mixed {
    if (in_array($mix, $arr)) {
        return $mix;
    }
    return "Nothing";
}

function merge(array $arr1, array $arr2, array $arr3) {
    return array_merge($arr1, $arr2, $arr3);
}

$tab = [];
push($tab, "first", "second", "five");
print_r($tab);