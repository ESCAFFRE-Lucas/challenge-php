<?php
$date = date('F t, Y');

$today = function () use (&$date) {
    $date = "It is " . $date;
    return $date;
};

$my_year = date("Y");

$isLeapYear = function ($my_year) {
    if ($my_year % 4 == 0)
        return true;
    else
        return false;
};

echo $today();