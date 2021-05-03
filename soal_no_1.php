<?php

function beli_bolpoin($pcsPulpen, $hargaSatuan, $Uang)
{
    $totalBeli = $pcsPulpen * $hargaSatuan;
    $totalUang = $Uang * 5;
    $uangKembalian = $totalUang - $totalBeli;
    return $uangKembalian;
}
$bulpoin = beli_bolpoin(12, 1750, 5000);
echo "Uang Kembalian Rian Rp. :$bulpoin";
