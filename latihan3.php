<?php

$x= 5;
$y= 10;

echo "Penambahan ".$x + $y. "<br>";
echo "Pengurangan ".$x - $y. "<br>";
echo "Perkalian ".$x * $y. "<br>";
echo "Pembagian ".$x / $y. "<br>";
echo "Modulus ".$x & $y. "<br>";
echo "Exponensial ".$x ** $y. "<br>";
echo ("<br>");

$x += 2;
$y *= 2;
echo "Penambahan x".$x. "<br>";
echo "Perkalian y".$y. "<br>";
echo ("<br>");

echo "isi ++x".++$x. "<br>";
echo "isi x++".$x++. "<br>";
echo "isi x".$x. "<br>";
echo("<br>");
echo "Isi --y =".--$y. "<br>";
echo "Isi y-- =".$y--. "<br>";
echo "Isi y =".$y. "<br>";
echo("<br>");

$user = "Andi Darmawan";
$status = (empty(($user))) ? "kosong" : "Ada isi";
echo "Status user : ".$status. "<br>";
echo $color = $color ?? "red";

?>