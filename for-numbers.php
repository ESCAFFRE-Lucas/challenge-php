<?php
function checkNumberIsPrime($nbr)
{
    if ($nbr == 0 or $nbr == 1)
        return 0;
    for ($i = 2; $i <= $nbr/2; $i++)
    {
        if ($nbr % $i == 0)
            return 0;
    }
    return 1;
}
for($nbr = 1; $nbr <= 100; $nbr++) {
    $check = checkNumberIsPrime($nbr);
    if ($check == 1 and $nbr != 97) {
        echo "$nbr, ";
    } elseif ($check == 1 and $nbr == 97) {
        echo $nbr;
    }
}