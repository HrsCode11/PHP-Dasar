<?php
$nilai =88;

    if ($nilai <= 59) {
            $konversi = 'C';
    } elseif ($nilai >= 60 && $nilai <= 69) {
            $konversi = 'BC';
    } elseif ($nilai >= 70 && $nilai <= 79) {
            $konversi = 'B';
    } elseif ($nilai >= 80 && $nilai <= 89) {
            $konversi = 'AB';
    } elseif ($nilai >= 90 && $nilai <= 100) {
            $konversi = 'A';
    } 

    echo "Nilai : $nilai <br>";
    echo "Konversi nilai ke huruf : $konversi <br>";