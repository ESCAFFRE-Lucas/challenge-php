<?php
function checkCircuits(int $check): array
{
    $arr = [];

    if ($check % 2 == 0) $arr[] = "Left arm";
    if ($check % 3 == 0) $arr[] = "Right arm";
    if ($check % 5 == 0) $arr[] = "Motherboard";
    if ($check % 7 == 0) $arr[] = "Processor";
    if ($check % 11 == 0) $arr[] = "Zip Defluxer";
    if ($check % 13 == 0) $arr[] = "Motor";

    return $arr;
}

print_r(checkCircuits(9));
print_r(checkCircuits(12));
print_r(checkCircuits(312));
print_r(checkCircuits(825));