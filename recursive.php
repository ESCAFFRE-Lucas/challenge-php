<?php
function factorial(int $number): int|float {
    if($number <= 1){
        return 1;
    }
    return $number * factorial($number - 1);
}

echo factorial(45);
