<?php

$uang_tabungan = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
$jml_pecahan = array();

for ($i = 0; $i < count($pecahan); $i++) {
  $jml_pecahan[$i] = intdiv($uang_tabungan, $pecahan[$i]);
  $uang_tabungan = $uang_tabungan % $pecahan[$i];
}

echo "Banyaknya uang pecahan yang diperoleh Ani dari Bank:<br>";
for ($i = 0; $i < count($pecahan); $i++) {
  echo "Rp. ". number_format($pecahan[$i], 0, ',', '.'). ": ". $jml_pecahan[$i]. "<br>";
}

?>