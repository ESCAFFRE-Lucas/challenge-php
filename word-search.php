<?php
function searchWord(array $board, string $str): int {
    $arr = array_merge(...$board);
    for ($i = 0; $i < strlen($str); $i++) {
        $pos = array_search($str[$i], $arr);
        if (gettype($pos) == "integer") $arr[$pos] = "";
        else return false;
    }
    return true;
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

echo searchWord($board, 'abcd');
echo searchWord($board, 'abcl');
echo searchWord($board, 'admfbl');
echo searchWord($board, 'abcc');