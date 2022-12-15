<?php

$arr1 = [5, 3, 9, 0, 1, 4, 2, 8, 6, 6];
$arr2 = [0, 4, 2, 7, 5, 8, 9, 2, 3, 5];
$multiArray = [];

for ($i = 0; $i < 10; $i++){
    $multiArray[] = $arr1[$i] * $arr2[$i];
}

print_r($multiArray);