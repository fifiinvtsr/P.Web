<?php
// soal no 1.1
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
    echo "<br>";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    echo "<br>";
}

// soal no 1.2
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
    echo "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
    echo "<br>";
}
?>