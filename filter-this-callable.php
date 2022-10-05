<?php
function myArrayFilter(array $arr, $func = null): array {
    $arr2 = [];
    foreach ($arr as $val => $item) if ($func == null) {
        if ($item) {
            $arr2[$val] = $item;
        }
    }
    elseif ($func($item)) $arr2[$val] = $item;
    return $arr2;
}

print_r(myArrayFilter(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5], static fn ($n) => $n & 1));
print_r(myArrayFilter([6, 7, 8, 9, 10, 11, 12], static fn ($n) => !($n & 1)));
print_r(myArrayFilter([0 => 'foo', 1 => false, 2 => -1, 3 => null, 4 => '', 5 => '0', 6 => 0]));
