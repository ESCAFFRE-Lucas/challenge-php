<?php
function isPangram(string $str): bool {
    $sentences = strtolower(trim($str));
    $letters = str_split("abcdefghijklmnopqrstuvwxyz");

    foreach ($letters as $letter) {
        if (!strstr($sentences, $letter))
            return false;
    }

    return true;
}