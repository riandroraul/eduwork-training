<?php
// $nilai = 20;

// if ($nilai > 90 && $nilai <= 100) {
//     echo 'Grade : A';
// } else if ($nilai >= 80 && $nilai < 90) {
//     echo 'Grade : B';
// } else if ($nilai >= 70 && $nilai < 80) {
//     echo 'Grade : C';
// } else {
//     echo 'Grade : D';
// }

function nilai($nilai)
{
    switch ($nilai) {
        case 'A':
        case 'a':
            return 'nilai anda 90 - 100';
            break;
        case 'B':
        case 'b':
            return 'nilai anda 80 - 90';
            break;
        case 'C':
        case 'c':
            return 'nilai anda 70 - 80';
            break;
        case 'D':
        case 'd':
            return 'nilai anda 0 - 70';
            break;
        default:
            return "$nilai tidak terdefinisi!";
    }
}


echo nilai('D');
