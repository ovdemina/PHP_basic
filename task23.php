<?php

do {
    $quantity = (int)readline("Введите число больше 0, и мы определим номер пальца: ");
}
while ($quantity < 1);

$quantity = $quantity % 8;

switch (true) {
    case $quantity == 1;
        echo "Палец номер 1";
        break;
    case $quantity == 2 || $quantity == 0;
        echo "Палец номер 2";
        break;
    case $quantity == 3 || $quantity == 7;
        echo "Палец номер 3";
        break;
    case $quantity == 4 || $quantity == 6;
        echo "Палец номер 4";
        break;
    default:
        echo "Палец номер 5";
}