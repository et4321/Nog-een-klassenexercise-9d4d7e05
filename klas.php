<?php

echo "Wie zit er in jou klas?".PHP_EOL;
$namen = readline();
$lijst = explode(" ", $namen);


echo "In je klas zitten:".PHP_EOL;

foreach ($lijst as $namen) {
    echo "$namen".PHP_EOL;
}







?>