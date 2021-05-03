<?php


function beli_mainan()
{
    $totalHargaMainan = 55000;
    $pecahan = array(10000, 5000, 20000);
    $jumlah = array(3, 4, 5);

    $totalUang = ($pecahan[0] * $jumlah[0]) + ($pecahan[1] * $jumlah[1]) + ($pecahan[2] * $jumlah[2]) - $totalHargaMainan;
    return $totalUang;
}
$beliMainan = beli_mainan();
echo "jadi sisa uangnya adalah Rp. $beliMainan";
