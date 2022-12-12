<?php

do {
    $task1 = readline("В каком году распался СССР? Варианты: 1993, 1990 или 1991 год. Ваш ответ: ");
}
while (!((int)$task1 == 1993 || (int)$task1 == 1990 || (int)$task1 == 1991));

switch (true){
    case $task1 == 1991:
        echo "Ответ верный";
        break;
    default:
        echo "Ответ неверный";
        break;   
}