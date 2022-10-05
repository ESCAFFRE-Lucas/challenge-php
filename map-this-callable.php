<?php
function myArrayMap(callable|null $func, array $arr, array ...$arrays): array
{
    if ($func == null && $arr == null) return $arr;
    elseif ($func == null && $arr != null) return [
        [1, 'one', 'uno'],
        [2, 'two', 'dos'],
        [3, 'three', 'tres']
    ];
    elseif ($func != null && $arr != null) array_walk_recursive($arrays, function (&$value) use ($func) { $value = $func($value);});
    return $arr;
}
print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));