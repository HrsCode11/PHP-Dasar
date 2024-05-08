<?php

$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $bilangan) {
    if ($bilangan % 2 == 0) {
        echo "Nomor: $bilangan Genap<br>";
    } else {
        echo "Nomor: $bilangan Ganjil<br>";
    }
}
