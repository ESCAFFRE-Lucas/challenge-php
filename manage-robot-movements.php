<?php
function manageMovements(string $movement): array {
    $arr = [];
    for ($i = 0; $i < strlen($movement); $i++) {
        $arr[] = $movement[$i];
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] == "R") {
                $arr[$j]  = "RIGHT";
            }
            if ($arr[$j]  == "L") {
                $arr[$j]  = "LEFT";
            }
            if ($arr[$j]  == "B") {
                $arr[$j]  = "BACKWARDS";
            }
            if ($arr[$j]  == "F") {
                $arr[$j]  = "FRONT";
            }
            if ($arr[$j] == $arr[$j+ 1]) {
                $arr[$j + 1] .= " AGAIN";
            }
        }
    }
    return $arr;
}

$tests = [];

$function = new ReflectionFunction('manageMovements');

$tests[] = static fn ($eq): string|null => $eq($function->getNumberOfParameters(), 1) ? null : "Function manageMovements() has ". $function->getNumberOfParameters() ." parameter(s) instead of 1";
$tests[] = static fn ($eq): string|null => $eq($function->getNumberOfRequiredParameters(), 1) ? null : "Function manageMovements() requires ". $function->getNumberOfRequiredParameters() ." parameter(s) instead of 1";
$tests[] = static fn ($eq): string|null => $function->hasReturnType() ? null : "Function manageMovements() should have a return type";

$tests[] = static fn ($eq): string|null => $eq(manageMovements('RLB'), ['RIGHT', 'LEFT', 'BACKWARDS']) ? null : "manageMovements('RLB') == " . json_encode(manageMovements('RLB'), true) . " instead of ['RIGHT', 'LEFT', 'BACKWARDS']";
$tests[] = static fn ($eq): string|null => $eq(manageMovements('FLBR'), ['FRONT', 'LEFT', 'BACKWARDS', 'RIGHT']) ? null : "manageMovements('FLBR') == " . json_encode(manageMovements('FLBR'), true) . " instead of ['FRONT', 'LEFT', 'BACKWARDS', 'RIGHT']";
$tests[] = static fn ($eq): string|null => $eq(manageMovements('RRLF'), ['RIGHT', 'RIGHT AGAIN', 'LEFT', 'FRONT']) ? null : "manageMovements('RRLF') == " . json_encode(manageMovements('RRLF'), true) . " instead of ['RIGHT', 'RIGHT AGAIN', 'LEFT', 'FRONT']";
$tests[] = static fn ($eq): string|null => $eq(manageMovements('RRLFFB'), ['RIGHT', 'RIGHT AGAIN', 'LEFT', 'FRONT', 'FRONT AGAIN', 'BACKWARDS']) ? null : "manageMovements('RRLFFB') == " . json_encode(manageMovements('RRLFFB'), true) . " instead of ['RIGHT', 'RIGHT AGAIN', 'LEFT', 'FRONT', 'FRONT AGAIN', 'BACKWARDS']";

print_r(manageMovements('RLB'));
print_r(manageMovements('FLBR'));
print_r(manageMovements('RRLF'));
print_r(manageMovements('RRLFFB'));