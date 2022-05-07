<?php

function luasPersegi($sisi1, $sisi2)
{
    return $sisi1 * $sisi2;
}

function luasPersegPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function luasSegitiga($alas, $tinggi)
{
    return (0.5 * $alas) * $tinggi;
}

function luasLingkaran($r)
{
    return 3.14 * ($r * $r);
}

function luasBKetupat($diag1, $diag2)
{
    return 0.5 * $diag1 * $diag2;
}





echo "luas persegi = " . luasPersegi(5, 5);
echo "<br>luas persegi panjang = " . luasPersegPanjang(8, 3);
echo "<br>luas Segitiga = " . luasSegitiga(12, 7);
echo "<br>luas Lingkaran = " . luasLingkaran(4);
echo "<br>luas Belah Ketupat = " . luasBKetupat(3, 4);
