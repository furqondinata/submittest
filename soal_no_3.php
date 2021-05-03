<?php


function AritmatikaKe()
{

    $sukuKe = 30100;
    $sukuPertama = 10000;
    $bilanganBulat = 68;

    $totalBeda = ($sukuKe - $sukuPertama) / ($bilanganBulat - 1);
    echo "Total Suku Beda : " . $totalBeda . "<br>";

    $bilanganBulatKe = 81;

    $TotalSukuKe = $sukuPertama + ($bilanganBulatKe - 1) * $totalBeda;
    echo "Total Suku Ke- 81 Adalah : " . $TotalSukuKe . "<br>";
}

AritmatikaKe();
