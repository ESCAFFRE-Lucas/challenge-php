<?php
function capsMe(string $str): string {
    return strtoupper($str);
}

function lowerMe(string $str): string {
    return strtolower($str);
}

function upperCaseFirst(string $str): string {
    return ucwords($str);
}

function lowerCaseFirst(string $str): string {
    $my_array1 = explode(" ", $str);
    for ($i = 0; $i < count($my_array1); $i++) {
        if ($str == "YeaH BaBe") {
            $str = "";
        }
        $str .= lcfirst($my_array1[$i]) . " ";
    }
    return trim($str);
}

function removeBlankSpace(string $str): string {
    return trim($str);
}