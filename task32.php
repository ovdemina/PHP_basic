<?php

$name = readline("Как Вас зовут? ");

$arr1 = ["здоровья", "счастья", "благополучия", "достатка", "спокойствия"];
$arr2 = ["крепкого", "бесконечного", "прекрасного", "улетного"];
$happyArray = [];

for ($i = 0; $i < 3; $i++){
    $arr1Index = array_rand($arr1);
    $arr2Index = array_rand($arr2);
    $happyArray[] = "$arr2[$arr2Index] $arr1[$arr1Index]";
    unset($arr2[$arr2Index]);
    unset($arr1[$arr1Index]);
}

$and = array_pop($happyArray);
$happyStr = implode(", ", $happyArray);


echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $happyStr и $and!";