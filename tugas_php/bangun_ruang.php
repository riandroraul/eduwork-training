<?php

// Rumus volume kubus: V = s x s x s (s3)
function volumKubus($sisi)
{
    return $sisi * $sisi * $sisi;
}

// Volume balok, yaitu: V = p x l x t
function volumBalok($p, $l, $t)
{
    return $p * $l * $t;
}

// Rumus Bangun Ruang Kerucut V = 1/3 x π x r^2 x t
function volumKerucut($r, $t)
{
    $r2 = $r * $r;
    return (3.14 * $r2 * $t) / 3;
}

// volume prisma V = [(alas x tinggi) : 2] x tinggi.
function volumPrisma($alas, $t)
{
    return (($alas * $t) / 2) * $t;
}


// volume bola V = 4/3 x π x r^3
function volumBola($r)
{
    $r3 = $r * $r * $r;
    return (4 * (3.14 * $r3)) / 3;
}


echo "Volume Kubus = " . volumKubus(9);
echo "<br>Volume Balok = " . volumBalok(3, 4, 5);
echo "<br>Volume Kerucut = " . volumKerucut(10, 12);
echo "<br>Volume Prisma = " . volumPrisma(5, 6);
echo "<br>Volume Bola = " . volumBola(9);
