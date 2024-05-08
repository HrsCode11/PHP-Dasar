<?php

$dataSiswa = array(
    array("NoUrut" => 1, "Nama" => "Adi", "Poin" => 75),
    array("NoUrut" => 2, "Nama" => "Joni", "Poin" => 80),
    array("NoUrut" => 3, "Nama" => "Jihan", "Poin" => 65),
    array("NoUrut" => 4, "Nama" => "Aya", "Poin" => 70),
    array("NoUrut" => 5, "Nama" => "Ita", "Poin" => 85),
    array("NoUrut" => 6, "Nama" => "Budi", "Poin" => 90),
    array("NoUrut" => 7, "Nama" => "Tini", "Poin" => 95),
    array("NoUrut" => 8, "Nama" => "Sari", "Poin" => 65),
);

foreach ($dataSiswa as $siswa) {
    if ($siswa["NoUrut"] == 5) {
        echo "Poin siswa dengan nomor urut 5: " . $siswa["Poin"] . "<br>";
        break;
    }
}

foreach ($dataSiswa as $siswa) {
    if ($siswa["Poin"] == 90) {
        echo "Nama siswa dengan poin 90: " . $siswa["Nama"] . "<br>";
    }
}

$found = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa["Poin"] == 100) {
        echo "Nama siswa dengan poin 100: ". $siswa["Nama"]. "<br>";
        $found = true;
        break;
    }
}
if (!$found) {
    echo "Tidak ada<br>";
}

