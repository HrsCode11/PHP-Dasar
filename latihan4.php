<?php

$t = date(format:"H");
echo "If";
if($t < 16){
    echo "Selamat Siang";
}

$t= date(format:"H");
echo "<br> If dan Else <br>";
if($t < 20){
    echo "Selamat Siang";
}else{
    echo "Selamat Malam";
}

echo "<br> Nested If <br>";
if($t < 11){
    echo "Selamat Pagi";
} elseif ($t < 16){
    echo " Selamat Sore";
} else{
    echo "Selamat Malam";
}


?>