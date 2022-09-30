<?php
function factorial(int $number): int {
    if($number <= 1){
        return 1;
    }
    else{
        return round($number * factorial($number - 1));
    }
}

echo factorial(4);
