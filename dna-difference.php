<?php
function dnaDiff(string $str1, string $str2): int|bool{
    if (strlen($str1) != strlen($str2)) return false;
    $count = 0;
    for ($i = 0; $i < strlen($str1); $i++) if ($str1[$i] != $str2[$i]) $count++;
    return $count;
}

echo dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
echo dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTAZA');
echo dnaDiff('AAGCCTATTAACAGGAT', 'GAGCCTACTAACGGGAT');