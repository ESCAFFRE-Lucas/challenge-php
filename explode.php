<?php
function explodeWords(string $str, string $separator = " ", int $limit = PHP_INT_MAX): array
{
    $arr = [];
    if ($separator == "") {
        echo error_reporting(1);
    }
    $count = 1;
    $stock = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($count == $limit) {
            $arr[] = substr($str, $stock, strlen($str) - 1);
            echo "count = limit\n";
            break;
        } elseif ($str[$i] == $separator) {
            $arr[] = substr($str, $stock, $i - $stock);
            $stock = $i + 1;
            $count++;
            echo "separator\n";
        } elseif ($i == strlen($str) - 1) {
            $arr[] = substr($str, $stock, $i - $stock + 1);
            echo "max length\n";
        }
    }
    if ($limit < 0) {
        array_pop($arr);
        return $arr;
    }
    return $arr;
}

print_r(explodeWords('My name is John'));
print_r(explodeWords('My-name/is-John', '/'));
print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', 2));
print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', -1));
