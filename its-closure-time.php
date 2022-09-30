<?php
function f(): array {
    return array(
        "+" => function (int $x, int $y): int {return $x + $y;},
        "-" => function (int $x, int $y): int {return $x - $y;},
        "*" => function (int $x, int $y): int {return $x * $y;}
    );
}
