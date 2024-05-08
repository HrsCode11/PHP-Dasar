<?php

$gaji_pokok = 3250000;
$tunjangan_jabatan = 1200000;
$pajak_penghasilan = 0.10;

$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;
$pajak = $gaji_kotor * $pajak_penghasilan;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji pokok: Rp. " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ',', '.') . "<br>";
echo "Gaji kotor: Rp. " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Pajak penghasilan: Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
echo "Gaji bersih: Rp. " . number_format($gaji_bersih, 0, ',', '.') . "<br>";
