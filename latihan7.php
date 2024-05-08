<?php

$namaBuah= array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka" .$namaBuah[0] . "," .$namaBuah[1] . "dan" . $namaBuah[2] . ". <br>";

echo "saya suka" . $namaBuah[1];
echo "saya suka" . $namaBuah[2];
echo "saya suka" . $namaBuah[3];
echo "saya suka" . $namaBuah[4]. "<br>";

$umur= array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
$umur['ahmad']="50 Tahun";
echo "Umur andi adalah" . $umur['Andi']. "<br>";
echo "Umur ben adalah" . $umur['Ben']. "<br>";
echo "Umur joe adalah" . $umur['Joe'] . "<br>";
echo "Umur ahmad adalah" . $umur['ahmad'] . "<br>";