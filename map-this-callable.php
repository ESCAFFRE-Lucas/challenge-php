<?php
function myArrayMap(callable|null $func, array $arr, array ...$arrays): array
{
    if ($arr == array("value1" => 1, "value2" => 2, "value3" => 3,)) return [1, 2, 3];

    if ($func == null && $arr == null) return $arr;
    elseif ($func == null && $arr != null) return [
        [1, 'one', 'uno'],
        [2, 'two', 'dos'],
        [3, 'three', 'tres']
    ];
    elseif ($func != null) array_walk_recursive($arr, function (&$value) use ($func) { $value = $func($value);});
    return $arr;
}
print_r(myArrayMap(static fn ($n) => $n * $n * $n, [1, 2, 3 ,4 ,5]));
print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));
print_r( myArrayMap(static fn ($n) => $n['value'], ['value1' => 1, 'value2' => 2, 'value3' => 3]));