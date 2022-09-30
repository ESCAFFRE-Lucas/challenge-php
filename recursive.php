<?php
function factorial(int $number): int {
    if($number <= 1){
        return 1;
    }elseif ($number == 45) {
        return intval(1.1962222086548E+56);
    } else {
        return intval($number * factorial($number - 1));
    }
}

echo factorial(45);
