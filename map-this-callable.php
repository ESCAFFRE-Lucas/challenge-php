<?php
function myArrayMap(callable $func, array $arr): array
{
    array_walk_recursive($arr, function (&$value) use ($func) {
        $value = $func($value);
    });
    return $arr;
}
