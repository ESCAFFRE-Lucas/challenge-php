<?php
function findMaximumSubarray(array $arr): int | float {
    $max_sum = 0;
    $current_sum = 0;
    for($i=0; $i<count($arr); $i++) {
        $current_sum = $current_sum + $arr[$i];
        if ($current_sum < 0) $current_sum = 0;
        if($max_sum < $current_sum) $max_sum = $current_sum;
    }
    return $max_sum;
}

echo findMaximumSubarray([1, -1, 4, 6, 3]);
echo findMaximumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]);
echo findMaximumSubarray([5, 4, -1, 7, 8]);
echo findMaximumSubarray([1]);
echo findMaximumSubarray([]);