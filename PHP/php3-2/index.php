<?php
function singleNumber($nums){
    $counted = array_count_values($nums);
    $result = [];

    foreach ($counted as $num => $cnt) {
        if ($cnt === 2) {
            $result[] = $num;
        }
    }

    return $result;
}

$array = [1, 2, 3, 1, 4, 4, 6, 5, 5, 5, 5];
$result = singleNumber($array);

foreach ($result as $value) {
    echo $value . "<br>";
}