<?php
function myArrayFilter(array $arr, callable|null $func): array {
    $arr2 = [];
    foreach ($arr as $val => $item) if ($func == null && $func($item)) $arr2[$val] = $item;
    elseif ($func($item)) $arr2[$val] = $item;
    return $arr2;
}

print_r(myArrayFilter(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5], static fn ($n) => $n & 1));
print_r(myArrayFilter([6, 7, 8, 9, 10, 11, 12], static fn ($n) => !($n & 1)));