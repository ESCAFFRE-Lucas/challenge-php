<?php
function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): ?int {
    if ($requestedFloor == null) {
        return null;
    }
    if (count($listOfButton) > 1) {
        return end($listOfButton);
    }
    return $requestedFloor;
}

function getDirection(int $currentFloor, int|null $requestedFloor, array $listOfButton): ?int {
    if ($requestedFloor == null) {
        return null;
    }
    if ($listOfButton[0] < $listOfButton[1]) {
        return 1;
    } elseif ($listOfButton[0] == $listOfButton[1]) {
        return 0;
    } else {
        return -1;
    }
}

echo getFloor(1, 1, []);