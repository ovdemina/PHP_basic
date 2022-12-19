<?php

$arr = [5, 3, 9, 71, 1, 4, 42, 8, 6, 15];

$chet = function ($n) {
    return !($n & 1) ? "четное" : "нечетное";
};

$result = array_map ($chet, $arr);

print_r ($result);