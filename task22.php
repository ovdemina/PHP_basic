<?php

$name = readline("Как Вас зовут? ");

$str = "";
$sum = 0;

do {
    $quantity = (int)readline("Сколько задач Вы запланировали на день? Введите значение от 1 до 9. ");
}
while ($quantity < 1 || $quantity > 9);

for ($i = 1; $i <= $quantity; $i++){     
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = (int)readline("Сколько примерно времени эта задача займет? ");
    $str = "$str - $task ({$time}ч) \n";
    $sum += $time; 
}

echo "$name, сегодня у вас запланировано $quantity приоритетных задач на день:
$str Примерное время выполнения плана = {$sum}ч";