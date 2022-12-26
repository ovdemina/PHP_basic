<?php

$arr = [5, 3, 9, 71, 1, 4, 42, 8, 6, 15];

$maxMinAvg = function (array $mas): array {
    return [
        "max" => max($mas),
        "min" => min($mas),
        "avg" => array_sum($mas) / count($mas)
    ];
};

print_r ($maxMinAvg($arr));