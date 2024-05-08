<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywoards" content="233307050">
    <meta name="author" content="Haris Cahyana">
</head>

<body>
    <h1>Halaman PHP saya</h1>
    <?php
    $txt= "Selamat Datang";
    $txt2= "Politeknik Negri Madiun";
    $x= 5;
    $y= 10.5;

    echo "<p>isi Variable txt adalah: $txt</p>";
    echo "<p>isi Variable x adalah: $x</p>";
    echo "<p>isi Variable y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;
    

    define("nama_konstanta","haris");
    echo "<br>".nama_konstanta;
    ?>
</body>

</html>