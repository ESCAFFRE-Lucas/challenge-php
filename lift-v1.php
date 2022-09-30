<?php
function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): int {
    return end($listOfButton);
}

function getDirection(int $currentFloor, int|null $requestedFloor, array $listOfButton): int {
    if ($currentFloor < $requestedFloor) {
        return 1;
    } elseif ($currentFloor == $requestedFloor) {
        return 0;
    } else {
        return -1;
    }
}