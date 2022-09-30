<?php
function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): int {
    return end($listOfButton);
}

function getDirection(int $currentFloor, int|null $requestedFloor, array $listOfButton): int {
    if ($listOfButton[0] < $listOfButton[1]) {
        return 1;
    } elseif ($listOfButton[0] == $listOfButton[1]) {
        return 0;
    } else {
        return -1;
    }
}