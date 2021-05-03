<?php

function forListMenu($nameMenu)
{
    for ($i = 1; $i <= 3; $i++) {
        echo $i . "." . " Menu " . $nameMenu . " Ke " . $i . "<br>";
    }
}
echo "Makanan <br>";
forListMenu("Makanan");
echo "Minuman <br>";
forListMenu("Minuman");
echo "Parsel <br>";
forListMenu("Parsel");
