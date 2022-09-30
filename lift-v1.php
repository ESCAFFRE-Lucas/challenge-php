<?php
function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): ?int {
    if (count($listOfButton) == 0) {
        return null;
    }
    if ($requestedFloor == null) {
        return null;
    }
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

echo getFloor(1, null, []);