<?php
function calc(string $calculate): int {
    return eval("return $calculate;");
}

echo calc('((5+3+(1+2)-9)+1) + (9+1)');