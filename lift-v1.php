<?php
function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): ?int {
    if ($requestedFloor == null and count($listOfButton) == 0) {
        return null;
    }
    if (count($listOfButton) > 1 and $requestedFloor != null) {
        return end($listOfButton);
    }
    if (count($listOfButton) == 0) {
        return $requestedFloor;
    }
    return $listOfButton[0];
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

echo getFloor(3, null, [1,7]);