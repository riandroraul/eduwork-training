<?php

// Misalnya anda memiliki berat badan 75 kg dan tinggi badan 1,65m (165cm). Indeks Massa Tubuh atau BMI Anda adalah: BMI = 75kg / (1,65 x 1,65) = 27, 55.

// Di bawah 17,0 = Kurus, kekurangan berat badan berat
// ·17,0 - 18,4 = Kurus, kekurangan berat badan ringan
// 18,5 – 25,0 = Normal
// 25,1 – 27,0 = Gemuk, kelebihan berat badan tingkat ringan


function bmi($berat, $tinggi)
{
    $tinggi /=  100;
    return $berat / ($tinggi * $tinggi);
}

$berat = 89.9;
$tinggi = 173;
$name = 'riandro';
function halo($nama)
{
    return "halo nama saya $nama Nilai BMI anda = ";
}

if (bmi($berat, $tinggi) <= 17.0) {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'kurus, kekurangan berat badan berat';
} else if (bmi($berat, $tinggi) > 17.0 && bmi($berat, $tinggi) <= 18.4) {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'Kurus, kekurangan berat badan ringan';
} else if (bmi($berat, $tinggi) > 18.5 && bmi($berat, $tinggi) <= 25.0) {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'Normal';
} else if (bmi($berat, $tinggi) > 25.0 && bmi($berat, $tinggi) <= 27.0) {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'Gemuk, kelebihan berat badan tingkat ringan';
} else if (bmi($berat, $tinggi) > 27.0 && bmi($berat, $tinggi) <= 30.0) {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'Gemuk, kelebihan berat badan tingkat berat';
} else {
    echo halo($name) . bmi($berat, $tinggi) . '<br> anda termasuk ' . 'sangat gemuk, segera diet';
}
