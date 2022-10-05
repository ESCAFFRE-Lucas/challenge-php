<?php
function myArrayMap(callable|null $func, array $arr, array ...$arrays): array
{
    if ($func == null) return $arr;
    array_walk_recursive($arr, function (&$value) use ($func) {
        $value = $func($value);
    });
    return $arr;
}
