<?php
$date = date('F t, Y');

$today = function () use (&$date) {
    $date = "It is " . $date;
    echo $date;
};

$my_year = date("Y");

$isLeapYear = function () use ($my_year) {
    if ($my_year % 4 == 0)
        echo true;
    else
        echo false;
};

$today();
$isLeapYear();