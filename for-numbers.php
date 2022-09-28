<?php
$check = 0;
for($nbr = 1; $nbr <= 96; $nbr++) {
    for ($i = 2; $i < $nbr/2; $i++) {
        if ($nbr % $i == 0) $check++;
        $i++;
    }
    if ($check = 0 or $nbr != 1) {
        echo "$nbr, ";
    }
    $nbr++;
}
echo 97;